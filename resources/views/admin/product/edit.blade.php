@extends('admin.index')

@section('content')
    <div class="title mt-5 text-center p-4 bg-primary text-light font-weight-bold h4">{{ $title }}</div>
    <form class="container mt-5" action="{{ route('admin.products.update', $SanPhamEdit->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <!-- Mã sản phẩm -->
                <div class="mb-3">
                    <label for="ma_san_pham" class="form-label">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham"
                        value="{{ $SanPhamEdit->ma_san_pham }}" placeholder="Nhập mã sản phẩm">
                    @error('ma_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tên sản phẩm -->
                <div class="mb-3">
                    <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham"
                        value="{{ $SanPhamEdit->ten_san_pham }}" placeholder="Nhập tên sản phẩm">
                    @error('ten_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Giá sản phẩm -->
                <div class="mb-3">
                    <label for="gia_san_pham" class="form-label">Giá sản phẩm</label>
                    <input type="number" class="form-control" id="gia_san_pham" name="gia_san_pham"
                        value="{{ $SanPhamEdit->gia_san_pham }}" placeholder="Nhập giá sản phẩm">
                    @error('gia_san_pham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Giá khuyến mãi -->
                <div class="mb-3">
                    <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                    <input type="number" class="form-control" id="gia_khuyen_mai" name="gia_khuyen_mai"
                        value="{{ $SanPhamEdit->gia_khuyen_mai }}" placeholder="Nhập giá khuyến mãi">
                    @error('gia_khuyen_mai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Danh mục -->
                <div class="mb-3">
                    <label for="danh_muc_id" class="form-label">Danh mục</label>
                    <select class="form-select" id="danh_muc_id" name="danh_muc_id">
                        @foreach ($list_danh_muc as $item)
                            <option value="{{ $item->id }}"
                                {{ $SanPhamEdit->danh_muc_id == $item->id ? 'selected' : '' }}>
                                {{ $item->ten_danh_muc }}
                            </option>
                        @endforeach
                    </select>
                    @error('danh_muc_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Số lượng -->
                <div class="mb-3">
                    <label for="so_luong" class="form-label">Số lượng</label>
                    <input type="number" class="form-control" id="so_luong" name="so_luong"
                        value="{{ $SanPhamEdit->so_luong }}" placeholder="Nhập số lượng">
                    @error('so_luong')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Ngày nhập -->
                <div class="mb-3">
                    <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                    <input type="date" class="form-control" id="ngay_nhap" name="ngay_nhap"
                        value="{{ $SanPhamEdit->ngay_nhap }}">
                    @error('ngay_nhap')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tùy chỉnh khác -->
                <div class="mb-3">
                    <label class="form-label">Tùy chỉnh khác</label>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_type" name="is_type"
                            {{ $SanPhamEdit->is_type ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_type">Trạng thái</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_new" name="is_new"
                            {{ $SanPhamEdit->is_new ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_new">Hàng mới</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_hot" name="is_hot"
                            {{ $SanPhamEdit->is_hot ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_hot">Hàng hot</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_hot_deal" name="is_hot_deal"
                            {{ $SanPhamEdit->is_hot_deal ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_hot_deal">Hàng hot deal</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" id="is_show_home" name="is_show_home"
                            {{ $SanPhamEdit->is_show_home ? 'checked' : '' }}>
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
                    <img id="preview-image" class="mt-2" src="{{ Storage::url($SanPhamEdit->hinh_anh) }}"
                        style="width: 100px;" alt="Preview">
                    @error('hinh_anh')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Album hình ảnh -->
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Album image</label>
                    <i class="bx bx-folder-plus"
                        style="cursor: pointer; position: relative; font-size: 20px; top: 5px; left: 5px"
                        onclick="addRow()"></i>

                    <table class="table mb-0 align-middle table-nowrap">
                        <tbody id="tableBody">
                            @foreach ($SanPhamEdit->hinhAnhSanPham as $index => $item)
                                <tr>
                                    <td class="d-flex align-items-center">
                                        <img id="preview_{{ $index }}" class="mt-2"
                                            src="{{ Storage::url($item->hinh_anh) }}"
                                            style="width: 100px; margin-right: 30px" alt="Preview">
                                        <input type="file" class="form-control" id="hinh_anh_{{ $index }}"
                                            name="list_hinh_anh[id_{{ $index }}]"
                                            onchange="previewImage(this, {{ $index }})">
                                        <i class="ri-delete-bin-2-fill"
                                            style="margin-left: 10px; cursor: pointer; font-size: 20px"
                                            onclick="removeRow(this)"></i>

                                        <input type="hidden" name="list_hinh_anh[id_{{ $index }}]"
                                            value="{{ $item->id }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mô tả ngắn -->
                <div class="mb-3">
                    <label for="mo_ta_ngan" class="form-label">Mô tả ngắn</label>
                    <input type="text" class="form-control" id="mo_ta_ngan" name="mo_ta_ngan"
                        value="{{ $SanPhamEdit->mo_ta_ngan }}" placeholder="Nhập mô tả ngắn">
                    @error('mo_ta_ngan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nội dung -->
                <div class="mb-3">
                    <label for="noi_dung" class="form-label">Nội dung</label>
                    <div class="card">
                        <div class="card-body">
                            <div id="quill-editor" class="snow-editor" style="height: 400px;"></div>
                            <textarea name="noi_dung" id="noi_dung_content" class="d-none"></textarea>
                            @error('noi_dung')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
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
            // Initialize Quill Editor
            var quill = new Quill('#quill-editor', {
                theme: 'snow'
            });

            // Load existing content into Quill Editor
            quill.root.innerHTML = `{!! $SanPhamEdit->noi_dung !!}`;

            // Update hidden textarea with Quill Editor content
            quill.on('text-change', function() {
                document.getElementById('noi_dung_content').value = quill.root.innerHTML;
            });

            // Ensure hidden textarea is updated on form submission
            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('noi_dung_content').value = quill.root.innerHTML;
            });
        });

        // Display selected image
        function showImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-image').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        // Add a new row for album images
        function addRow() {
            const tableBody = document.getElementById('tableBody');
            const rowCount = tableBody.getElementsByTagName('tr').length;
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="d-flex align-items-center">
                    <img id="preview_${rowCount}" class="mt-2" src="https://via.placeholder.com/100" style="width: 100px; margin-right: 30px" alt="Preview">
                    <input type="file" class="form-control" name="list_hinh_anh[id_${rowCount}]" onchange="previewImage(this, ${rowCount})">
                    <i class="ri-delete-bin-2-fill" style="margin-left: 10px; cursor: pointer; font-size: 20px" onclick="removeRow(this)"></i>
                </td>
            `;
            tableBody.appendChild(newRow);
        }

        // Preview image in the album
        function previewImage(input, rowIndex) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(`preview_${rowIndex}`).src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Remove a row from the album
        function removeRow(element) {
            element.closest('tr').remove();
        }
    </script>
@endsection
