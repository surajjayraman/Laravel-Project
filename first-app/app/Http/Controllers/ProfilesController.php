<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; // Add a semicolon at the end of this line
use GuzzleHttp\Client;


class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        // dd($user);
        // dd(User::find($user));
        $username = User::findOrFail($user);
        return view('profiles.index', ['user' => $username]);
    }



}
