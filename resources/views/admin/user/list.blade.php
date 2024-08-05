@extends('admin.index')

@section('content')
    <!-- Tables Without Borders -->

    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <div class="container mt-5">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success float-start mb-4">Create User</a>
        <table class="table table-borderless table-nowrap mt-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">chuc vu</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User as $index => $item)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if ($item->role == 1)
                                Admin
                            @elseif ($item->role == 2)
                                User
                            @elseif ($item->role == 3)
                                Employee
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $item->updated_at->format('d-m-Y H:i:s') }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <!-- Form for deletion -->
                            <form action="{{ route('admin.users.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger">
                                    xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
