@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="single-cause-container">
				<div class="single-cause-banner">
					<img src="{{ asset('uploads/cause/'.$data['cause']->featured) }}" class="img-fluid" alt="" />
				</div>
				<div class="single-cause-wrapper">
					<div class="main-title">
						{{$data['cause']->title}}
					</div>
                   
				
                </div>
                <div class="single-cause-description">
                   <div class="container">
                   <h3>{{$data['cause']->subtitle}}</h3>
                    <div class="brief">
                        {!! $data['cause']->description !!}
                    </div>
                   </div>
                </div>
                
			</div>

@endsection