@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Create New Manufacturer</h1>
        <form action="{{ route('admin.manufacturers.store') }}" method="post">
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
                name="address"
                field="address"
                placeholder="Address"
                class="form-control"
                autocomplete="off"
                :value="@old('address')"></input>
            </div>
            <div class="mb-3">
                <input
                type="text"
                name="email"
                field="email"
                placeholder="Email"
                class="form-control"
                autocomplete="off"
                :value="@old('email')"></input>
            </div>
            <div class="mb-3">
                <input
                type="text"
                name="phone_number"
                field="phone_number"
                placeholder="Phone Number"
                class="form-control"
                autocomplete="off"
                :value="@old('phone_number')"></input>
            </div>
            <button class="btn btn-success">Create Manufacturer</button>
        </form>
    </div>

@endsection