@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="row">
            @forelse ($products as $product)
            <div class="col-3">
                <div class="card my-2">
                    <div class="card-body">
                        <h5>
                            <a href="{{ route('user.products.show', $product->uuid) }}" class="fs-3 text-decoration-none">{{ $product->name }}</a>
                        </h5>
                        <a href="#" class="card-link text-decoration-none">{{ $product->manufacturer->name }}</a>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    </div>
                </div>
            </div>
            @empty
                <p>You have no products</p>
            @endforelse
        </div>
    </div>

@endsection