@extends('frontend.master')

@section('title')
Bulletin
@endsection

@section('content')

<div class="bulletin-container">
				<div class="about-page-title">
					Bulletins
				</div>
				<div class="container">
                    
                    <div class="row">
                        @foreach($data['bulletins'] as $bulletin)
						<div class="col-md-3">
							<div class="bulletin-container">
								<a target="_blank" href="{{ asset('uploads/news/'.$bulletin->file) }}">
									<div class="img-container">
										<img src="{{ asset('uploads/news/'.$bulletin->featured) }}" alt="" />
									</div>
									<div class="overlay">
										<div class="view">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</a>
							</div>
							<div class="bulletin-title">
								{{$bulletin->title}}
							</div>
                        </div>
                        @endforeach
						
					</div>
				</div>
			</div>

@endsection