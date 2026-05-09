<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculation;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $type = $request->input('type');
        $value = (float) $request->input('value');
        $value2 = (float) $request->input('value2');
        $result = null;

        switch ($type) {
            case 'factorial':
                $result = $this->factorial((int)$value);
                break;
            case 'fibonacci':
                $result = $this->fibonacci((int)$value);
                break;
            case 'power':
                $result = pow($value, $value2);
                break;
            case 'root':
                $result = pow($value, 1/$value2);
                break;
            case 'sin':
                $result = sin($value);
                break;
            case 'cos':
                $result = cos($value);
                break;
            case 'tan':
                $result = tan($value);
                break;
            case 'asin':
                $result = asin($value);
                break;
            case 'acos':
                $result = acos($value);
                break;
            case 'atan':
                $result = atan($value);
                break;
            case 'log':
                $result = log($value);
                break;
            case 'exp':
                $result = exp($value);
                break;
        }

        Calculation::create([
            'operation' => $type,
            'input' => json_encode([$value, $value2]),
            'result' => $result,
        ]);

        return view('calculator', compact('result', 'type', 'value', 'value2'));
    }

    public function factorial($n)
    {
        if ($n < 0) return 'Błąd';
        return $n <= 1 ? 1 : $n * $this->factorial($n - 1);
    }

    public function fibonacci($n)
    {
        if ($n < 0) return 'Błąd';
        $a = 0; $b = 1;
        for ($i = 0; $i < $n; $i++) {
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        return $a;
    }

    public function history()
    {
        $history = Calculation::latest()->take(10)->get();
        return view('history', compact('history'));
    }
}
