<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getcolour(Request $request){
      $req = Request::input('cars');
      if($req == 'one'){
        echo "&nbsp&nbsp&nbsp
          <button class='red' value='red' id='red' onclick='extchange(this.value)'>  </button>
          <button class='blue' value='blue' id='blue' onclick='extchange(this.value)'>  </button>
          <button class='silver' id='silver' value='silver' onclick='extchange(this.value)'>  </button>
          <button class='white' id='white' value='white' onclick='extchange(this.value)'></button>
          <button class='black' id='black' value='black' onclick='extchange(this.value)'></button>";
      } else if($req == 'two'){
        echo "&nbsp&nbsp&nbsp
          <button class='red' value='red' id='red' onclick='extchange(this.value)'>  </button>
          <button class='green' value='green' id='green' onclick='extchange(this.value)'>  </button>
          <button class='yellow' id='yellow' value='yellow' onclick='extchange(this.value)'>  </button>
          <button class='white' id='white' value='white' onclick='extchange(this.value)'></button>
          <button class='black' id='black' value='black' onclick='extchange(this.value)'></button>";
      }
    }

    function intreq(Request $request){
      $req = Request::input('cars');
      if($req == 'one'){
        echo "&nbsp&nbsp&nbsp
          <button class='red' value='redint' id='redint' onclick='intchange(this.value)'>  </button>
          <button class='leather' value='leatherint' id='leatherint' onclick='intchange(this.value)'>  </button>
          <button class='black' id='black' value='blackint' onclick='intchange(this.value)'></button>";
      } else if($req == 'two'){
        echo "&nbsp&nbsp&nbsp
          <button class='silver' value='greyint' id='greyint' onclick='intchange(this.value)'>  </button>
          <button class='leather' value='leatherint' id='leatherint' onclick='intchange(this.value)'>  </button>
          <button class='black' id='black' value='blackint' onclick='intchange(this.value)'></button>";
      }
    }

    function getcar(Request $request){
      $req = Request::input('cars');
      if($req == 'one'){
        echo "<img src='/img/cextblack.jpg'
        class='pic'>";
      } else if($req == 'two'){
        echo "<img src='/img/textblack.jpg'
        class='pic'>";
      }

    }

    function getint(Request $request){
      $req = Request::input('cars');
      if($req == 'one'){
        echo "<img src='/img/cintblack.jpg' class='pic'>";
      } else if($req == 'two'){
        echo "<img src='/img/tintblack.jpg' class='pic'>";
      }
    }




      function gethome(){
        return view('home');
      }


}
