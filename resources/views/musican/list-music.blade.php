@extends('index')

@section('title')
    Danh sach nhac si
@endsection
@if (session('message'))
    <div class="bg-success">{{ session('message') }}</div>
@endif

@section('content')
    <table class="table table-striped container hover mt-5">
        <thead>
            <a href="{{ route('create') }}" class="btn btn-primary ">them game</a>
            <tr>
                <th>#</th>
                <th>game_title</th>
                <th>cover_art</th>
                <th>developer</th>
                <th>release_year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ListGame as $index => $game)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $game->game_title }}</td>
                    <td>

                        @if (strpos($game->cover_art, 'http') !== false)
                            <img width="150px" src="{{ $game->cover_art }}" alt="">
                        @else
                            <img width="150px" src="{{ Storage::url($game->cover_art) }}" alt="">
                        @endif
                    </td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->release_year }}</td>
                    <td>
                        <a href="{{ route('edit', $game->id) }}" class="btn btn-warning">sua</a>
                        <form action="{{ route('destroy', $game->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" type="submit"
                                class="btn btn-danger">xoa</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
