@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="meeting-container">
				<div class="about-page-title">
					Meeting Information
					
				</div>
				<div class="container">
					<div class="info-wrapper">
						<div class="item">
							<div class="title">
								Official Name
							</div>
							<div class="description">
							{{$data['meeting']->name}}
                            </div>
                        </div>
                        <div class="item">
							<div class="title">
								Language used
                            </div>
							<div class="description">
							{{$data['meeting']->language}}
                            </div>
                        </div>
                        <div class="item">

							<div class="title">
								Weekly Meeting
							</div>
							<div class="description">
							{{$data['meeting']->weekly_meeting}}
                            </div>
                        </div>
                        <div class="item">

                        
							<div class="title">
								Meeting Notices
							</div>
							<div class="description">
							{{$data['meeting']->meeting_notice}}
                            </div>
                        </div>
                       
                        <div class="item">

							<div class="title">
								Attendent
							</div>
							<div class="description">
							{{$data['meeting']->attendent}}
                            </div>
                            </div>
						
						<div class="item">

							<div class="title">
								Other Info
							</div>
							<div class="description">
							{!!$data['meeting']->description!!}
                            </div>
                            </div>
						</div>
					</div>
					<div class="location">
                        <div class="location-title">
                            Meeting Venue
                        </div>
                        <div class="place">
                           <i class="fa fa-map-marker-alt"></i> {{$data['meeting']->venue}}
                        </div>
                        <iframe src="{{($data['meeting']->google_map)}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                    </div>
				</div>
			</div>
            @endsection