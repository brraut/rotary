@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="history-container">
				<div class="about-page-title">
					History
				</div>
				<div class="container">
                    @foreach($data['histories'] as $history)
					<div class="brief-history">
                       <h3> {{$history->title}}</h3>
                        {!! $history->description !!}
						
                    </div>
                    @endforeach
                    
				</div>
			</div>
@endsection