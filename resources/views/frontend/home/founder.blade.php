@extends('frontend.master')

@section('title')
    Founder Member of Rotary Club of Durbarmarg
@endsection



@section('content')


    <div class="member-container mb-5">
                
                
               <div class="container">
               
				<div class="about-page-title mt-4">
                {{
                    $data["founder"]->title
                }}
                </div>
                 {!!
                    $data["founder"]->description
                !!}
               </div>
               
				
			</div>
@endsection

