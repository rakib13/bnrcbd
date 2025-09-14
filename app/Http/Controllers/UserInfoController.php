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
        $users = UserInfo::orderBy('is_active', 'desc')->get();

        return view('dashboard.userInfo.allUser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser()
    {
        //
        return view('dashboard.userInfo.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {

        // Optional: Validation
        $request->validate([
            'full_name'  => 'required|string|max:255',
            'user_name'  => 'required|string|max:255|unique:user_infos,user_name',
            'email'      => 'required|email|unique:user_infos,email',
            'password'   => 'required|string|min:5',
            'role'       => 'required|string',
            'is_active'  => 'nullable|boolean',
            'is_deleted' => 'nullable|boolean',
        ]);

        $userInfo = new UserInfo;
        $userInfo->full_name = $request->full_name;
        $userInfo->user_name = $request->user_name;
        $userInfo->email = $request->email;
        $userInfo->password = bcrypt($request->password);
        $userInfo->role = $request->role;
        $userInfo->is_active = $request->is_active ?? false;
        $userInfo->is_deleted = $request->is_deleted ?? false;
        $userInfo->save();

        //return redirect()->route('pages.userInfo')->with('status', 'User created successfully!');
        return redirect('/user-list')->with('status', 'Registration successful. Please login.');
    }

    /*
    Status IS FEATURED
    */
    public function updateUserActivate(Request $request, $id)
    {
        $user = UserInfo::findOrFail($id);

        $user->is_active = $request->is_active;
        $user->save();

        if ($request->is_active == 1)
            return redirect()->back()->with('success', 'The following user has been activated!');
        else
            return redirect()->back()->with('error', 'The Following user has been deactivated!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.registration');
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
            'is_deleted' => 'nullable|boolean',
        ]);

        $userInfo = new UserInfo;
        $userInfo->full_name = $request->full_name;
        $userInfo->user_name = $request->user_name;
        $userInfo->email = $request->email;
        $userInfo->password = bcrypt($request->password);
        $userInfo->role = $request->role;
        $userInfo->is_active = $request->is_active ?? false;
        $userInfo->is_deleted = $request->is_deleted ?? false;
        $userInfo->save();

        //return redirect()->route('pages.userInfo')->with('status', 'User created successfully!');
        return redirect('/login')->with('status', 'Registration successful. Please login.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $userInfo = UserInfo::findOrFail($id);
        return view('dashboard.userInfo.showUser', compact('userInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $userInfo = UserInfo::findOrFail($id);
        return view('dashboard.userInfo.editUser', compact('userInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $userInfo = UserInfo::findOrFail($id);
        if($request->password != null || $request->password != ''){
            $validated = $request->validate([
                'full_name'  => 'required|string|max:255',
                'user_name'  => 'required|string|max:255',
                'password'   => 'string|min:5',
                'role'       => 'required|string'
            ]);
        }
        else{
            $validated = $request->validate([
                'full_name'  => 'required|string|max:255',
                'user_name'  => 'required|string|max:255',
                'role'       => 'required|string'
            ]);
        }

        // if($request->password != $request->confirm_password)
        //     return redirect()->back()->with('error','Password Did not match');

        // return response()->json($request->confirm_password);

        $userInfo->full_name = $request->full_name;
        $userInfo->user_name = $request->user_name;
        // $userInfo->email = $request->email;
        if($request->password != null || $request->password != '')
            $userInfo->password = bcrypt($request->password);
        $userInfo->role = $request->role;
        $userInfo->save();

         return redirect('/user-list')->with('status', 'User Info Updated Successfully!');
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
