@extends('layouts.admin')

{{-- extends: chi dinh layout duoc su dung --}}

@section('content')
    <h4 class="h4 bg-success">List Product table</h4>

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
                    <td><img width="100px" src="{{ $SanPham->image_san_pham }}" alt=""></td>
                    <td>{{ $SanPham->description_san_pham }}</td>
                    <td>{{ $SanPham->name_danh_muc }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">update</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
