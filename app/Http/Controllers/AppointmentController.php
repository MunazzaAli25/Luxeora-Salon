<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['client', 'service', 'staff'])->latest()->get();
        $clients = Client::all();
        $services = Service::all();
        $staffMembers = Staff::all();

        return view('Admin.appointments.index', compact('appointments', 'clients', 'services', 'staffMembers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'staff_id' => 'required|exists:staff,id',
            'start_time' => 'required|date',
            'status' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $validated['status'] = $validated['status'] ?? 'scheduled';

        Appointment::create($validated);

        return redirect()->route('appointments.index')->with('success', 'Appointment scheduled successfully.');
    }

    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'staff_id' => 'required|exists:staff,id',
            'start_time' => 'required|date',
            'status' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $appointment->update($validated);

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment cancelled successfully.');
    }
}
