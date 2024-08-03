@extends('admin.index')
@section('content')
    <!-- Tables Without Borders -->

    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <div class="container mt-5">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success float-start mb-4">Create
            category</a>
        <table class="table table-borderless table-nowrap mt-5 ">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">ngay tao</th>
                    <th scope="col">Ngay cap nhat</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listDanhMuc as $index => $item)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td scope="row">
                            @if (strpos($item->hinh_anh, 'https') !== false)
                                <img src="{{ $item->hinh_anh }}" alt="">
                            @elseif ($item->hinh_anh == null)
                                <span class="badge bg-secondary">No image</span>
                            @endif

                        </td>
                        <td>{{ $item->ten_danh_muc }}</td>
                        <td>
                            @if ($item->trang_thai == 1)
                                <span class="badge bg-success-subtle text-success">hien thi</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger">an</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y h:i:s') }}</td>
                        <td>{{ $item->updated_at->format('d-m-Y h:i:s') }}</td>
                        <td>
                            <div class="hstack gap-3 fs-15">
                                <a href="{{ route('admin.categories.edit', $item->id) }}" class="link-primary"><i
                                        class="ri-settings-4-line"></i></a>
                                <a onclick="return confirm('Are you sure?')"
                                    href="{{ route('admin.categories.destroy', $item->id) }}" class="link-danger"><i
                                        class="ri-delete-bin-5-line"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
