<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Office;

class OfficeController extends Controller
{
    public function index(){

        $offices = Office::all();
        return view('pages.offices', compact('offices'));

    }

    public function show($id){

        $office = Office::findOrFail($id);
        return view('pages.office', compact('office'));

    }
}
