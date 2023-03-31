@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Create New Manufacturer</h1>
        <form class="mt-4" action="{{ route('admin.manufacturers.store') }}" method="post">
            @csrf
            <input
                type="text"
                name="name"
                field="name"
                placeholder="Name"
                class="form-control mb-3"
                autocomplete="off"
                :value="@old('name')"></input>
            <textarea
                name="address"
                rows="3"
                field="address"
                placeholder="Address"
                class="form-control mb-3"
                :value="@old('address')"></textarea>
            <input
                type="email"
                name="email"
                field="email"
                placeholder="Email"
                class="form-control mb-3"
                autocomplete="off"
                :value="@old('email')"></input>
            <input
                type="text"
                name="phone_number"
                field="phone_number"
                placeholder="Phone Number"
                class="form-control mb-3"
                autocomplete="off"
                :value="@old('phone_number')"></input>
            <button class="btn btn-success">Create Manufacturer</button>
        </form>
    </div>

@endsection