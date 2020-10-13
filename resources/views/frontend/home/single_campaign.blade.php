@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')

<div class="single-cause-container">
				<div class="single-campaign-banner">
					<img src="{{ asset('uploads/campaign/'.$data['campaign']->featured) }}" class="img-fluid" alt="" />
				</div>
				<div class="single-campaign-wrapper">
					<div class="main-title">
						{{$data['campaign']->title}}
					</div>
                   
				
                </div>
                <div class="single-cause-description">
                   <div class="container">
                  
                    <div class="brief">
                        {!! $data['campaign']->description !!}
                    </div>
                   </div>
                </div>
                
			</div>
@endsection