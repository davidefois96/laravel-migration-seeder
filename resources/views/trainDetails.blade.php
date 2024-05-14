@extends('layout.main')

@section('content')

<div class="container">

    <div class=" bg-secondary-subtle mb-2">

        <h1 class="text-center text-primary mt-5 mb-0   ">DETTAGLI TRENO</h1>

    </div>

    <table class="table table-primary ">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione_partenza</th>
            <th scope="col">Stazione_arrivo</th>
            <th scope="col">Orario_partenza</th>
            <th scope="col">Orario_arrivo</th>
            <th scope="col">Codice_treno</th>
            <th scope="col">Numero_carrozze</th>




          </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->azienda}}</td>
                <td>{{$train->stazione_partenza}}</td>
                <td>{{$train->stazione_arrivo}}</td>
                <td>{{$train->orario_partenza}}</td>
                <td>{{$train->orario_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>

            </tr>



        </tbody>
    </table>






</div>



@endsection
