<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Employee::all();
        return view('pages.emps', compact('employees'));

    }

    public function show($id){

        $employee = Employee::findOrFail($id);
        return view('pages.emp', compact('employee'));

    }

    public function create(){

        return view('pages.emp-create');

    }

    public function store(Request $request){

        $newEmp = new Employee;

        $newEmp -> name = $request -> input('name');
        $newEmp -> lastname = $request -> input('lastname');
        $newEmp -> hire_date = $request -> input('hire_date');

        $newEmp -> save();

        return redirect() -> route('employees-index');

    }
}
