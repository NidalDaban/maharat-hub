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
    public function myProfile()
    {
        $user = User::with(['skills', 'languages' => function ($query) {
            $query->withPivot('level');
        }, 'country'])
            ->find(auth()->id());

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

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->fill($request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'date_of_birth',
            'gender',
            'about_me',
            'country_id',
        ]));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/profile-images');
            $user->image_path = str_replace('public/', '', $path);
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        if ($request->has('skills')) {
            $selectedSkills = array_keys(array_filter($request->skills));
            $user->skills()->sync($selectedSkills);
        }

        if ($request->has('languages')) {
            $languagesWithLevels = [];
            foreach ($request->languages as $languageId => $data) {
                if (isset($data['selected'])) {
                    $languagesWithLevels[$languageId] = ['level' => $data['level'] ?? null];
                }
            }
            $user->languages()->sync($languagesWithLevels);
        }

        return Redirect::route('myProfile')->with('success', 'تم تحديث الملف الشخصي بنجاح!');
    }

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
