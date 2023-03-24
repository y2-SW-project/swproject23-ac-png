@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <a href="#" class="btn btn-primary my-3">Edit Product</a>
        <a href="#" class="btn btn btn-danger my-3">Move to Trash</a>
        <div class="p-5 border rounded">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-8">
                    <h1>{{ $product->name }}</h1>
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