@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Create New Diet</h1>
        <form action="{{ route('admin.diets.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <input
                type="text"
                name="name"
                field="name"
                placeholder="Name"
                class="form-control"
                autocomplete="off"
                :value="@old('name')"></input>
            </div>
            <div class="mb-3">
                <input
                type="text"
                name="description"
                field="description"
                placeholder="Description"
                class="form-control"
                autocomplete="off"
                :value="@old('description')"></input>
            </div>
            <button class="btn btn-success">Create Diet</button>
        </form>
    </div>

@endsection