<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Commission;
use App\Models\Staff;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index()
    {
        $commissions = Commission::with(['staff', 'appointment.client', 'appointment.service'])->latest()->get();
        $staffMembers = Staff::all();
        $appointments = Appointment::with(['client', 'service'])->latest()->get();

        return view('Admin.commissions.index', compact('commissions', 'staffMembers', 'appointments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'appointment_id' => 'nullable|exists:appointments,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,paid',
        ]);

        $serviceCost = 0;
        $rate = 0;

        if (!empty($validated['appointment_id'])) {
            $appointment = Appointment::with('service')->find($validated['appointment_id']);
            $serviceCost = $appointment->service->price ?? 0;
        }

        $staff = Staff::find($validated['staff_id']);
        $rate = $staff->commission_rate ?? 0;

        Commission::create([
            'staff_id' => $validated['staff_id'],
            'appointment_id' => $validated['appointment_id'] ?? null,
            'service_cost' => $serviceCost,
            'rate' => $rate,
            'amount' => $validated['amount'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('commissions.index')->with('success', 'Commission recorded successfully.');
    }

    public function update(Request $request, Commission $commission)
    {
        $validated = $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,paid',
        ]);

        $commission->update($validated);

        return redirect()->route('commissions.index')->with('success', 'Commission updated successfully.');
    }

    public function destroy(Commission $commission)
    {
        $commission->delete();
        return redirect()->route('commissions.index')->with('success', 'Commission entry deleted successfully.');
    }
}
