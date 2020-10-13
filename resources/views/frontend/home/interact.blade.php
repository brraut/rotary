@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="rotaract-container">
				<div class="about-page-title">
				{{$data['interact']->title}}
				
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="description">
								{!! $data['interact']->description !!}
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-container">
								<img src="{{ asset('uploads/interact/'.$data['interact']->featured) }}" class="img-fluid" alt="" />
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
                                       Visit the webiste of Interacts DurbarMarg
                                   </div>
                                   <a target="_blank" href="{{$data['interact']->website_url}}">{{$data['interact']->website_url}}</a>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="follow-wrapper">
                                    <div class="title">
                                        Visit the Facebook  of Interacts DurbarMarg
                                    </div>
                                    <a target="_blank" href="{{$data['interact']->facebook_url}}">{{$data['interact']->facebook_url}}</a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection