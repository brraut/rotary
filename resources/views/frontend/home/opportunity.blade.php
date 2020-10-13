@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="opportunity-container">
				<div class="about-page-title">
					Opportunity
				</div>
				<div class="container">
					@foreach($data['opportunities'] as $opportunity)
						<h3>{{$opportunity->title}}</h3>
						<div class="description">
						{!! $opportunity->description !!}
						</div>
					@endforeach
				</div>
			</div>

            @endsection