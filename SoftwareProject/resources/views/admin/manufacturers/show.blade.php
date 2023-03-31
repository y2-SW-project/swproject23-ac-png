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
            <p>{{ $manufacturer->email }}</p>
            <p>{{ $manufacturer->phone_number }}</p>
        </div>
        <h3 class="mt-3">Products from {{ $manufacturer->name }}</h3>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-3 card my-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('admin.products.show', $product->uuid) }}" class="fs-3 text-decoration-none">{{ $product->name }}</a>
                            </h5>
                            <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        </div>
            <p>You have no products</p>
        @endforelse
        <div class="mt-1">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection