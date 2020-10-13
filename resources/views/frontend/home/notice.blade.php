@extends('frontend.master')

@section('title')
Notice
@endsection

@section('content')


    <div class="sub-banner">
				<div class="img-container">
					<img src="assets/images/banner1.jpg" alt="" />
					<div class="overlay">
						<div class="title">
							Notice
						</div>
					</div>
				</div>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Notice
					</li>
				</ol>
			</nav>
			<div class="news-notice-section">
				<div class="container">
					<div class="content-section">
                        <div class="notice-section">
                        @foreach ($data['news'] as $news)
                            <div class="notice-wrapper">
                                <div class="title">
                                {{ $news->title }}
                                </div>
                               
                                <div class="date">
                                {{ $news->created_at->format('M d, Y') }}
                                </div>
                                <div class="button-container">
                                    <a href="{{ route('frontend.notice.single',$news->slug) }}" class="mybtn">View Detail</a>
                                </div>
                            </div>
                            @endforeach
                           
                        
                        </div>
                    </div>
				</div>
			</div>
@endsection