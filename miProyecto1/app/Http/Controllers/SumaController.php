<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function show()
    {
        return view('suma');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1', 0);
        $num2 = $request->input('num2', 0);
        $resultado = $num1 + $num2;

        return view('suma', ['num1' => $num1, 'num2' => $num2, 'resultado' => $resultado]);
    }
}
