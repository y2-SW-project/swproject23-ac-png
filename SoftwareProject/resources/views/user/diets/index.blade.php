@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Diets</h1>
            @forelse ($diets as $diet)
                <div class="card my-2">
                    <div class="card-body">
                        <h5>
                            <a href="{{ route('user.diets.show', $diet->uuid) }}" class="fs-3 text-decoration-none">{{ $diet->name }}</a>
                        </h5>
                        <p class="card-text">{{ Str::limit($diet->description, 250) }}</p>
                    </div>
                </div>
            @empty
                <p>You have no products</p>
            @endforelse
    </div>

@endsection