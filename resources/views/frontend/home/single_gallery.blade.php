
@extends('frontend.master')

@section('title')
Gallery
@endsection

@section('content')

<div class="gallery-container">
				<div class="about-page-title">
					{{$data['gallery']->title}} 
				</div>
				<div class="container">
				<a href="{{route('frontend.gallery')}}" class="back-button"><i class="fa fa-arrow-left"></i></a>
                    <div class="row">
                      
                        
                        @foreach($data['gallery_images'] as $image)
                        
						<div class="col-md-4">
							<div class="album-container">
								<a href="javascript:void(0)" onclick="openModal();currentSlide({{$image->id}})">
									<div class="img-container">
										<img src="{{ asset('uploads/gallery/'.$image->featured) }}" alt="" />
									</div>
									<div class="overlay">
										<div class="view">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</a>
							</div>
							
                        </div>
                        @endforeach
						
					</div>
				</div>
				<div id="galleryModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">
                    @foreach($data['gallery_images'] as $image)
					  <div class="mySlides">
						
						<img src="{{ asset('uploads/gallery/'.$image->featured) }}" style="width:100%">
                      </div>
                      @endforeach
				  
					 
				  
					  <!-- Next/previous controls -->
					  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				  
					 
					</div>
				  </div>
			</div>


@endsection
