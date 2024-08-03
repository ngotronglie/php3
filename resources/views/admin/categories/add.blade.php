@extends('admin.index')

@section('content')
    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <form class="container mt-5" action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="hinh_anh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="hinh_anh" name="hinh_anh">
            @error('hinh_anh')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ten_danh_muc" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="ten_danh_muc" name="ten_danh_muc"
                value="{{ old('ten_danh_muc') }}" placeholder="Nhập tên danh mục">
            @error('ten_danh_muc')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="trang_thai" class="form-label">Trạng thái</label>
            <select class="form-select" id="trang_thai" name="trang_thai">
                <option value="" disabled selected>Chọn trạng thái</option>
                <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>True</option>
                <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>False</option>
            </select>
            @error('trang_thai')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
