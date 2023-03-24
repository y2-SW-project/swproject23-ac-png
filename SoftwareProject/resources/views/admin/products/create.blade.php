@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h2>Create New Product</h2>
        <form>
            <div class="mt-4 mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Diet</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Diet
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Manufacturer</label>
                <select class="mb-3 form-select" aria-label="Default select example">
                    <option selected>Manufacturer</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection