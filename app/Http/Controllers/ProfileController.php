<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Country;
use App\Models\Skill;
use App\Models\User;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function myProfile()
    {
        $user = User::with('skills', 'country', 'language')->find(auth()->id());

        $countries = Country::all();
        $skills = Skill::all();
        $languages = Language::all();

        return view('theme.myProfile.master', compact('user', 'countries', 'skills', 'languages'));
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Update basic info
        $user->fill($request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'date_of_birth',
            'gender',
            'about_me',
            'country_id',
            'language_id'
        ]));

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profile-images', 'public');
            $user->image_path = $path;
        }

        // Handle email verification
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        // Sync skills (many-to-many)
        if ($request->has('skills')) {
            $user->skills()->sync($request->skills);
        }

        return Redirect::route('myProfile')->with('status', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
