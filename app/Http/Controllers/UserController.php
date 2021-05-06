<?php

namespace App\Http\Controllers;

use App\UserDomicilio;
use App\User;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    public function index()
    {
        return UserDomicilio::all();
    }

    public function show($user_id)
    {

        $ud = UserDomicilio::where('user_id', $user_id)->get();
        $u = User::where('id', $user_id)->first();
        return Response::json(["domicilios" => $ud, "usuario" => $u]);
    }

    public function calcular_edad($user_id)
    {
        $u = User::where('id', $user_id)->first();
        list($ano, $mes, $dia) = explode("-", $u->fecha_nacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return Response::json(["anios" => $ano_diferencia]);
    }
}
