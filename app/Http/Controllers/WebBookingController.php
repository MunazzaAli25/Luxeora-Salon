<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WebBookingController extends Controller
{
    /**
     * Show the public appointment booking form.
     */
    public function create()
    {
        $services = Service::orderBy('name')->get();
        $staff    = Staff::where('status', 'active')->orderBy('name')->get();

        return view('website.appointment', compact('services', 'staff'));
    }

    /**
     * Handle the public booking form submission.
     * Finds or creates a Client, then creates the Appointment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'phone'            => 'required|string|max:30',
            'email'            => 'nullable|email|max:255',
            'service_id'       => 'nullable|exists:services,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|string',
            'message'          => 'nullable|string|max:1000',
        ]);

        // Find or create client by phone number
        $client = Client::firstOrCreate(
            ['phone' => $validated['phone']],
            [
                'name'    => $validated['name'],
                'email'   => $validated['email'] ?? null,
                'address' => '',
            ]
        );

        // Build combined start_time from date + time string
        $startTime = Carbon::parse(
            $validated['appointment_date'] . ' ' . $validated['appointment_time']
        );

        // Pick any available active staff if none specified
        $staffId = Staff::where('status', 'active')->value('id');

        Appointment::create([
            'client_id'  => $client->id,
            'service_id' => $validated['service_id'] ?? null,
            'staff_id'   => $staffId,
            'start_time' => $startTime,
            'status'     => 'scheduled',
            'notes'      => $validated['message'] ?? null,
        ]);

        return redirect()->route('web.appointment')
            ->with('success', 'Thank you! Your appointment has been booked. We will contact you shortly to confirm.');
    }
}
