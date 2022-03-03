<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAsRead()
    {
        $user = auth()->user();

        foreach ($user->unreadNotifications as $key => $notification) {
            $notification->read_at = now();
            $notification->save();
            //dd($notification);
        }

        // return response()->json(['success' => 'leidas']);
        return back();
    }
}
