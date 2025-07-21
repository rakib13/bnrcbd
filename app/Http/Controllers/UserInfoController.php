<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
// Optional: Validation
    $request->validate([
        'full_name'  => 'required|string|max:255',
        'user_name'  => 'required|string|max:255|unique:user_infos,user_name',
        'email'      => 'required|email|unique:user_infos,email',
        'password'   => 'required|string|min:5',
        'role'       => 'required|string',
        'is_active'  => 'nullable|boolean',
        'is_archive' => 'nullable|boolean',
        'is_deleted' => 'nullable|boolean',
    ]);

    $userInfo = new UserInfo;
    $userInfo->full_name = $request->full_name;
    $userInfo->user_name = $request->user_name;
    $userInfo->email = $request->email;
    $userInfo->password = bcrypt($request->password);
    $userInfo->role = $request->role;
    $userInfo->is_active = $request->is_active ?? true;
    $userInfo->is_archive = $request->is_archive ?? false;
    $userInfo->is_deleted = $request->is_deleted ?? false;
    $userInfo->save();

     //return redirect()->route('pages.userInfo')->with('status', 'User created successfully!');
      return redirect('/login')->with('status', 'Registration successful. Please login.');


    }

    /**
     * Display the specified resource.
     */
    public function show(UserInfo $userInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserInfo $userInfo)
    {
        $validated = $request->validate([
            'full_name' => 'sometimes|string|max:255',
            'user_name' => 'sometimes|string|max:255|unique:user_infos,user_name,' . $userInfo->id,
            'email' => 'sometimes|email|unique:user_infos,email,' . $userInfo->id,
            'password' => 'sometimes|string|min:6',
            'role' => 'sometimes|string',
            'is_active' => 'sometimes|boolean',
            'is_archive' => 'sometimes|boolean',
            'is_deleted' => 'sometimes|boolean',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $userInfo->update($validated);
        return response()->json($userInfo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInfo $userInfo)
    {
         $userInfo->update(['is_deleted' => true]);

        return response()->json(['message' => 'User soft-deleted successfully.']);
    }
}
