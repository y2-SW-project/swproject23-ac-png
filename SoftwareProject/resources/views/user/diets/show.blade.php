@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="p-5 border rounded">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-8">
                    <h1>{{ $diet->name }}</h1>
                </div>
            </div>
            <h2>Description</h2>
            <p>{{ $diet->description }}</p>
        </div>
    </div>

@endsection