<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request){
        $usuario = User::where("name", $request->name)->first();

        if(!$usuario || !Hash::check($request->password, $usuario->password)){
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        }else{
            return response()->json(['token' => $usuario->createToken($usuario->name)->plainTextToken]);
        }
    }

}
