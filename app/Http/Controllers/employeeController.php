<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function liste_employee(){
        $employees= Employee::paginate(5);
        return view("employee.liste",compact("employees"));
    }

    public function ajouter_employee(){
        return view("employee.ajouter");
    }
    public function ajouter_employee_traitement(Request $request){
        $request->validate([
            "firstName"=>"required",
            "lastName"=>"required",
            "cin"=>"required",
            "mission"=>"required",
        ]);
        Employee::create($request->all());
        return redirect("/ajouter")->with('status',"l'employée a été ajouté avec succées.");
    }
    
    public function update_employee($id){
        $employee = Employee::find($id);
        return view("employee.update", compact("employee"));
    }
    public function update_employee_traitement(Request $request){
        $request->validate([
            "firstName"=>"required",
            "lastName"=>"required",
            "cin"=>"required",
            "mission"=>"required",
        ]);
        $employee= Employee::find($request->id);
        $employee->firstName=$request->firstName;
        $employee->lastName=$request->lastName;
        $employee->cin=$request->cin;
        $employee->mission=$request->mission;
        $employee->update();
        return redirect("/employee")->with('status',"l'employée a été modifié avec succées.");

    }
    public function delete_employee($id){
        $employee= Employee::find($id);
        $employee->delete();
        return redirect("/employee")->with('status',"l'employée a été supprimé avec succées.");
    }
}


