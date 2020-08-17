<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TestNotification;
use App\User;

class SendNotification extends Controller
{
    public function create()
    {
        return view('notification');
    }

    public function store(Request $request)
    {
        $user = User::find(1); // id của user mình đã đăng kí ở trên, user này sẻ nhận được thông báo
        $data = $request->only([
            'title',
            'content',
        ]);
        $user->notify(new TestNotification($data));

        return view('notification');
    }
}
