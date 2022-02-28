<?php

namespace App\Http\Controllers;
 use BD;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function index()
{
  $propietarios = BD::table('propietarios')->get();
return view('propietarios', compact('propietarios'));

}
}
