@extends('frontend.master')

@section('title')
Former President of Rotary Club of Durbarmarg
@endsection

@section('content')

				<div class="special-mention">
					<div class="container">
                    <div class="special-title">
									Past President of the Club
								</div>
						<div class="row">
                        @foreach($data['contributors'] as $contributor)
							<div class="col-md-6">
							
								<div class="special-item">
									<div class="row">
										<div class="col-md-4">
											<div class="img-container">
												<img
													src="{{ asset('uploads/contributor/'.$contributor->featured) }}"
													class="img-fluid"
													alt=""
												/>
											</div>
										</div>
										<div class="col-md-8">
											<a class="name" href="{{route('frontend.about.single',$contributor->id)}}">
												{{$contributor->name}}
											</a>
											<div class="designation">
												{{$contributor->position}} {{$contributor->duration}}
											</div>
											<div class="special-detail">
											{!! Str::words($contributor->description,20, '...')!!}
												
											</div>
										</div>
									</div>
								</div>
                               
							</div>
								@endforeach
						</div>
					</div>
				</div>
		
@endsection