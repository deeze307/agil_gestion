<?php

namespace IAServer\Http\Controllers\IAServer;

use IAServer\Http\Controllers\IAServer\Model\Menu;
use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class IAServerController extends Controller
{
    public function index()
    {
        $root = IAServerController::AgilGestionMenu();
        $output = compact('root');
        return view('iaserver.home', $output);
    }

    public function login()
    {
        return view('auth.login2');
    }

    public static function AgilGestionMenu()
    {
        $all_menu = Menu::orderBy('titulo')->get();

        $root = array();
        foreach($all_menu as $menu)
        {
            if(self::menuAccess($menu->permiso))
            {
                $root[$menu->id] = $menu;
                $root[$menu->id]['submenu']  = array_filter(iterator_to_array($all_menu),function($m) use($menu){
                    if($m->root == $menu->id)
                    {
                        if(self::menuAccess($m->permiso))
                        {
                            return $m;
                        }
                    }
                });
            }
        }

        return $root;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function attemptLogin()
    {
       if(Auth::attempt(['name' => Input::get('name'), 'password' => Input::get('password')]))
       {
           return redirect('/index');
       }
        else
        {
            return redirect()->back()->with('error','Error de autenticación, por favor verifique que su usuario y contraseña sean correctos.');
        }

    }

    public static function menuAccess($permisos)
    {
        // Por defecto no se imprime el menu root
        $print = false;

       // Verifico permisos del menu

        $permisosToArray = explode(',',$permisos);

        // Si el menu no requiere permisos lo muestro
        if($permisos == null)
        {
            $print = true;
        }
        else
        {
            // El menu requiere permisos, verifico si el usuario dispone de los mismos
            if(Auth::user() && Auth::user()->hasRole($permisosToArray))
            {
                $print = true;
            }
            else
            {
                // No esta autenticado o no tiene permisos... oculto menu
                $print = false;
            }
        }

        return $print;
    }

    public function logo()
    {
        return view('iaserver.logo');
    }

    public function prompter()
    {
        return view('iaserver.common.prompt');
    }
}
