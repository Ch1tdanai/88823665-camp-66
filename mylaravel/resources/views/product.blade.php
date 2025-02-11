@extends('layouts.default_with_menu')

@section('content')
<div class="container-left" style="background-color: #f0f0f0;width : 600px;height : 100px; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.20);border-radius: 15px;">
    <h2 class="container">Create Product</h2>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/product') }}" method="get">
        @csrf
        <div class="mb-3 d-flex container align-items-center" style="gap: 20px;">
            <label for="product_name" class="form-label" style="font-size: 18px;">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" style="width: 300px;" required>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </div>

    </form>
</div>
@endsection