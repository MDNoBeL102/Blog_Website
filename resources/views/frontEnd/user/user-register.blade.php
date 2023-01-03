@extends('frontEnd.master')
@section('title')
    contact-Detail
@endsection
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Registration</h1>
                </div>
            </div>


            <div class="mt-2 col-md-8 m-auto">
                <form action="{{route('user.register')}}" method="post">
                   @csrf
                    <div class="row">
                        <div class="form-group col-md-12 mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your First Name" required>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Register</button>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>

@endsection
