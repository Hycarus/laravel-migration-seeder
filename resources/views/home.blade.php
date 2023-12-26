@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="py-5">
        <h1 class="text-center">Departures</h1>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Departure Date</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Arrival Date</th>
                        <th scope="col">Arrival Time</th>
                        <th scope="col">Train Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainList as $item)
                        <tr>
                            <th scope="row">{{ $item->compagnia }}</th>
                            <td>{{ $item->stazione_partenza }}</td>
                            <td>{{ $item->stazione_arrivo }}</td>
                            <td>{{ $item->data_partenza }}</td>
                            <td>{{ $item->ora_partenza }}</td>
                            <td>{{ $item->data_arrivo }}</td>
                            <td>{{ $item->ora_arrivo }}</td>
                            <td>{{ $item->codice_treno }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
