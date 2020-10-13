@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="cause-container">
				<div class="about-page-title">
					Our Causes
				</div>
				<div class="container">
					<div class="subtitle">
					Rotary members believe that we have a shared responsibility to take action on our world’s most persistent issues. Our club works together with Rotary International, District 3292, other Rotary Clubs, donors, agencies, governments etc. to:
					</div>
					
					<div class="row">
						@foreach($data['causes'] as $causeItem)
						<div class="col-md-4">
							<div class="cause-wrapper">
								<div class="img-container">
									<img
										src="{{ asset('uploads/cause/'.$causeItem->featured) }}"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="title">
									{{$causeItem->title}}
								</div>
								<div class="description">
								{!! Str::words($causeItem->description,20, '...')!!}
								</div>
								<div class="button-container">
									<a href="{{route('frontend.cause.single',$causeItem->id)}}" class="mybtn">Show More</a>
								</div>
							</div>
						</div>
						@endforeach
					
					</div>
				</div>
			</div>

@endsection