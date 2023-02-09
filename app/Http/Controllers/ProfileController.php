<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        // validate the form data
        $request->validate([
            // ...
            'profile_ picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // handle the profile picture upload
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_ picture');
            $filename = time() . '.' . $profilePicture->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('profile_pictures', $profilePicture, $filename);
            $user->profile_picture = 'profile_pictures/' . $filename;
        }

        // save the other profile data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // ...

        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}