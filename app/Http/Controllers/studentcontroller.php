<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class studentcontroller extends Controller
{
    public function index(){
    $student = Student();
    return view('index.blade')
    };
    public function create(){

    };
    public function edit('$id'){

    };
    public function delete(){

    };
};
