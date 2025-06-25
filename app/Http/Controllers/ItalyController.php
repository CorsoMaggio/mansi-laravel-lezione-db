<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItalyController extends Controller
{
    public function town()
    {
        //https://axqvoqvbfjpaamphztgd.functions.supabase.co/comuni

        $response = Http::get('https://axqvoqvbfjpaamphztgd.functions.supabase.co/comuni')->json();

        return view('comuni', compact('response'));
    }
}
