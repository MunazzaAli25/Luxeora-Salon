<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Client;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('client')->latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('feedback.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'rating' => 'nullable|integer|min:1|max:5',
            'message' => 'required|string',
            'status' => 'nullable|string',
        ]);

        Feedback::create($validated);

        return redirect()->route('feedback.index')->with('success', 'Feedback submitted successfully.');
    }

    public function show(Feedback $feedback)
    {
        $feedback->load('client');
        return view('feedback.show', compact('feedback'));
    }

    public function edit(Feedback $feedback)
    {
        $clients = Client::all();
        return view('feedback.edit', compact('feedback', 'clients'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'rating' => 'nullable|integer|min:1|max:5',
            'message' => 'required|string',
            'status' => 'nullable|string',
        ]);

        $feedback->update($validated);

        return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully.');
    }
}