<div class="banner">
@foreach ($data['sliders'] as $slider)
				<div>
					<div class="banner-item">
						<img src="{{ asset('uploads/slider/'.$slider->featured) }}" class="img-fluid" alt="" />
						<div class="overlay-text">
							<div
								class="title"
								data-aos="zoom-out"
								data-aos-duration="2000"
								data-aos-easing="ease-in-out"
							>
							{!! $slider->title !!}
							</div>
							<div class="subtitle mb-5">
							{!! $slider->caption !!}
							</div>
							
						</div>
					</div>
				</div>
				@endforeach
				
			</div>