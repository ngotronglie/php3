@extends('index')

@section('title')
    them nhac si
@endsection
@if (session('message'))
    <div class="bg-success">{{ session('message') }}</div>
@endif


@section('content')
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="container mt-5">
        @csrf
        <div class="mb-3">
            <label for="game_title" class="form-label">game_title</label>
            <input type="text" class="form-control" name="game_title" id="game_title" aria-describedby="helpId"
                placeholder="game_title" />
            @error('game_title')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
            <label for="cover_art" class="form-label">cover_art</label>
            <input type="file" class="form-control" name="cover_art" id="cover_art" aria-describedby="helpId"
                placeholder="cover_art" />

        </div>
        <div class="mb-3">
            <label for="developer" class="form-label">developer</label>
            <input type="text" class="form-control" name="developer" id="developer" aria-describedby="helpId"
                placeholder="developer" />
            @error('developer')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">release_year</label>
            <input type="number" class="form-control" name="release_year" id="release_year" aria-describedby="helpId"
                placeholder="release_year" />
            @error('release_year')
                {{ $message }}
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">them game</button>

    </form>
@endsection
