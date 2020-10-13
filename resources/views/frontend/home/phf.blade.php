@extends('frontend.master')

@section('title')
    PHF Member of Rotary Club of Durbarmarg
@endsection



@section('content')


    <div class="member-container mb-5">
                
                
               <div class="container">
               
				<div class="about-page-title mt-4">
                {{
                    $data["phf"]->title
                }}
                </div>
                 {!!
                    $data["phf"]->description
                !!}
               </div>
               
				
			</div>
@endsection

