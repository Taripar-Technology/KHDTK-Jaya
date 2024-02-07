<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'old-password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect('/change-password')
                ->withErrors($validator)
                ->withInput();
        }

        // Check if the old password matches
        if (!Hash::check($request->input('old-password'), Auth::user()->password)) {
            // Redirect back with a custom error message for 'old-password'
            return redirect('/change-password')
                ->withErrors(['old-password' => 'The old password is incorrect.'])
                ->withInput();
        }

        // Update the password
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect to the user profile with a success message
        return redirect('/user-profile')
            ->with('success', 'Password changed successfully.');
    }

    public function changePassForm()
    {
        // Return the change password view
        return view('session/change-password/changePassword');
    }
}
