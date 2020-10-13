@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="about-container">

				<div class="about-page-title">
				{{ $data['about'][0]->title }}
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="about-img-container">
								<img src="{{ asset('uploads/about/'.$data['about'][0]->featured) }}" class="img-fluid" alt="" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="description">
							{!! $data['about'][0]->description !!}
							</div>
						</div>
					</div>
				</div>
			
							</div>
@endsection