<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="main-title">
								About Rotary
							</div>
							<div class="description">
							{!! $setting->footer_about !!}
							</div>
							<!-- <div class="about-button">
								<a href="{{route('frontend.about')}}">About Us</a>
							</div> -->
						</div>
						<div class="col-md-3">
							<div class="main-title">
								Contact
							</div>
							
							<ul class="campaign-links" style="color: white">
							{!! $setting->footer_contacts !!}
								
							</ul>
						</div>
						<div class="col-md-3">
							<div class="main-title">
								Related Sites
							</div>
							<ul class="related-links">
								@foreach($links as $link)
								<li><a target="_blank" href="{{ ($link->link) }}">{{$link->title}}</a></li>
								@endforeach
								
							</ul>
						</div>
						<div class="col-md-3">
							<div class="main-title">
								Other Links
							</div>
							
							<ul class="related-links">
							<li><a href="{{ route('frontend.privacy-policy') }}">Privacy</a></li>
					<li><a href="{{ route('frontend.resources') }}">Resources & Download</a></li>
					<li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
								
							</ul>
						</div>
						<!-- <div class="col-md-3">
							<div class="main-title">
								Subscribe Now
							</div>
							<div class="subtitle">
								Subscribe to be updated about our campaigns
							</div>
							<form action="">
								<input
									type="text"
									placeholder="example@gmail.com"
									class="form-control"
								/>
								<button>
									Subscribe
								</button>
							</form>
						</div> -->
					</div>
				</div>
			</div>
			<div class="secondary-footer">
				<div class="copyright">
					<span>Copyright &copy; 2020 by Rotary Club of DurbarMarg</span> |
					<span>Designed By <a href="http://brraut.com.np" target="_blank">Bishwo Raj Raut</a></span>
				</div>
			
			</div>



@yield('js')

  
