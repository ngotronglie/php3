@extends('client.index')

@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Register</h1>
                    <ul>
                        <li>
                            <a href="/">Home </a>
                        </li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <div class="register-wrapper container mt-5 ">

        <!-- Login Title & Content Start -->
        <div class="section-content text-center mb-5">
            <h2 class="title mb-2">Create Account</h2>
            <p class="desc-content">Please Register using account detail bellow.</p>
        </div>
        <!-- Login Title & Content End -->

        <!-- Form Action Start -->
        <form action="#" method="post">

            <!-- Input First Name Start -->
            <div class="single-input-item mb-3">
                <input type="text" placeholder="First Name">
            </div>
            <!-- Input First Name End -->

            <!-- Input Last Name Start -->
            <div class="single-input-item mb-3">
                <input type="text" placeholder="Last Name">
            </div>
            <!-- Input Last Name End -->

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

            <!-- Register Button Start -->
            <div class="single-input-item mb-3">
                <button class="btn btn btn-dark btn-hover-primary rounded-0">Register</button>
            </div>
            <!-- Register Button End -->

        </form>
        <!-- Form Action End -->
        <div class="h6 text-center">
            Login -> <a href="/login">click here</a>
        </div>

    </div>
@endsection
