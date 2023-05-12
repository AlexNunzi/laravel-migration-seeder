@extends ('layouts.app')

@section('title', 'BoolTrain')

@section('content')

<div class="container">

    <h1 class="text-center">Lista dei treni</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Numero carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @forelse($trips as $trip)
            <tr>
                <th scope="row"> {{ $trip->agency_name }} </th>
                <td> {{ $trip->departure_station }} </td>
                <td> {{ $trip->arrival_station }} </td>
                <td> {{ $trip->departure_time }} </td>
                <td> {{ $trip->arrival_time }} </td>
                <td> {{ $trip->train_code }} </td>
                <td> {{ $trip->number_of_carriages }} </td>
                <td> {{ $trip->punctual == true? 'In orario':'In Ritardo' }} </td>
                <td> {{ $trip->deleted == true? 'Viaggio cancellato':'Viaggio attivo' }} </td>
            </tr>
            @empty
            <tr>Nessun elemento da mostrare</tr>
            @endforelse
        </tbody>
        </table>

</div>

@endsection