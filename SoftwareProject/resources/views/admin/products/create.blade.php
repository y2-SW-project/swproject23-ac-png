@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Create New Product</h1>
        <form class="mt-4" action="{{ route('admin.products.store') }}" method="post">
            @csrf
            <input
                type="text"
                name="name"
                field="name"
                placeholder="Name"
                class="form-control mb-3"
                autocomplete="off"
                :value="@old('name')"></input>
            
            <div class="input-group mb-3">
                <input type="file" name="image" class="form-control" id="inputGroupFile01">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">€</span>
                <input
                    type="text"
                    name="price"
                    field="price"
                    placeholder="Price"
                    class="form-control"
                    :value="@old('price')"></input>
            </div>
                
            <div class="mb-3">
                <label for="manufacturer">Manufacturer: </label><br>
                <select class="form-select mt-2" name="manufacturer_id">
                    @foreach ($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}" {{(old('manufacturer_id') == $manufacturer->id) ? "selected" : ""}}>
                            {{$manufacturer->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="diets">Diet:</label><br>
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
            
            <textarea
                name="description"
                rows="5"
                field="description"
                placeholder="Description"
                class="form-control mb-3"
                :value="@old('description')"></textarea>

            <button class="btn btn-success">Save Animal</button>
        </form>
    </div>

@endsection