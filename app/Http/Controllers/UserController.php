<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Pencarian Search Data
    public function index(Request $request)
    {
        $users = DB::table('users')
            ->when($request->input('name'), function ($query, $name) {
                $query->where(function ($query) use ($name) {
                    $query->where('name', 'like', '%' . $name . '%')
                        ->orWhere('email', 'like', '%' . $name . '%');
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('pages.users.index', compact('users'));
    }

    // create
    public function create()
    {
        return view('pages.users.create');
    }

    // store
    public function store(Request $request)
    {
        // validate the request...
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'roles' => 'required|in:admin,staff,user',
        ]);

        // store the request...
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roles = $request->roles;
        $user->save();

        return redirect()->route('user.index')->with('success', 'User Created Successfully');
    }

    // show
    public function show($id)
    {
        $user = User::findOrfail($id);
        return view('pages.users.show', compact('user'));
    }


    //Edit
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.edit', compact('user'));
    }

    //Update
    public function update(Request $request, $id)
    {
        // Validate Request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'roles' => 'required|in:admin,staff,user',
        ]);

        // Update Request
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;

        // If password is not empty
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $notification = 'User ' . $user->name . ' updated successfully';

        return redirect()->route('user.index')->with('success', $notification);
    }

    //Destroy
    public function destroy($id)
    {
        $user = User::find($id);

        // Simpan nama pengguna sebelum dihapus
        $userName = strtoupper($user->name);

        $user->delete();

        // Gunakan nama pengguna saat memberikan pesan flash
        return redirect()->route('user.index')->with('success', 'User  :'  . $userName . ' successfully deleted');
    }
}
