@extends('admin.index')

@section('content')
    <div class="container mt-5">
        <div class="title text-center p-4 bg-primary text-light text-bold h4">{{ $title }}</div>
        <div class="mt-4">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                        <option value="">Select Role</option>
                        <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>Admin</option>
                        <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>User</option>
                        <option value="3" {{ old('role') == 3 ? 'selected' : '' }}>Employee</option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
            </form>
        </div>
    </div>
@endsection
