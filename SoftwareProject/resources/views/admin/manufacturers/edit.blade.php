@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Edit Existing Manufacturer</h1>
        <form action="{{ route('admin.manufacturers.update', $manufacturer) }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <input
                type="text"
                name="name"
                field="name"
                placeholder="Name"
                class="form-control"
                autocomplete="off"
                :value="@old('name', $manufacturer->name)"></input>
            </div>
            <div class="mb-3">
                <input
                type="text"
                name="address"
                field="address"
                placeholder="Address"
                class="form-control"
                autocomplete="off"
                :value="@old('address', $manufacturer->address)"></input>
            </div>
            <div class="mb-3">
                <input
                type="email"
                name="email"
                field="email"
                placeholder="Email"
                class="form-control"
                autocomplete="off"
                :value="@old('email', $manufacturer->email)"></input>
            </div>
            <div class="mb-3">
                <input
                type="text"
                name="phone_number"
                field="phone_number"
                placeholder="Phone Number"
                class="form-control"
                autocomplete="off"
                :value="@old('phone_number', $manufacturer->phone_number)"></input>
            </div>
            <button class="btn btn-success">Save Manufacturer</button>
        </form>
    </div>

@endsection