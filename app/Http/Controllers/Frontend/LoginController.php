<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // dd('eak');
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => \Hash::make($validatedData['password']),
        ]);

        return redirect()->route('login')->with('sukses', 'Anda Berhasil Registrasi');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
// dd($user);
        if (Auth::attempt($user)) {
        //     $user = Auth::user();
        //     return redirect()->route('home')->with('message', 'Anda Berhasil Login');
        }else{
        //     return redirect()->route('login')->with('message', 'Daftar Dulu Biar Bisa Login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('pesan', 'Anda Berhasil Logout');
    }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
