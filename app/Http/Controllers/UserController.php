<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        // dd($request->all());
    $request->validate([
            'name' => 'required|string|max:255',
            'reg_number' => 'required|string|max:255|unique:users',
            'date_of_registration' => 'required|date',
            'allergy_information' => 'nullable|string',
            'additional_information' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'reg_number' => $request->reg_number,
            'date_of_registration' => $request->date_of_registration,
            'allergy_information' => $request->allergy_information,
            'additional_information' => $request->additional_information,
        ]);

        return redirect()->route('user.index');
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }

    public function print($id)
    {
        $user = User::findOrFail($id);
        $pdf = PDF::loadView('user.print', compact('user'));
        $pdf->setOption('isHtml5ParserEnabled', true);
        $pdf->setOption('isPhpEnabled', true);
        return $pdf->download('user-details.pdf');
    }
}
