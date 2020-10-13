@extends('frontend.master')

@section('title')
RCC of Rotary Club of Durbarmarg
@endsection

@section('content')
<div class="rotaract-container">
@foreach($data['rccs'] as $rcc)
				<div class="about-page-title">

				{{$rcc->title}}
				
				</div>
				<div class="container mb-5">
					<div class="row">
						<div class="col-md-7">
							<div class="description">
								{!! $rcc->description !!}
							</div>
						</div>
						<div class="col-md-5">
							<div class="img-container">
								<img src="{{ asset('uploads/rcc/'.$rcc->featured) }}" class="img-fluid" alt="" />
							</div>
						</div>
					</div>
                </div>
               @endforeach
            </div>
            @endsection