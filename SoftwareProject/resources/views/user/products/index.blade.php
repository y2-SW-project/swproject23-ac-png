@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Products</h1>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-3">
                <div class="card my-2">
                    <div class="card-body">
                        <img class="card-img-top mb-2" src="{{asset('storage/images/' . $product->image) }}"/>
                        <h5>
                            <a href="{{ route('user.products.show', $product->uuid) }}" class="fs-3 text-decoration-none">{{ $product->name }}</a>
                        </h5>
                        <h5><span class="badge text-bg-warning">€{{ $product->price }}</span></h5>
                    </div>
                </div>
            </div>
            @empty
                <p>You have no products</p>
            @endforelse
            <div class="mt-3 d-flex justify-content-end">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection