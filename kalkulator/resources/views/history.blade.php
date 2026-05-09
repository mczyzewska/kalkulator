@extends('layouts.app')

@section('content')
<h2>Historia obliczeń</h2>
<table style="width:100%; margin-top:20px; color:#ddd; text-align:left;">
    <tr><th>Operacja</th><th>Dane</th><th>Wynik</th><th>Czas</th></tr>
    @foreach($history as $item)
        <tr>
            <td>{{ $item->operation }}</td>
            <td>{{ $item->input }}</td>
            <td>{{ $item->result }}</td>
            <td>{{ $item->created_at->format('H:i:s d-m-Y') }}</td>
        </tr>
    @endforeach
</table>
<p style="margin-top:20px;"><a href="{{ route('calculator') }}">⬅️ Wróć do kalkulatora</a></p>
@endsection
