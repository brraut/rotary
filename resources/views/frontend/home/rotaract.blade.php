@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="rotaract-container">
				<div class="about-page-title">
				{{$data['rotaract']->title}}
				
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="description">
								{!! $data['rotaract']->description !!}
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-container">
								<img src="{{ asset('uploads/rotaract/'.$data['rotaract']->featured) }}" class="img-fluid" alt="" />
							</div>
						</div>
					</div>
                </div>
                <div class="follow-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="follow-wrapper" style="border-right: 2px solid white;">
                                   <div class="title">
                                       Visit the webiste of Rotaract DurbarMarg
                                   </div>
                                   <a target="_blank" href="{{$data['rotaract']->website_url}}">{{$data['rotaract']->website_url}}</a>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="follow-wrapper">
                                    <div class="title">
                                        Visit the Facebook  of Rotaract DurbarMarg
                                    </div>
                                    <a target="_blank" href="{{$data['rotaract']->facebook_url}}">{{$data['rotaract']->facebook_url}}</a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection