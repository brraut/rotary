@extends('frontend.master')

@section('title')
Privacy Policy
@endsection

@section('content')
<div class="single-page extra-page">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Privacy Policy</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="welcome-wrap">
        <div class="container">
           
             <div class="welcome-content">
                <div class="entry-content mt-4">
                     {!! $data['setting']->privacy_policy !!}
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
   

   



</div>


@endsection