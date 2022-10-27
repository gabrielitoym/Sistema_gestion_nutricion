@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex items-center text-center">
        <div class="display-4 fw-bold"">Alimentos</div>
        <a class="btn btn-success" href="{{url('/alimento/create') }}" >Agregar Alimento</a> 
        <div class="table-responsive">
            <table class="table table-striped table-light table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">Energía</th>
                    <th scope="col">Proteína Total</th>
                    <th scope="col">H. Carbono</th>
                    <th scope="col">Grasa</th>
                    <th scope="col">Fibra</th>
                    <th scope="col">Agua</th>
                    <th scope="col">Acciones</tr>
                </thead>
                <tbody>
                    @foreach($alimentos as $alimentos)
                    <tr>
                    <td >{{$alimentos->Name}}</td>
                    <td >{{$alimentos->cantidad}} {{$alimentos->unidadMedida}}</td>
                    <td >{{$alimentos->Energia}}</td>
                    <td >{{$alimentos->ProteinaTotal}}</td>
                    <td >{{$alimentos->CarbohidratosTotales}}</td>
                    <td >{{$alimentos->GrasaTotal}}</td>
                    <td >{{$alimentos->FibraDietaria}}</td>
                    <td >{{$alimentos->Agua}}</td>
                    <td >
                        <a class="btn btn-primary" href="{{url('/alimento/'.$alimentos->id.'/edit') }}" >Editar</a>
                        <form action="{{url('/alimento/'.$alimentos->id) }}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                            <Input type="submit" class="btn btn-danger" Value="Eliminar" onclick="return confirm('¿Seguro que deseas ELIMINAR?')"></Input>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection