@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="d-flex">
            <a href="{{ route('admin.manufacturers.edit', $manufacturer) }}" class="me-3 btn btn-primary my-3">Edit Manufacturer</a>
            <form action="{{ route('admin.manufacturers.destroy', $manufacturer) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn btn-danger my-3" onclick="return confirm('Are you sure you wish to move this to trash?')">Move to Trash</button>
            </form>
        </div>
        <div class="p-5 border rounded">
            <div class="mb-4">
                <h1>{{ $manufacturer->name }}</h1>
            </div>
            <p>{{ $manufacturer->address }}</p>
            <p><a class="text-decoration-none" href="mailto:{{ $manufacturer->email }}">{{ $manufacturer->email }}</a></p>
            <p>{{ $manufacturer->phone_number }}</p>
        </div>
    </div>

@endsection