@extends('frontend.master')

@section('title')
Upcoming Events
@endsection

@section('content')


    <div class="sub-banner">
				<div class="img-container">
					<img src="assets/images/banner1.jpg" alt="" />
					<div class="overlay">
						<div class="title">
							Events
						</div>
					</div>
				</div>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Events
					</li>
				</ol>
			</nav>
			<div class="news-notice-section">
            <div class="text-center mt-2 mb-3">

<a href="{{ route('frontend.events') }}" class="btn @if(request()->is('events')) mybtn @endif" style="padding: 10px;">All Events</a>
<a href="{{ route('frontend.events.upcoming') }}" class="btn @if(request()->is('events/upcoming')) mybtn @endif" style="padding: 10px;">Upcoming Events</a>

</div> 
				<div class="container">
                    <div class="content-section">
                        <div class="event-section">
                        @if ($data['upcoming']->count() > 0)
                        @foreach ($data['upcoming'] as $event)
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('frontend.event.single',$event->slug) }}">
                                        <div class="img-container">
                                            <img
                                                src="{{ asset('uploads/event/'.$event->featured) }}"
                                                alt=""
                                                class="img-fluid"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="title">
                                    <a href="{{ route('frontend.event.single',$event->slug) }}">{{ $event->title }}</a>
                                    </div>
                                    <div class="short-description">
                                    {!! str_limit($event->description,200) !!}
                                    </div>
                                    <div class="event-date "><strong>
                                    Event Date: {{ $event->start_date->format('M d, Y') }}</strong>
                                    </div>
                                    <div class="date">Published: {{ $event->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                            @endforeach
                            @else

                <h3>There are no upcoming events as of now.</h3>
                   @endif
                           
                        </div>

                        {{ $data['upcoming']->links('vendor.pagination.frontpagination') }}
                    </div>
				</div>
			</div>
@endsection

