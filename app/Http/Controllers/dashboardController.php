<?php

namespace App\Http\Controllers;

class dashboardController extends Controller
{

    function showLogin()
    {
        return view('login');
    }

    function showdashboard()
    {
        return view('dashboard');
    }

    // function showselcome()
    // {
    //     return view('welcome');
    // }


    // function showFakultas()
    // {
    //     return view('fakultas');
    // }


    // function showLogin()
    // {
    //     return view('login');
    // }

    // function showProdi()
    // {
    //     return view('prodi');
    // }
}
