@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Edit Existing Product</h1>
        <form class="mt-4" action="{{ route('admin.products.update', $product) }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                type="text"
                name="name"
                field="name"
                placeholder="Name"
                class="form-control"
                autocomplete="off"
                value="<?php if (isset($product["name"])) echo $product["name"]; ?>"></input>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input
                        type="text"
                        name="price"
                        field="price"
                        placeholder="Price"
                        class="form-control"
                        value="<?php if (isset($product["price"])) echo $product["price"]; ?>"></input>
                </div>
            </div>

            <div class="mb-3">
                <label for="manufacturer">Manufacturer</label><br>
                <select class="form-select mt-2" name="manufacturer_id">
                    @foreach ($manufacturers as $manufacturer)
                        @if($manufacturer->id == $product->manufacturer->id)
                        <option value="{{$manufacturer->id}}" selected>
                            {{$manufacturer->name}}
                        </option>
                        @else
                        <option value="{{$manufacturer->id}}">
                            {{$manufacturer->name}}
                        </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="diets">Diet</label><br>
                <div class="mt-2">
                    @foreach ($diets as $diet)
                        <input class="form-check-input" type="checkbox" value="{{$diet->id}}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{$diet->name}}
                        </label>
                        &nbsp
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="6" class="form-control"><?php if (isset($product["description"])) echo $product["description"]; ?></textarea>
            </div>
            <button class="btn btn-success">Updatess Product</button>
        </form>
    </div>

@endsection