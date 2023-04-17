@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Diets</h1>
        <a href="{{ route('admin.diets.create') }}" class="btn btn btn-success my-3">Add Diet</a>
        <div class="row">
            @forelse ($diets as $diet)
                <div class="card my-2">
                    <div class="card-body">
                        <h5>
                            <a href="{{ route('admin.diets.show', $diet->uuid) }}" class="fs-3 text-decoration-none">{{ $diet->name }}</a>
                        </h5>
                        <p class="card-text">{{ Str::limit($diet->description, 250) }}</p>
                    </div>
                </div>
            @empty
                <p>You have no diets</p>
            @endforelse
            <div class="mt-3 d-flex justify-content-end">
                {{ $diets->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection