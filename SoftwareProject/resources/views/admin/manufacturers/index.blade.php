@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Manufacturers</h1>
        <a href="#" class="btn btn btn-success my-3">Add Manufacturer</a>
        <div class="row">
            @forelse ($manufacturers as $manufacturer)
                <div class="card my-2">
                    <div class="card-body">
                        <h5>
                            <a href="{{ route('user.manufacturers.show', $manufacturer->uuid) }}" class="fs-3 text-decoration-none">{{ $manufacturer->name }}</a>
                        </h5>
                    </div>
                </div>
            @empty
                <p>You have no manufacturers</p>
            @endforelse
        </div>
    </div>

@endsection