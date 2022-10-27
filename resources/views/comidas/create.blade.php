@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/comida') }}" method="post" >
    @csrf
    @include('comidas.form');
    </form>
</div>
@endsection