@extends('layout.main')



@section('content')


<div class="container">

    <div class=" bg-secondary-subtle mb-2">

        <h2 class="text-center text-primary mt-5 mb-0   ">TRENI DISPONIBILI</h2>

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
            <th scope="col">Dettagli</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train )
            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->azienda}}</td>
                <td>{{$train->stazione_partenza}}</td>
                <td>{{$train->stazione_arrivo}}</td>
                <td>{{$train->orario_partenza}}</td>
                <td>{{$train->orario_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td><a href="{{route('trainDetails',['id' => $train['id']])}}" class="btn btn-primary ">Dettagli</a></td>
              </tr>

            @endforeach


        </tbody>
    </table>

    {{$trains->links()}}
</div>



@endsection
