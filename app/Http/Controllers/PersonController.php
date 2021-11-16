<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{       private $code = "190613006";
    private $name = "Khaerunisa Trisania";
    //
    public function index() {
        return view("person.index");


    }

    public  function sendData(){
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    public function add()
    {
        return view('person.add');
    }

    public function addProcess(Request $request)
    {
        $this->validate($requst,[
            'person_name' => 'required|max:30',
        ]
        
        )
    }


}