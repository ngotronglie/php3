@extends('admin.index')

@section('content')
    <div class="title mt-5 text-center p-4 bg-primary text-light font-weight-bold h4">{{ $title }}</div>
    <form class="container mt-5" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <!-- Mã sản phẩm -->
                <div class="mb-3">
                    <label for="ma_san_pham" class="form-label">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham"
                        value="{{ old('ma_san_pham') }}" placeholder="Nhập mã sản phẩm">
                    @error('ma_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tên sản phẩm -->
                <div class="mb-3">
                    <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham"
                        value="{{ old('ten_san_pham') }}" placeholder="Nhập tên sản phẩm">
                    @error('ten_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Giá sản phẩm -->
                <div class="mb-3">
                    <label for="gia_san_pham" class="form-label">Giá sản phẩm</label>
                    <input type="number" class="form-control" id="gia_san_pham" name="gia_san_pham"
                        value="{{ old('gia_san_pham') }}" placeholder="Nhập giá sản phẩm">
                    @error('gia_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Giá khuyến mãi -->
                <div class="mb-3">
                    <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                    <input type="number" class="form-control" id="gia_khuyen_mai" name="gia_khuyen_mai"
                        value="{{ old('gia_khuyen_mai') }}" placeholder="Nhập giá khuyến mãi">
                    @error('gia_khuyen_mai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Danh mục -->
                <div class="mb-3">
                    <label for="danh_muc_id" class="form-label">Danh mục</label>
                    <select class="form-select" id="danh_muc_id" name="danh_muc_id">
                        @foreach ($list_danh_muc as $item)
                            <option value="{{ $item->id }}">{{ $item->ten_danh_muc }}</option>
                        @endforeach
                    </select>
                    @error('danh_muc_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Số lượng -->
                <div class="mb-3">
                    <label for="so_luong" class="form-label">Số lượng</label>
                    <input type="number" class="form-control" id="so_luong" name="so_luong" value="{{ old('so_luong') }}"
                        placeholder="Nhập số lượng">
                    @error('so_luong')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Ngày nhập -->
                <div class="mb-3">
                    <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                    <input type="date" class="form-control" id="ngay_nhap" name="ngay_nhap"
                        value="{{ old('ngay_nhap') }}">
                    @error('ngay_nhap')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tùy chỉnh khác -->
                <div class="mb-3">
                    <label class="form-label">Tùy chỉnh khác</label>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_type" name="is_type"
                            {{ old('is_type', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_type">Trạng thái</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_new" name="is_new"
                            {{ old('is_new', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_new">Hàng mới</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_hot" name="is_hot"
                            {{ old('is_hot', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_hot">Hàng hot</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_hot_deal" name="is_hot_deal"
                            {{ old('is_hot_deal', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_hot_deal">Hàng hot deal</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_show_home" name="is_show_home"
                            {{ old('is_show_home', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_show_home">Hiển thị trang chủ</label>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <!-- Hình ảnh -->
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="hinh_anh" name="hinh_anh"
                        onchange="showImage(event)">
                    <img id="preview-image" class="mt-2" src="" style="width: 100px; display: none;"
                        alt="Preview">
                    @error('hinh_anh')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                {{-- lít hình ảnh --}}
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Album image</label>
                    <i class="bx bx-folder-plus"
                        style="cursor: pointer; position: relative; font-size: 20px; top: 5px; left: 5px"
                        onclick="addRow()"></i>
                    <table class="table mb-0 align-middle table-nowrap">
                        <tbody id="tableBody">
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img id="preview_0" class="mt-2"
                                        src="https://tse1.mm.bing.net/th?id=OIP.UYefmuqvYGCqQqZN9xaW8QHaGp&pid=Api&P=0&h=180"
                                        style="width: 100px; margin-right: 30px" alt="Preview">
                                    <input type="file" class="form-control" id="hinh_anh" name="list_hinh_anh[id_0]"
                                        onchange="previewImage(this, 0)">
                                    <i class="ri-delete-bin-2-fill"
                                        style="margin-left: 10px; cursor: pointer; font-size: 20px"
                                        onclick="removeRow(this)"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mô tả ngắn -->
                <div class="mb-3">
                    <label for="mo_ta_ngan" class="form-label">Mô tả ngắn</label>
                    <input type="text" class="form-control" id="mo_ta_ngan" name="mo_ta_ngan"
                        value="{{ old('mo_ta_ngan') }}" placeholder="Nhập mô tả ngắn">
                    @error('mo_ta_ngan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nội dung -->
                <div class="mb-3">
                    <label for="noi_dung" class="form-label">Nội dung</label>
                    <div class="card">
                        <div class="card-body">
                            <div id="quill-editor" class="snow-editor" style="height: 400px;">
                                <h3><span class="ql-size-large">Hello World!</span></h3>
                                <p><br></p>
                                <h3>This is a simple editable area.</h3>
                                <p><br></p>
                                <ul>
                                    <li>Select a text to reveal the toolbar.</li>
                                    <li>Edit rich document on-the-fly, so elastic!</li>
                                </ul>
                                <p><br></p>
                                <p>End of simple area</p>
                            </div>
                        </div>
                    </div>
                    <textarea name="noi_dung" id="noi_dung_content" class="d-none"></textarea>
                    @error('noi_dung')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('js')
    <script src="{{ asset('theme/admin/assets/libs/quill/quill.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quill = new Quill('#quill-editor', {
                theme: 'snow'
            });

            // Cập nhật nội dung Quill Editor với dữ liệu cũ
            quill.root.innerHTML = `{{ old('noi_dung') }}`;

            // Cập nhật giá trị của textarea ẩn khi nội dung Quill Editor thay đổi
            quill.on('text-change', function() {
                document.getElementById('noi_dung_content').value = quill.root.innerHTML;
            });

            // Đảm bảo giá trị của textarea được cập nhật khi form được gửi
            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('noi_dung_content').value = quill.root.innerHTML;
            });
        });

        // Hiển thị hình ảnh được chọn
        function showImage(event) {
            const fileInput = event.target;
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('preview-image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
        //  ham list image
        document.addEventListener('DOMContentLoaded', function() {
            let rowCount = 1;

            window.addRow = function() {
                const tableBody = document.getElementById('tableBody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td class="d-flex align-items-center">
                        <img id="preview_${rowCount}" class="mt-2" src="https://tse1.mm.bing.net/th?id=OIP.UYefmuqvYGCqQqZN9xaW8QHaGp&pid=Api&P=0&h=180" style="width: 100px; margin-right: 30px" alt="Preview">
                        <input type="file" class="form-control" id="hinh_anh" name="list_hinh_anh[id_${rowCount}]" onchange="previewImage(this, ${rowCount})">
                        <i class="ri-delete-bin-2-fill" style="margin-left: 10px; cursor: pointer; font-size: 20px" onclick="removeRow(this)"></i>
                    </td>
                `;
                tableBody.appendChild(newRow);
                rowCount++;
            };

            window.previewImage = function(input, rowIndex) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(`preview_${rowIndex}`).setAttribute('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            window.removeRow = function(element) {
                element.closest('tr').remove();
            };
        });
    </script>
@endsection
