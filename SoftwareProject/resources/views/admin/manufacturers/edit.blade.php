@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Edit Existing Manufacturer</h1>
        <form class="mt-4" action="{{ route('admin.manufacturers.update', $manufacturer) }}" method="post">
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
                value="<?php if (isset($manufacturer["name"])) echo $manufacturer["name"]; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input
                type="text"
                name="address"
                field="address"
                placeholder="Address"
                class="form-control"
                autocomplete="off"
                value="<?php if (isset($manufacturer["address"])) echo $manufacturer["address"]; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                type="email"
                name="email"
                field="email"
                placeholder="Email"
                class="form-control"
                autocomplete="off"
                value="<?php if (isset($manufacturer["email"])) echo $manufacturer["email"]; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input
                type="text"
                name="phone_number"
                field="phone_number"
                placeholder="Phone Number"
                class="form-control"
                autocomplete="off"
                value="<?php if (isset($manufacturer["phone_number"])) echo $manufacturer["phone_number"]; ?>"></input>
            </div>
            <button class="btn btn-success">Update Manufacturer</button>
        </form>
    </div>

@endsection