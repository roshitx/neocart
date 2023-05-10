<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ItemNotFoundException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('role.admin.allusers', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.admin.adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required|min:3',
            'email' => 'string|required|email|unique:users,email',
            'password' => 'nullable|string',
            'birth' => 'date',
            'gender' => 'required|string',
            'role' => 'required|string'
        ]);

        $validatedData['password'] = $validatedData['password'] ?? Hash::make('password');

        User::create($validatedData);
        return redirect()->route('users.index')->with('success', "Successfully added new user.");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('role.admin.edituser', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'string|required|min:3',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'birth' => 'nullable|date',
            'gender' => 'required',
        ]);

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect()->route('users.index')->with('success', "User with id {$user->id} updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User has been deleted successfully.');
    }

    // Profile update by user
    public function profileUpdate(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'string|min:3|nullable|unique:users',
            'name' => 'required|string|min:3',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)->where(function ($query) use ($request) {
                    return $query->where('email', '!=', $request->email);
                }),
            ],
            'no_hp' => ['string',
                        'nullable',
                        "regex:/^(\+62|0)[0-9]{9,13}$/"
                    ],
            'birth' => 'date|nullable',
            'gender' => 'required',
            'bio' => 'string|max:70',
        ]);

        $id = $request->input('id');
        $user = User::find($id);
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->no_hp = $validatedData['no_hp'];
        $user->birth = $validatedData['birth'];
        $user->gender = $validatedData['gender'];
        $user->bio = $validatedData['bio'];


        try {
            $user->update($validatedData);
            return redirect()->route('profile.edit')->with('success', "Your profile has been updated");
        } catch (ItemNotFoundException $e) {
            return redirect()->route('profile.edit')->with('error', "Unable to update user data with id $id");
        }
    }



    // Chart Gender
    public function genderStats()
    {
        $maleCount = User::where('gender', 'Male')->count();
        $femaleCount = User::where('gender', 'Female')->count();
        $otherCount = User::where('gender', 'Other')->count();

        $data = [
            'male' => $maleCount,
            'female' => $femaleCount,
            'other' => $otherCount,
        ];

        return response()->json($data);
    }
}
