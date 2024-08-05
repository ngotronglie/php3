@extends('staff.index')

@section('main')
    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <form class="container mt-5" action="{{ route('staff.banners.update', $Banner->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image" onchange="showImage(event)">
            @if ($Banner->image)
                <img id="preview-image" class="mt-2" src="{{ Storage::url($Banner->image) }}" style="width: 100px;"
                    alt="">
            @else
                <img id="preview-image" class="mt-2" src="" style="width: 100px; display: none" alt="">
            @endif
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name"
                value="{{ old('name', $Banner->name) }}" placeholder="Nhập tên danh mục">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="trang_thai" class="form-label">Trạng thái</label>
            <select class="form-select" id="trang_thai" name="trang_thai">
                <option value="" disabled selected>Chọn trạng thái</option>
                <option value="1" {{ old('trang_thai', $Banner->trang_thai) == '1' ? 'selected' : '' }}>True</option>
                <option value="0" {{ old('trang_thai', $Banner->trang_thai) == '0' ? 'selected' : '' }}>False</option>
            </select>
            @error('trang_thai')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('js')
    <script>
        function showImage(event) {
            const fileInput = event.target;
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.querySelector('#preview-image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
