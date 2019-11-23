<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    public function index()
    {
      $max2 = null;
      return view('task1', ['var' => $max2]);
    }

    public function findNumber(Request $request)
    {
      $angka = $request->angka;
      $array = str_replace(array( '\'', '"', '.' , ';', '<', '>', " ", ",", ", "), ",", $angka);
      $arr = array_map('intval', explode(",", $array));

      $max1 = $max2 = PHP_INT_MIN;

      for ($i=0; $i <count($arr) ; $i++) {
        if ($arr[$i] > $max1) {
          $max2 = $max1;
          $max1 = $arr[$i];
        } else if ($arr[$i] > $max2){
          $max2 = $arr[$i];
        }
      }
      if ($max2 == -9223372036854775808) {
        $max2 = "Masukkan Minimal 2 Angka";
      }
      return view('task1', ['var' => $max2]);
    }
}
