<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Events\SubscriptionCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'area' => 'required|string',
            'message' => 'required|string',
        ]);

        $subscription = Subscription::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'area' => $request->area,
            'message' => $request->message,
        ]);

        try {
            // Send confirmation email to the subscriber
            Mail::to($subscription->email)->send(new SubscriptionConfirmation($subscription));
            
            return response()->json(['message' => 'Subscribed successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to subscribe. Please try again.'], 500);
        }
    }
}
