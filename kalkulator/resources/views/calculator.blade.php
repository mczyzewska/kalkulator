@extends('layouts.app')

@section('content')
<h2>Zaawansowany Kalkulator IIS</h2>
<form action="{{ route('calculator.calculate') }}" method="POST">
    @csrf
    <select name="type">
        <option value="factorial">Silnia (n!)</option>
        <option value="fibonacci">Ciąg Fibonacciego</option>
        <option value="power">Potęga</option>
        <option value="root">Pierwiastek</option>
        <option value="sin">sin(x)</option>
        <option value="cos">cos(x)</option>
        <option value="tan">tan(x)</option>
        <option value="asin">arcsin(x)</option>
        <option value="acos">arccos(x)</option>
        <option value="atan">arctan(x)</option>
        <option value="log">log(x)</option>
        <option value="exp">e^x</option>
    </select>

    <input type="number" step="any" name="value" placeholder="Wartość 1" required>
    <input type="number" step="any" name="value2" placeholder="Wartość 2 (jeśli dotyczy)">
    <button type="submit">Oblicz</button>
</form>

@if(isset($result))
    <h3>Wynik: {{ $result }}</h3>
@endif

<p><a href="{{ route('calculator.history') }}">Zobacz historię obliczeń</a></p>
@endsection
