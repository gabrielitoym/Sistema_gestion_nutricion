@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex items-center ">
        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Comidas</div>
        <a class="btn btn-primary" href="{{url('/comida/create') }}" >Agregar Comida</a>
    </div>
    <table class="table table-striped table-light">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comidas as $comidas)
        <tr>
        <td>{{$comidas->Name}}</td>

        <td>
            <div class="">
                <a class="btn btn-secondary" href="{{url('/comida/'.$comidas->id.'/edit') }}" >Edit</a>
                <form action="{{url('/comida/'.$comidas->id) }}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" value="DEl" onclick="return confirm('borraras? ')">
                </form>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection