@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <a href="#" class="btn btn-primary my-3">Edit Product</a>
        <a href="#" class="btn btn btn-danger my-3">Move to Trash</a>
        <div class="p-5 border rounded">
            <div class="mb-4">
                <h1>{{ $manufacturer->name }}</h1>
            </div>
            <p>{{ $manufacturer->address }}</p>
            <p>{{ $manufacturer->email }}</p>
            <p>{{ $manufacturer->phone_number }}</p>
        </div>
        </div>
    </div>

@endsection