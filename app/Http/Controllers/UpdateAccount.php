<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateAccount extends Controller
{
    public function profile(User $user)
    {
        return view('update.index', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    public function updatePage(User $user)
    {
        return view('update.page', [
            'title' => 'Update Profile',
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            'address' => 'required|min:15',
            'phone' => 'required|numeric|min:11'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/profile/' . $user->id)->with('success', 'Product Updated');
    }
}