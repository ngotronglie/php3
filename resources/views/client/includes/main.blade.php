@extends('client.index');


@section('main')
    @include('client.includes.banner')
    @include('client.includes.product1')
    @include('client.includes.banner2')
    @include('client.includes.best-sell')
    @include('client.includes.feel')
    @include('client.includes.blog')
    <div class="instagram-feed-thumb pb-100">
        <div id="instafeed" class="instafeed-style"></div>
    </div>
@endsection
