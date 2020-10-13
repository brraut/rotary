@extends('frontend.master')

@section('title')
Events
@endsection

@section('content')


 

    <div class="sub-banner">
				<div class="img-container">
					<img src="assets/images/banner1.jpg" alt="" />
					<div class="overlay">
						<div class="title">
							Events Details
						</div>
					</div>
				</div>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('frontend.events') }}">Events</a></li>

					<li class="breadcrumb-item active" aria-current="page">
                    {{ $data['event']->title }}
					</li>
				</ol>
			</nav>
			<div class="news-notice-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="content-section">
								<div class="event-section">
									<div class="event-wrapper">
										<div class="img-container">
                                        @if ($data['event']->featured)
											<img
												src="{{ asset('uploads/event/'.$data['event']->featured) }}"
												alt=""
												class="img-fluid"
                                            />
                                            @endif
										</div>
										<div class="title">
                                        {{ $data['event']->title }}
										</div>
										<div class="event-date mb-2"><strong>
                                    Event Date: {{ $data['event']->start_date->format('M d, Y') }}</strong>
                                    </div>
										<div class="long-description">
                                        {!! $data['event']->description !!}
										</div>
										<div class="date">
											Published: March 10, 2020
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="sidebar-section">
                                <div class="sidebar-title">Recent Events</div>
                                
								<ul>
                                @foreach ($data['other_events'] as $others)
									<li>
										<a href="{{ route('frontend.event.single',$others->slug) }}">{{ $others->title }}</a>
                                    </li>
                                    @endforeach
									
								</ul>
								<hr />
								<div class="sidebar-title">Recent News</div>
								<ul>
                                @foreach ($data['news'] as $news)
									<li>
										<a href="{{ route('frontend.news.single',$news->slug) }}">{{ $news->title }}</a>
                                    </li>
                                    @endforeach
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

