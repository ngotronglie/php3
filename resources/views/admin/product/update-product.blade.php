@extends('layouts.admin')

@section('content')
    <h4 class="h4 bg-success p-4 text-center">Update Product</h4>

    <br>
    @php
        // dd($sanphamGetId);

        // dd($sanphamGetId);

        echo $sanphamGetId->first()->id;
    @endphp

    <form action="{{ route('sanpham.update', $sanphamGetId->first()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset($sanphamGetId->first()->image_san_pham) }}" alt="Product Image" style="max-width: 200px;">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name product:</label>
            <input value="{{ $sanphamGetId->first()->name_san_pham }}" type="text" class="form-control" id="name"
                placeholder="Enter name product" name="name">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity product:</label>
            <input value="{{ $sanphamGetId->first()->quantity_san_pham }}" type="number" class="form-control"
                min="1" id="quantity" placeholder="Enter quantity product" name="quantity">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price product:</label>
            <input value="{{ $sanphamGetId->first()->price_san_pham }}" type="number" class="form-control" min="1"
                id="price" placeholder="Enter price product" name="price">
        </div>

        <div class="mb-3">
            <label for="createdAt" class="form-label">Created At product:</label>
            <input value="{{ $sanphamGetId->first()->created_at }}" type="date" class="form-control" id="createdAt"
                name="createdAt">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description product:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Enter description product">{{ $sanphamGetId->first()->description_san_pham }}</textarea>
        </div>

        <div class="mb-3">
            <label for="Categories" class="form-label">Categories product:</label>
            <select class="form-select" name="Categories">
                @foreach ($danhmucSelected as $danh_muc)
                    <option value="{{ $danh_muc->id }}"
                        {{ $danh_muc->id == $sanphamGetId->first()->danh_muc_id ? 'selected' : '' }}>
                        {{ $danh_muc->name_danh_muc }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
