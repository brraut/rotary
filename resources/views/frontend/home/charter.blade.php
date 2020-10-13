@extends('frontend.master')

@section('title')
    Chartered Member of Rotary Club of Durbarmarg
@endsection



@section('content')


    <div class="member-container mb-5">
                
                
               <div class="container">
               
				<div class="about-page-title mt-4">
                {{
                    $data["charter"]->title
                }}
                </div>
                 {!!
                    $data["charter"]->description
                !!}
               </div>
               
				
			</div>
@endsection

