<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\User;

use Illuminate\Http\Request;


class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pet.index', compact('pets'));
    }

    public function create()
    {
        $users = User::all();
        return view('pet.create', compact('users'));
    }

    public function store(Request $request)
    {

        $pet = new pet();
        $pet->name = $request->name;
        $pet->save();

        return redirect()->route('pet.index');


    }


}


