@extends('frontend.master')

@section('title')
Contact Us
@endsection

@section('content')
<div class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="main-title">
								Contact Us
							</div>
							<div class="sub-title">
								Feel Free to contact Us!
							</div>
							{!! Form::open(['url'=>route('dashboard.contact.store'),'enctype'=>'multipart/form-data','class'=> 'contact-form']) !!}
								<div class="form-group">
									<input
										type="text"
										class="form-control"
										placeholder="Full Name*"
										name="fullname"
									/>
									<small class="text-danger">{{ $errors->first('fullname') }}</small>

								</div>
								<div class="form-group">
									<input
										type="email"
										class="form-control"
										placeholder="Email*"
										name="email"
									/>
									<small class="text-danger">{{ $errors->first('email') }}</small>
								</div>
							
								<div class="form-group">
									<textarea
										name="body"
										id=""
										cols="30"
										rows="5"
										class="form-control"
										placeholder="Your Message *"
									></textarea>
									<small class="text-danger">{{ $errors->first('body') }}</small>
								</div>
								<div class="button-container">
									<button type="submit" class="mybtn">
										Send Message
									</button>
								</div>
								{!! Form::close() !!}
						</div>
						<div class="col-md-6">
							<div class="img-container d-none d-md-block">
								<img src="{{ asset('frontend/images/contact.jpg') }}" alt="" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>
				<div class="contact-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="phone-wrapper">
									<div class="title">
										Call Us!
									</div>
									<div class="phone">
										+977-9851021921
									</div>
									
									<div class="phone-wrapper-icon">
										<i class="fa fa-phone"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="phone-wrapper">
									<div class="title">
										Email Us!
									</div>
									<div class="phone">
										info@rotarydurbarmarg.com
									</div>
									
									<div class="phone-wrapper-icon">
										<i class="fa fa-envelope"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="phone-wrapper">
									<div class="title">
										Locate Us!
									</div>
									<div class="phone">
										DurbarMarg, Kathmandu
									</div>
									
									<div class="phone-wrapper-icon">
										<i class="fa fa-map-marker-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3501007607415!2d85.31420131506205!3d27.706474782792327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19016c9d9fcb%3A0xd2291eee6917d60a!2sDurbar%20Marg%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1595867466814!5m2!1sen!2snp"
				width="100%"
				height="450"
				frameborder="0"
				style="border:0;"
				allowfullscreen=""
				aria-hidden="false"
				tabindex="0"
			></iframe>

			

@endsection