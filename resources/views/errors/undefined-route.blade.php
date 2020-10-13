@extends('frontend.master')

@section('title')
Ooops !!!!
@endsection

@section('content')
<div class="error-page">

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Sorry! Page you are trying doesn't  exist.</h1>

                    <h5>
                        Click the button below to go Home Page.
                    </h5>
                   <div class="mt-5">
                   <a href="{{ route('frontend.home') }}" class="mybtn ">Home</a>
                   </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
  </div><!-- .home-page-icon-boxes -->
@endsection