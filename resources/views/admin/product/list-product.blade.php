@extends('layouts.admin')

{{-- extends: chi dinh layout duoc su dung --}}

@section('content')
    <h4 class="h4 bg-success p-4 text-center">List Product table</h4>

    <br>

    <a href="{{ route('sanpham.create') }}" class="btn btn-primary">add product</a>
    {{-- sanpham trong  sanpham.create o phan view cho resources --}}

    <table class="table mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>name product</th>
                <th>price product</th>
                <th>quantity product</th>
                <th>image product</th>
                <th>descriptsion product</th>
                <th>Categories</th>
                <th>Created at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listSanPham as $index => $SanPham)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $SanPham->name_san_pham }}</td>
                    <td>{{ $SanPham->price_san_pham }}</td>
                    <td>{{ $SanPham->quantity_san_pham }}</td>
                    <td>
                        @if (strpos($SanPham->image_san_pham, 'http') === false)
                            <img width="100px" src="{{ asset('storage/' . $SanPham->image_san_pham) }}" alt="">
                        @else
                            <img width="100px" src="{{ $SanPham->image_san_pham }}" alt="">
                        @endif

                    </td>
                    <td>{{ $SanPham->description_san_pham }}</td>
                    <td>{{ $SanPham->name_danh_muc }}</td>
                    <td>
                        @if ($SanPham->created_at == null)
                            {{ 'null' }}
                        @else
                            {{ $SanPham->created_at }}
                        @endif

                    </td>
                    <td>
                        <a href="{{ route('sanpham.edit', $SanPham->id) }}" class="btn btn-warning">update</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
