@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="d-flex">
            <a href="{{ route('admin.diets.edit', $diet) }}" class="me-3 btn btn-primary my-3">Edit Diet</a>
            <form action="{{ route('admin.diets.destroy', $diet) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn btn-danger my-3" onclick="return confirm('Are you sure you wish to move this to trash?')">Move to Trash</button>
            </form>
        </div>
        <div class="p-5 border rounded">
            <div class="mb-4">
                <h1>{{ $diet->name }}</h1>
            </div>
            <h2>Description</h2>
            <p>{{ $diet->description }}</p>
        </div>
    </div>

@endsection