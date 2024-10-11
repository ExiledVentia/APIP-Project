<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Users::all();
        return view('user/index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Users::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        $user = Users::find();
        
        return view('user/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        $user = Users::findOrfail();
        $user->update($request->all());

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users, $id)
    {
        $user = Users::findOrfail($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}
