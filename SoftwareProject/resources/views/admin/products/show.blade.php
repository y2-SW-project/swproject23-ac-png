@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <div class="d-flex">
            <a href="{{ route('admin.products.edit', $product) }}" class="me-3 btn btn-primary my-3">Edit Product</a>
            <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn btn-danger my-3" onclick="return confirm('Are you sure you wish to move this to trash?')">Move to Trash</button>
            </form>
        </div>
        <div class="p-5 border rounded">
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('storage/images/' . $product->image) }}" width="350" height="250"/>
                </div>
                <div class="col-8">
                    <h1>{{ $product->name }}</h1>
                    <div class="my-3">
                        @foreach ($product->diets as $diet)
                            <a href="{{ route('admin.diets.show', $diet->uuid) }}" class="btn btn-outline-info">{{$diet->name}}</a>
                        @endforeach
                    </div>
                    <p><a class="text-decoration-none" href="{{ route('user.manufacturers.show', $product->manufacturer->uuid) }}">{{ $product->manufacturer->name }}</a></p>
                    <p>€{{ $product->price }}</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Pickup
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Delivery
                        </label>
                    </div>
                </div>
            </div>
            <h2>Description</h2>
            <p>{{ $product->description }}</p>
        </div>
    </div>

@endsection