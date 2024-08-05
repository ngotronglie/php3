@extends('admin.index')

@section('content')
    <div class="title mt-5 text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
    <form class="container mt-5" action="{{ route('admin.users.update', $User->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="role" class="form-label">Trạng thái</label>
            <select class="form-select" id="role" name="role">
                <option value="" disabled selected>Chọn trạng thái</option>
                <option value="1" {{ old('role', $User->role) == '1' ? 'selected' : '' }}>admin</option>
                <option value="2" {{ old('role', $User->role) == '2' ? 'selected' : '' }}>user</option>
                <option value="3" {{ old('role', $User->role) == '3' ? 'selected' : '' }}>employee</option>
            </select>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
