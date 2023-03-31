@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
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