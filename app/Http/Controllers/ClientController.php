<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        $staffMembers = Staff::all();
        // Also pass stylists for the dropdown (using staff as stylists)
        $stylists = Staff::all();
        return view('Admin.clients.index', compact('clients', 'staffMembers', 'stylists'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|unique:clients,email',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'date_of_birth' => 'nullable|date',
                'Preferences' => 'nullable|string',
                'preferred_stylist_id' => 'nullable|exists:staff,id',
            ]);

            Client::create($validated);

            return redirect()->route('clients.index')->with('success', 'Client created successfully.');
        } catch (\Exception $e) {
            Log::error('Client creation failed: ' . $e->getMessage());
            return redirect()->route('clients.index')->with('error', 'Failed to create client: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Client $client)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|unique:clients,email,' . $client->id,
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'date_of_birth' => 'nullable|date',
                'Preferences' => 'nullable|string',
                'preferred_stylist_id' => 'nullable|exists:staff,id',
            ]);

            $client->update($validated);

            return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
        } catch (\Exception $e) {
            Log::error('Client update failed: ' . $e->getMessage());
            return redirect()->route('clients.index')->with('error', 'Failed to update client: ' . $e->getMessage());
        }
    }

    public function destroy(Client $client)
    {
        try {
            $client->delete();
            return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Client deletion failed: ' . $e->getMessage());
            return redirect()->route('clients.index')->with('error', 'Failed to delete client: ' . $e->getMessage());
        }
    }
}