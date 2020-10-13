@extends('frontend.master')

@section('title')
Rotary Durbarmarg
@endsection

@section('content')
 
  
<div class="about-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div
								class="about-wrapper"
								data-aos="fade-up"
								data-aos-duration="500"
							>
								<div class="main-title">
									About Rotary
								</div>

								<div class="description">
								<!-- @if($data['about']) -->
								{!! str_limit($data['about']->description,450) !!}
								<!-- @endif -->
								</div>
								<div class="button-container">
									<a href="{{route('frontend.about')}}" class="mybtn">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div
								class="latest-event-wrapper"
								data-aos="fade-up"
								data-aos-duration="1000"
							>
								<div class="main-title">
								<!-- @if ($data['upcoming']->count() > 0) -->
                              Latest Events
                            <!-- @endif Events -->
								</div>
								<div class="event-slider">
							

                             @foreach ($data['events'] as $event)
							 <div>
										<div class="event-item">
											<div class="row">
												<div class="col-md-4">
													<div class="img-container">
														<img
															src="{{ asset('uploads/event/'.$event->featured) }}"
															class="img-fluid"
															alt=""
														/>
														<div class="date">{{ $event->start_date->format('M d, Y')  }}</div>
													</div>
												</div>
												<div class="col-md-8">
													<div class="title">
														<a href="{{ route('frontend.event.single',$event->slug) }}">{{ $event->title }}</a
														>
													</div>
													<div class="info">
														<i class="fa fa-map-marker-alt"></i> Hyatt Regency,
														Kathmandu
													</div>
													<div class="description">
													{!! str_limit($event->description,90) !!}
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
									
								
							</div>
						</div>
					</div>
				</div>
			</div>
			@if ($data['causes']->count() > 0)
			<div class="what-we-do">
				<div
					class="what-we-do-banner"
					data-aos="fade-up"
					data-aos-duration="500"
				>
					<div class="title" data-aos="fade-up" data-aos-duration="1000">
						What We Do
					</div>
					<div class="subtitle" data-aos="fade-up" data-aos-duration="1000">
					Rotary members believe that we have a shared responsibility to take action on our world’s most persistent issues. Our club works together with Rotary International, District 3292, other Rotary Clubs, donors, agencies, governments etc. to:
					</div>
				</div>
				@foreach($data['causes'] as $cause)
				<div class="cause-item container-fluid">
					<div class="row">
						<div class="col-md-6 order-img">
							<div
								class="img-container"
								data-aos="fade-down"
								data-aos-duration="1000"
							>
								<img src="{{ asset('uploads/cause/'.$cause->featured) }}" alt="" class="img-fluid" />
							</div>
						</div>
						<div class="col-md-6 order-text">
							<div class="cause-wrapper">
								<div
									class="top-title"
									data-aos="fade-right"
									data-aos-duration="1000"
									data-aos-anchor-placement="bottom"
								>
									{{ $cause->title}}
								</div>
								<a
								href="{{route('frontend.cause.single',$cause->id)}}"
									class="title"
									data-aos="fade-right"
									data-aos-duration="1500"
									data-aos-anchor-placement="bottom"
								>
									{{$cause->subtitle}}
								</a>
								<div
									class="description"
									data-aos="fade-right"
									data-aos-duration="1500"
									data-aos-anchor-placement="bottom"
								>
								{!! Str::words($cause->description,20, '...')!!}
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			
				
				<div
					class="button-container"
					data-aos="zoom-in-down"
					data-aos-duration="1000"
				>
					<a href="{{route('frontend.cause')}}" class="mybtn">Know More Causes</a>
				</div>
			</div>
			@endif
			@if ($data['campaigns']->count() > 0)
			<div class="our-campaign">
				
					<div class="main-title">
						Our Campaign
					</div>
					
					<div class="container">
						<div class="campaign">
						@foreach($data['campaigns'] as $campaign)
							<div>
								<div class="campaign-item">
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
										<a href="{{route('frontend.campaign.single',$campaign->id)}}">
											View More
										</a>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
			</div>
			@endif
			<div class="voice">
				<div class="container">
					<div class="main-title">
						Message From
					</div>
					<div class="button-container">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu1"
									>Treasurer</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home"
									>President</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu2"
									>Secretary</a
								>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane container active" id="home">
							<div class="row">
							@if (isset($data['president']))
								<div class="col-md-3">
									<div
										class="img-container"
										data-aos="zoom-in-down"
										data-aos-duration="1000"
										data-aos-offset="0"
									>
										<img
											src="{{ asset("uploads/member/".$data['president']->featured) }}"
											class="img-fluid"
											alt=""
										/>
									</div>
								</div>
								<div class="col-md-9">
									<div
										class="speech"
										data-aos="fade-right"
										data-aos-duration="1000"
									>
										<div class="name">
											{{ $data['president']->name }} - {{ $data['president']->position }}
										</div>

										Dear Fellow Rotarians,<br/>
I am delighted for being elected as President of our Club for the year 2020-21 with the support and trust of all the membersfor my leadership.My leadership in the Club has widened the path for all women toward the future leadership and has created many opportunities to justify the gender equality in the society. As being first woman in Rotary Club of Durbarmarg and President for 2020-21, I feel blessed to work for service to our society leading the Club together with my dynamic team. At this juncture of time, I would like to assure that we will do our best to uplift our Club and will not let your believe go down.
<br/>
COVID-19 global pandemic is threatening our health, safety and way of life. I believe that we will get through this by working together and taking care of each other – just what Rotary members do. To help people who are in risk of this pandemic, we have to modify our Health service project and focus to literate people to safeguard themselves from such risk. 


									</div>
								</div>
							</div>
							@endif
						</div>
						<div class="tab-pane container fade" id="menu1">
							<div class="row">
							@if (isset($data['treasurer']))
								<div class="col-md-3">
									<div
										class="img-container"
										data-aos="zoom-in-down"
										data-aos-duration="1000"
										data-aos-offset="0"
									>
										<img
											src="{{ asset("uploads/member/".$data['treasurer']->featured) }}"
											class="img-fluid"
											alt=""
										/>
									</div>
								</div>
								<div class="col-md-9">
									<div
										class="speech"
										data-aos="fade-right"
										data-aos-duration="1000"
									>
										<div class="name">
											{{ $data['treasurer']->name }} - {{ $data['treasurer']->position }}
										</div>

										{!! $data['treasurer']->description !!}
									</div>
								</div>
							</div>
							@endif
							</div>
						
						<div class="tab-pane container fade" id="menu2">
							<div class="row">
							@if (isset($data['secretary']))
								<div class="col-md-3">
									<div
										class="img-container"
										data-aos="zoom-in-down"
										data-aos-duration="1000"
										data-aos-offset="0"
									>
										<img
											src="{{ asset("uploads/member/".$data['secretary']->featured) }}"
											class="img-fluid"
											alt=""
										/>
									</div>
								</div>
								<div class="col-md-9">
									<div
										class="speech"
										data-aos="fade-right"
										data-aos-duration="1000"
									>
										<div class="name">
											{{ $data['secretary']->name }} - {{ $data['secretary']->position }}
										</div>

										Dear Fellow Rotarians,<br/>

It is indeed an honour to be appointed as the Secretary of the most vibrant and lively club The Rotary Club of Durbarmargunder RI District: 3292 (Nepal – Bhutan). An honour which also comes with a lot of responsibility.
Rotary has made me passionate about“Service above Self” to spare time for humanitarian services. This post gives me the opportunity to fulfill my passion by working for club with giving back to the society and serving the needy, enjoying entertaining programs and enhancing fellowship with club members and other Rotarians.
<br/> 
I assure you that during my tenure as Secretary, my team and I will use all our knowledge, resources and time to make 2020-21 a memorable year for all our club members and take our club to new heights.
The over whelming support received from all of you during our installation programs has immensely helped to boost our morale. I have no doubt in my mind that our team will continue to receive your support through your presence and participation in all club programs.

									</div>
								</div>
							</div>
							@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="our-team">
				<div class="container">
					<div class="main-title">
						Meet Our Team
					</div>
					<div class="subtitle">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos
						ducimus, a dignissimos esse perferendis numquam tenetur sapiente
						architecto quasi obcaecati quia maxime harum aspernatur. Autem
						temporibus atque cum ducimus ad?
					</div>
					<div class="row">
					@foreach ($data['our_team'] as $member)
					
						<div
							class="col-md-3"
							data-aos="fade-right"
							data-aos-duration="1000"
						>

							<div class="item-wrapper">
								<div class="img-container">
									<img
										src="{{ asset('uploads/member/'.$member->featured) }}"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="name">
								{{ $member->name }}
								</div>
								<div class="designation">
								{{ $member->position }}
								</div>
								<!-- <div class="phone"><i class="fa fa-mobile"></i> 9834934333</div>
								<div class="email">
									<i class="fa fa-envelope-open"></i> bishowraut@gmail.com
								</div>
								<ul class="social-link">
									<li>
										<a href=""><i class="fab fa-facebook"></i></a>
									</li>
									<li>
										<a href=""><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href=""><i class="fab fa-instagram"></i></a>
									</li>
								</ul> -->
							</div>
						</div>
					
                                                @endforeach
						
					</div>
					<div class="member-button">
						<a href="{{route('frontend.boardmembers')}}" class="mybtn-white">More Members</a>
					</div>
				</div>
			</div>
@endsection
@section('js')
<script>
			$(document).ready(function () {
				AOS.init({ disable: "mobile" });
			});

			$(window).on("load", function () {
				AOS.refresh();
			});
		</script>
@endsection