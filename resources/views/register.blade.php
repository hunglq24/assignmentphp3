@extends('user.layouts.index')

@section('content')

    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="{{ asset('assets/img/bg3.webp') }}">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Register</h2>
                            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                                <ul class="breadcrumb">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start My Account Area Wrapper ==-->
        <section class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Register</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="register-form-content">
                            @if (session('message'))
                                <p class="text-danger">{{ session('message') }}</p>
                            @endif
                            <form action="{{ route('postRegister') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username">Username <span class="required">*</span></label>
                                            <input class="form-control"  name="name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email address <span class="required">*</span></label>
                                            <input  class="form-control" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password">Password <span class="required">*</span></label>
                                            <input id="password" class="form-control" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb--0">
                                            <button class="btn-register">Register</button>
                                        </div>
                                    </div>
                                            <a href="{{ route('login')}}" class="btn-register mt-4">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End My Account Area Wrapper ==-->
    </main>
    @endsection
