<?php

namespace App\Http\Controllers;

use ccxt;

class TickerController extends Controller
{
    public function getPrice(){

        $exchange = new ccxt\coinone (array (
            'enableRateLimit' => true,
        ));


        $tickers = $exchange->fetch_tickers();


        dd ($tickers['ATOM/KRW'], $tickers['BTC/KRW']);


        return view('welcome', compact('tickers'));
    }
}
