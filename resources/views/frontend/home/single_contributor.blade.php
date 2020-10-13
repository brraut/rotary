@extends('frontend.master')

@section('title')
     Rotary Members
@endsection



@section('content')


<div class="portfolio-container">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							
                                <div class="img-container">
                                    <img src="{{ asset('uploads/contributor/'.$data['profile']->featured) }}" class="img-fluid" alt="" />
                                </div>
                               
						</div>
						<div class="col-md-8">
                            <div class="portfolio-wrapper">
                            <div class="info">
                                <div class="name">
                                    {{$data['profile']->name}}
                                </div>
                                <div class="designation">
                                {{$data['profile']->position}} |  {{$data['profile']->duration}}
                                </div>
                              
                            </div>
                            <div class="involvement">
                            {!!$data['profile']->description!!}
                            </div>
                           
                            </div>
							
						</div>
					</div>
				</div>
			
			</div>
@endsection

