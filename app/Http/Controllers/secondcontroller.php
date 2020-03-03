<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Secondcontroller extends Controller{


    public function second($fname){

        echo "hello " .$fname;

    }

    public function third($age){

        echo "suhail age is " .$age;
    }


}
?>