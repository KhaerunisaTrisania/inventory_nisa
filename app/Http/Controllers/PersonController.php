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

}