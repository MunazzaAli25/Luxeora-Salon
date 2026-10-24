<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::latest()->get();
        return view('Admin.suppliers.index', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:suppliers,email',
            'phone' => 'required|string|max:50',
            'address' => 'nullable|string',
        ]);

        Supplier::create($validated);

        return redirect()->back()->with('success', 'Supplier created successfully.');
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:suppliers,email,' . $id,
            'phone' => 'required|string|max:50',
            'address' => 'nullable|string',
        ]);

        $supplier->update($validated);

        return redirect()->back()->with('success', 'Supplier updated successfully.');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->back()->with('success', 'Supplier deleted successfully.');
    }
}