@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Edit Diet</h1>
        <form class="mt-4" action="{{ route('admin.diets.update', $diet) }}" method="post">
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
                value="<?php if (isset($diet["name"])) echo $diet["name"]; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control"><?php if (isset($diet["description"])) echo $diet["description"]; ?></textarea>
            </div>
            <button class="btn btn-success">Update Diet</button>
        </form>
    </div>

@endsection