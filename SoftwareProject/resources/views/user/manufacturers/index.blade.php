@extends('layouts.app')

@section('content')

    <div class="container-fluid px-5">
        <h1 class="text-center">Manufacturers</h1>
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
            <div class="mt-3 d-flex justify-content-end">
                {{ $manufacturers->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection