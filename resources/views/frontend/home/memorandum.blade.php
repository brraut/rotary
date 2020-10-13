@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="memorandum-container">
				<div class="about-page-title">
					Memorandum
				</div>
				<div class="container">
				@foreach($data['memoranda'] as $memorandum)
					<div class="memorandum">
                       <h3> {{$memorandum->title}}</h3>
                        {!! $memorandum->description !!}
						
                    </div>
                    @endforeach
				</div>
			</div>
@endsection