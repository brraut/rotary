@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="campaign-container">
				<div class="about-page-title">
					Our Flagship Projects
				</div>
				<div class="container">
					<div class="subtitle">
					Rotary members believe that we have a shared responsibility to take action on our world’s most persistent issues. Our club works together with Rotary International, District 3292, other Rotary Clubs, donors, agencies, governments etc. to:
					</div>
					<div class="row">
						@foreach($data['campaigns'] as $campaign)
						<div class="col-md-4">
							<div class="cause-wrapper">
								<div class="img-container">
									<img
										src="{{ asset('uploads/campaign/'.$campaign->featured) }}"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="title">
									{{$campaign->title}}
								</div>
								<div class="description">
								{!! Str::words($campaign->description,20, '...')!!}
								</div>
								<div class="button-container">
									<a href="{{route('frontend.campaign.single',$campaign->id)}}" class="mybtn">Show More</a>
								</div>
							</div>
						</div>
						@endforeach
					
					</div>
				</div>
			</div>

@endsection