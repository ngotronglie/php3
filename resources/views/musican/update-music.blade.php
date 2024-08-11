@extends('index')

@section('title')
    sua nhac si
@endsection
@if (session('message'))
    <div class="bg-success">{{ session('message') }}</div>
@endif

@section('content')
    <form action="{{ route('update-game', $game->id) }}" method="POST" enctype="multipart/form-data" class="container mt-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="game_title" class="form-label">game_title</label>
            <input type="text" class="form-control" name="game_title" id="game_title" aria-describedby="helpId"
                value="{{ $game->game_title }}" placeholder="game_title" />
            @error('game_title')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
            <label for="cover_art" class="form-label">cover_art</label>
            <input type="file" class="form-control" name="cover_art" id="cover_art" aria-describedby="helpId"
                placeholder="cover_art" />
            <img src="
                @if (strpos($game->cover_art, 'http') !== false) {{ $game->cover_art }}
                @else
                    {{ Storage::url($game->cover_art) }} @endif
            "
                alt="">


        </div>
        <div class="mb-3">
            <label for="developer" class="form-label">developer</label>
            <input type="text" class="form-control" name="developer" id="developer" aria-describedby="helpId"
                value="{{ $game->developer }}" placeholder="developer" />
            @error('developer')
                {{ $message }}
            @enderror

        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">release_year</label>
            <input type="number" class="form-control" name="release_year" id="release_year" aria-describedby="helpId"
                value="{{ $game->release_year }}" placeholder="release_year" />
            @error('release_year')
                {{ $message }}
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">sua game</button>

    </form>
@endsection
