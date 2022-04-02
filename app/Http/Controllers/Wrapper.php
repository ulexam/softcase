<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function symbols(){
        $json= Http::get('https://www.tokocrypto.com/open/v1/common/symbols')->json();

        return response()->json($json);
    }

    public function time(){
        $json= Http::get('https://www.tokocrypto.com/open/v1/common/time')->json();

        return response()->json($json);
    }

    public function depth(){
        $json= Http::get('https://www.tokocrypto.com/open/v1/market/depth?api_key=0A9DBF50898D5DBBE2445a92d86934feF7XytvaeaW24I4JGuKjVaU2TeYAFFNCG')->json();

        return response()->json($json);
    }

    public function busd(){
        $json= Http::get('https://api.binance.me/api/v3/trades?symbol=BUSDBIDR')->json();

        return response()->json($json);
    }

    public function klines(){
        $json= Http::get('https://www.tokocrypto.com/open/v1/common/time')->json();

        return response()->json($json);
    }
}
