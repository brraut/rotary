@extends('frontend.master')

@section('title')
Gallery
@endsection

@section('content')

<div class="gallery-container">
				<div class="about-page-title">
					Gallery Album
				</div>
				<div class="container">
                    <div class="row">
                    @foreach ($data['gallery'] as  $album)
						<div class="col-md-4">
							<div class="album-container">
								<a href="{{route('frontend.gallery.single',$album->id)}}">
									<div class="img-container">
										<img src="{{ asset('uploads/gallery/'.$album->featured) }}" alt="" />
									</div>
									<div class="overlay">
										<div class="view">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</a>
							</div>
							<div class="album-title">
								{{$album->title}}
							</div>
                        </div>
                        @endforeach
						
					</div>
				</div>
			</div>


@endsection
