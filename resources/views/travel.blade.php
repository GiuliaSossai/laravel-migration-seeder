@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Travel!</h1>
    </div>

    <main>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">destinazione</th>
                    <th scope="col">paese</th>
                    <th scope="col">soggiorno</th>
                    <th scope="col">indirizzo</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">prezzo</th>
                    <th scope="col">giorni totali di viaggio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travels as $travel)
                <tr>
                    <th scope="row">{{ $travel->id }}</th>
                    <td>{{ $travel->destination }}</td>
                    <td>{{ $travel->country }}</td>
                    <td>{{ $travel->facility_name }}</td>
                    <td>{{ $travel->address }}</td>
                    <td>{{ $travel->description }}</td>
                    <td>{{ $travel->price }} $</td>
                    <td>{{ $travel->days_of_trip }}</td>
                </tr>
                @endforeach
            </tbody>
</table>
        </div>
    </main>
    
    
@endsection