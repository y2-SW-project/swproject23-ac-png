@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="p-5 border rounded">
            <div class="mb-4">
                <h1>{{ $diet->name }}</h1>
            </div>
            <h2>Description</h2>
            <p>{{ $diet->description }}</p>
        </div>
        </div>
    </div>

@endsection