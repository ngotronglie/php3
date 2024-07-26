@extends('client.index')

@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Login</h1>
                    <ul>
                        <li>
                            <a href="/">Home </a>
                        </li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <div class="register-wrapper container mt-5 ">


        <!-- Form Action Start -->
        <form action="#" method="post">
            <!-- Input Email Or Username Start -->
            <div class="single-input-item mb-3">
                <input type="email" placeholder="Email or Username">
            </div>
            <!-- Input Email Or Username End -->

            <!-- Input Password Start -->
            <div class="single-input-item mb-3">
                <input type="password" placeholder="Enter your Password">
            </div>
            <!-- Input Password End -->

            <!-- Login Button Start -->
            <div class="single-input-item mb-3">
                <button class="btn btn btn-dark btn-hover-primary rounded-0">Login</button>
            </div>
            <!-- Login Button End -->

        </form>
        <!-- Form Action End -->
        <div class="h6 text-center">
            Register -> <a href="/register">click here</a>
        </div>

    </div>
@endsection
