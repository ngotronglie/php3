@extends('admin.index')

@section('content')
    <!-- Tables Without Borders -->

    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <div class=" mt-5">
        <a href="{{ route('admin.products.create') }}" class="btn btn-success float-start mb-4">Create product</a>
        <table class="table table-borderless table-nowrap mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DanhSachSanPham as $index => $item)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td scope="row">{{ $item->ma_san_pham }}</td>
                        <td scope="row">
                            @if (strpos($item->hinh_anh, 'https') !== false)
                                <img width="200px" src="{{ $item->hinh_anh }}" alt="product Image">
                            @elseif ($item->hinh_anh == null)
                                <span class="badge bg-secondary">No image</span>
                            @else
                                <img width="200px" src="{{ Storage::url($item->hinh_anh) }}" alt="product Image">
                            @endif
                        </td>
                        <td>{{ $item->ten_san_pham }}</td>
                        <td>{{ $item->danhMuc->ten_danh_muc }}</td>
                        <td>{{ $item->gia_san_pham }}</td>
                        <td>{{ $item->gia_khuyen_mai }}</td>
                        <td>{{ $item->so_luong }}</td>
                        <td>
                            @if ($item->is_type == 1)
                                <span class="badge bg-success-subtle text-success">Hiển thị</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger">Ẩn</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $item->updated_at->format('d-m-Y H:i:s') }}</td>
                        <td>
                            <div class="hstack gap-3 fs-15">
                                <a href="{{ route('admin.products.edit', $item->id) }}" class="link-primary"><i
                                        class="ri-settings-4-line"></i></a>

                                <!-- Form for deletion -->
                                <form action="{{ route('admin.products.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button style="border: none; background: none" type="submit" class="link-danger">
                                        <i class="ri-delete-bin-5-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
