@extends('layouts.default_with_menu')

@section('content')
    <div class="container-left"
        style="background-color: #f0f0f0;width : 600px;height : 300px; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.20);border-radius: 15px;">
        
        <h2 class="container">Create Category and Product</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form to Create Category -->
        <form action="{{ url('/category') }}" method="POST">
            @csrf
            <div class="mb-3 d-flex container align-items-center" style="gap: 20px;">
                <label for="category_name" class="form-label" style="font-size: 18px;">Category Name</label>
                <input type="text" name="name" id="category_name" class="form-control" style="width: 300px;" required>
            </div>
            <button type="submit" class="btn btn-secondary">Create Category</button>
        </form>

        <!-- Form to Create Product -->
        <form action="{{ url('/product') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="mb-3 d-flex container align-items-center" style="gap: 20px;">
                <label for="category_id" class="form-label" style="font-size: 18px;">Category</label>
                <select name="category_id" id="category_id" class="form-control" style="width: 300px;" required>
                    <option value="" disabled selected>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 d-flex container align-items-center" style="gap: 20px;">
                <label for="name" class="form-label" style="font-size: 18px;">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 300px;" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>

    </div>
@endsection
