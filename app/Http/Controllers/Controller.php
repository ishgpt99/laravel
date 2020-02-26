<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function form()
    {
        return view('formv');
    }
    public function submit(Request $req)
    {
        //$this->validate($req,['name'=>'required','psswrd'=>'required']);
        $data=(array)$req->all();
        return view('submitv')->with($data);
    }
}
