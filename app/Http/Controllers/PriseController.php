<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriseController extends Controller
{
    public function calculate()
    {   $p=request()->price;
        $f=request()->sign;
        if($f==16)
        {
          $final=$p/1830000;
        }
        elseif($f==15){
         $final=$p/1250000;
        }
            else
        {
         $final=$p/950000;
        }
        if($final>0)
        {
            if($final-floor($final)>0)
            {
                $pay=($final-floor($final))*16;
                $kyat=floor($final);
            }elseif($final<1){
                $kyat=0;
                $pay=$final*16;

            }
            else
            {
                $kyat=$final;
                $realpay=0;
                $yway=0;
            }
        }
        if($pay-floor($pay)>0)
        {
            $realpay=floor($pay);
            $yway=($pay-floor($pay))*3.5;
        }
        elseif($pay<1)
        {
            $realpay=0;
            $yway=$pay*3.5;
        }else{
            $realpay=$pay;
            $yway=0;
        }
        if($kyat!==null)
        {
            session(['yes'=>78]);
        }
        session(['last'=>$kyat]);
        session(['pay'=>$realpay]);
        session(['yway'=>round($yway,2)]);
        var_dump($realpay);
        var_dump($yway);
       return back();
    }
}
