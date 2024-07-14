@extends('layouts.admin')

{{-- extends: chi dinh layout duoc su dung --}}

@section('content')
    <h4 class="h4 bg-success p-4 text-center">Add Product</h4>

    <br>

    <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        {{-- mot co che bao mat cua laravel --}}


        <div class="mb-3 mt-3">
            <label for="image" class="form-label">image:</label>
            <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">name product:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name product" name="name">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">quantity product:</label>
            <input type="number" class="form-control" min="1" id="quantity" placeholder="Enter quantity product"
                name="quantity">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price product:</label>
            <input type="number" class="form-control" min="1" id="price" placeholder="Enter price product"
                name="price">
        </div>

        <div class="mb-3">
            <label for="createdAt" class="form-label">createdAt product:</label>
            <input type="date" class="form-control" min="1" id="createdAt" placeholder="Enter createdAt product"
                name="createdAt">
        </div>

        <div class="mb-3 ">
            <label for="description" class="form-label">description product:</label>
            <input type="text" class="form-control" min="1" id="description"
                placeholder="Enter description product" name="description">
        </div>

        <div class="mb-3 ">
            <label for="Categories" class="form-label">Categories product:</label>
            <select class="form-select" name="Categories">
                @foreach ($danh_mucs as $danh_muc)
                    <option value="{{ $danh_muc->id }}">{{ $danh_muc->name_danh_muc }}</option>
                @endforeach


            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
@endsection
