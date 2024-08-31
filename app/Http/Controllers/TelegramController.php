<?php

namespace App\Http\Controllers;

use App\Notifications\NotificacionBotTelegram;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('telegram');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $nombre = $request->input('nombre'); 
        $edad = $request->input('edad');
        $mensaje=$request->input('mensaje');
       
        $fecha = now();
        $fechaEnString = $fecha->format('Y-m-d');
        $horaEnString = $fecha->format('H:i:s');
        $nombre_usuario = 'Hola Mundo les dice Pollo :)';
        //$mensaje_para_telegram = 'Este es un mensaje del bot, no lo envia a NINGUN GRUPO /nMi mensaje es: '. $nombre_usuario .  "\nCon fecha: " . $fechaEnString . " y hora: " . $horaEnString;
        $mensaje_para_telegram = "El Usuario: " .$nombre ." con edad: " . $edad . " escribio: " . $mensaje;
        $usuario = new \App\Models\User();
        $usuario->notify(new NotificacionBotTelegram($mensaje_para_telegram));
        echo " Mensaje enviado";
        //o redirigirlo a una vista return redirect()->route('Tu vista');


        
    }

   
}
