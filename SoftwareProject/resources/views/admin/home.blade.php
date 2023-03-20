@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in as an Ordinary admin!
                    <a href="{{ route('admin.products.index')}}"> View All Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection