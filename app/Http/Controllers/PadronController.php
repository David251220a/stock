<?php

namespace App\Http\Controllers;

use App\Models\Padron;
use Illuminate\Http\Request;

class PadronController extends Controller
{
    public function index(Request $request)
    {
        $search = str_replace('.', '', $request->search);

        if(empty($search)){
            $data = [];
        }else{
            $data = Padron::where('cedula', $search)
            ->first();
        }
        // dd($data);

        return view('padron.index', compact('search', 'data'));
    }
}
