<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffMembers = Staff::latest()->get();
        return view('Admin.staff.index', compact('staffMembers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'phone' => 'required|string|max:20',
            'role' => 'required|string|max:255',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'status' => 'nullable|string|in:active,inactive',
        ]);

        Staff::create($validated);

        return redirect()->route('staff.index')->with('success', 'Staff member added successfully.');
    }

    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email,' . $staff->id,
            'phone' => 'required|string|max:20',
            'role' => 'required|string|max:255',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'status' => 'nullable|string|in:active,inactive',
        ]);

        $staff->update($validated);

        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff member removed successfully.');
    }
}
