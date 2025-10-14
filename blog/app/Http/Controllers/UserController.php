<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUsers()
    {
        // Selecciona todos los usuarios
        $data = User::all();
        return view('admin.users')
            ->with('usuarios', $data);
    }

    public function createUsers(Request $request)
    {
        // Reglas de validación
        $request->validate([
            'name' => 'required|min:3',
            'nickname' => 'required|min:2|unique:users,nickname',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
            'password2' => 'required|min:4|same:password',
        ]);

        // Guardar registro
        $user = new User();
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->img = "default.jpg";
        $user->save();

        return redirect()->back()->with('success', 'Usuario creado correctamente');
    }
}
