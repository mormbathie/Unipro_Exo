<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index(){
        return view('apprenant');
    }
    public $apprenant = [
                             ['id'=> 1, 'nom' => 'Fatou dia', 'age'=> 23],
                             ['id'=> 2, 'nom' => 'Ngor Diouf', 'age'=> 18],

                        ];

    public function updateForm($id){
        foreach($this->apprenant as $apprenants){
            if($apprenants['id']== $id){
                $apprenantsToupdate = $apprenants;
                return view('/update')->with('apprenantsToupdate',$apprenantsToupdate);
            }
        }
    }
    public function update(Request $request,$id){
        foreach($this->apprenant as $apprenants){
            if($apprenants['id']== $id){
                $apprenants['nom'] = $request->input('nom');
                $apprenants['age'] = $request->input('age');
                return $this->apprenant;
            }
        }
    }
}
