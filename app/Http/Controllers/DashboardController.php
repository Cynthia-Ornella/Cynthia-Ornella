<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        // Récupérer le nombre d'utilisateurs
        $userCount = User::count();

        // Passer cette information à la vue du tableau de bord
        return view('dashboard.index' , compact('userCount'));

    }

    public function userManagement()
    {
        // Récupérer la liste des utilisateurs
        $users = User::all();

        // Passer la liste des utilisateurs à la vue user-management
        return view('pages.laravel-examples.user-management', compact('users'));
    }
}


