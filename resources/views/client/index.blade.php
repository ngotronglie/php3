@include('client.includes.head')

<body>

    <div class="main-wrapper wrapper-2">
        @include('client.includes.header')
        @include('client.includes.mobile-menu')
        @include('client.includes.search-start')
        @include('client.includes.cart')


        @yield('main')

        @include('client.includes.footer')
        <!-- JS
============================================ -->

        @include('client.includes.script')
