@extends('layouts.app')

@section('content')
<div class="container">
    
    <h5 class="card-title fw-bold text-center fs-2">Editar Alimento</h5>

    <form action="{{ url('/alimento/'.$alimento->id) }}" method="post">
        @csrf 
        {{method_field('PATCH')}}
        @include('alimentos.form')

    </form>
</div>
@endsection