<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class CalculateController extends Controller
{
    public function calculate()
    {


    function addr($a,$b,$c)
    {
    $result=$a+($b/16)+($c/56);
    return $result;
    }
    $kyat=request()->kyat;
    $pay=request()->pay;
    $yway=request()->yway;
    $yyway=request()->yyway;
    $ypay=request()->ypay;
    $yway=$yway+$yyway;
    $pay=$pay+$ypay;
    if($yway>=3.5)
    {
        $pay=$pay+intdiv($yway,3.5);
        $yway=fmod($yway,3.5);
    }
   // $test=fmod(3.8,3.5);

    if($pay>=16)
    {
        $kyat=$kyat+intdiv($pay,16);
       $pay=fmod($pay,16);
    }
    session(['kyat'=>$kyat]);
    session(['yway'=>$yway]);
    session(['pay'=>$pay]);
   $rsl1=addr($kyat,$pay,$yway);
    $f=request()->sign;
    if($f==16)
    {
      $final=$rsl1*1830000;
    }elseif($f==15){
     $final=$rsl1*1740000;
    }
        else
    {
     $final=$rsl1*1300000;
    }
    session(['status' => round($final)]);

    return back();


    }
}
