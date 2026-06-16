@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card card-estreno p-4">
                <h5 class="mb-0">Bienvenido, <strong>{{ Auth::user()->name }}</strong>.</h5>
            </div>
        </div>
    </div>
</div>
@endsection