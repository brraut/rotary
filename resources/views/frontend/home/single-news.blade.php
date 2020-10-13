@extends('frontend.master')

@section('title')
News
@endsection

@section('content')



    <div class="sub-banner">
				<div class="img-container">
					<img src="assets/images/banner1.jpg" alt="" />
					<div class="overlay">
						<div class="title">
							News Detail
						</div>
					</div>
				</div>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{route('frontend.news')}}">News</a></li>
					<li class="breadcrumb-item active" aria-current="page">
                    {{ $data['news']->title }}
					</li>
				</ol>
			</nav>
			<div class="news-notice-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="content-section">
								<div class="notice-section">
									<div class="notice-detail-wrapper">
										<div class="main-title">
                                        {{ $data['news']->title }}
										</div>
										<div class="long-description">
                                        {!! $data['news']->description !!}
										</div>
										<div class="date">
                                        {{ $data['news']->created_at->format('M d, Y') }}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="sidebar-section">
								<div class="sidebar-title">Other News</div>
								<ul>
                                @foreach ($data['other_news'] as $others)
									<li>
										<a href="{{ route('frontend.news.single',$others->slug) }}">{{ $others->title }}</a>
                                    </li>
                                    @endforeach
								
								</ul>
								<hr />
								<div class="sidebar-title">Recent Events</div>
								<ul>
                                @foreach ($data['events'] as $event)
									<li>
										<a href="{{ route('frontend.event.single',$event->slug) }}">{{ $event->title }}</a>
                                    </li>
                                    @endforeach
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

