@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="card-title fw-bold text-center fs-2">Agregar nuevo Alimento</h5>

    <form action="{{ url('/alimento') }}" method="post" >
    @csrf

    @include('alimentos.form')
    
    </form>
</div>
@endsection