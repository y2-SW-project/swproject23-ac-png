@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Products</h1>
        <a href="{{ route('admin.products.create') }}" class="btn btn btn-success my-3">Add Product</a>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-3">
                <div class="card my-2">
                    <div class="card-body">
                        <h5>
                            <a href="{{ route('admin.products.show', $product->uuid) }}" class="fs-3 text-decoration-none">{{ $product->name }}</a>
                        </h5>
                        <a href="{{ route('admin.manufacturers.show', $product->manufacturer->uuid) }}" class="card-link text-decoration-none">{{ $product->manufacturer->name }}</a>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    </div>
                </div>
            </div>
            @empty
                <p>You have no products</p>
            @endforelse
            <div class="mt-3">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection