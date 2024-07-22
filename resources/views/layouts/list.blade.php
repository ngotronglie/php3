@extends('product.index');


@section('title')
    List product
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name product</th>
                <th>image</th>
                <th>price</th>
                <th>mo ta</th>
                <th>status</th>
                <th>category name</th>
                <th>created_at</th>
                <th>updated_at</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($listProduct as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name_product }}</td>
                    <td><img src="{{ $item->image }}" alt=""></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->categories_id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
