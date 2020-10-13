
       
<div id="mobileNavbar" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
				>&times;</a
			>

			<div class="overlay-content">
			<a href="{{route('frontend.home')}}">Home</a>
				<div class="mobile-nav">
					<button>About Rotary <i class="fa fa-caret-down"></i></button>
					<div class="mobile-nav-wrapper">
					<a href="{{ route('frontend.about') }}">About Our Club</a>
					
								<a href="{{ route('frontend.president') }}">Former President</a>
								<a href="{{route('frontend.meeting')}}">Meeting Information</a>
								<a href="{{route('frontend.committee')}}">Committee</a>
								<a href="{{route('frontend.history')}}">Brief Club History</a>
								<a href="{{route('frontend.gallery')}}">Gallery</a>
								<a href="{{route('frontend.memorandum')}}">Memorandum</a>
					</div>
				</div>
				<div class="mobile-nav">
					<button>Members <i class="fa fa-caret-down"></i></button>
					<div class="mobile-nav-wrapper">
								<a href="{{route('frontend.boardmembers')}}">Board Members</a>
								<a href="{{route('frontend.charter')}}">Charter Members</a>
								<a href="{{route('frontend.founder')}}">Founder Members</a>
								<a href="{{route('frontend.phf')}}">PHF & Major Donor Members</a>
								<a href="{{route('frontend.members')}}">Our Members</a>
					</div>
				</div>
				<a href="{{route('frontend.cause')}}">Cause</a>
					<a href="{{route('frontend.campaign')}}">Flagship Project</a>
					
						<a href="{{ route('frontend.funding')}}">Fund Raising</a>
					

				<div class="mobile-nav">
					<button>News <i class="fa fa-caret-down"></i></button>
					<div class="mobile-nav-wrapper">
					<a href="{{route('frontend.events')}}">Events</a>
								<a href="{{route('frontend.notice')}}">Notice</a>
								<a href="{{route('frontend.news')}}">News</a>
								<a href="{{route('frontend.bulletin')}}">Bulletins</a>
					</div>
				</div>
				<div class="mobile-nav">
					<button>Get Involved <i class="fa fa-caret-down"></i></button>
					<div class="mobile-nav-wrapper">
					<a href="{{route('frontend.join')}}">Join</a>
								<a href="{{route('frontend.rotaract')}}">Rotaract Club</a>
								<a href="{{route('frontend.interact')}}">Interacts Club</a>
								<a href="{{route('frontend.rcc')}}">RCC</a>
								<a href="{{route('frontend.opportunity')}}">Opportunity</a>
					</div>
				</div>
			</div>
		</div>
		<div class="primary-navbar">
			<div class="logo-wrapper">
				<a href="{{route('frontend.home')}}" class="logo-container">
					<img src="{{ asset('uploads/setting/'.$setting->featured) }}" alt="logo" class="img-fluid"  />
				</a>
				<div class="company-name">
					Rotary Club of
					<span>DurbarMarg</span>
					<div class="company-district">
					RI District: 3292
					</div>
				</div>
				<div class="mobile-tab">
					<i class="fa fa-bars" onclick="openNav()"></i>
				</div>
			</div>
			<div class="nav-item-wrapper">
				<div class="top-nav">
					<ul class="social-nav">
						<li>
							<a target="_blank" href="{{ $setting->fb_url }}"><i class="fab fa-facebook"></i></a>
						</li>
						@if(isset($setting->twitter_url))
						<li>
							<a target="_blank" href="{{ $setting->twitter_url }}"><i class="fab fa-twitter"></i></a>
						</li>
						@endif
						@if(isset($setting->linkedIn_url))
						<li>
							<a target="_blank" href="{{ $setting->linkedIn_url }}"><i class="fab fa-linkedin"></i></a>
						</li>
						@endif
					</ul>
					<ul class="contact-nav">
						<li>
							<a href=""><i class="fa fa-phone"></i> {{$setting->phone}} </a>
						</li>
						<li>
							<a href=""
								><i class="fa fa-envelope"></i> {{$setting->email}}
							</a>
						</li>
					</ul>
				</div>
				<ul class="nav-menu" id="navbar">
					<li><a href="{{route('frontend.home')}}">Home</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">
								About <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<a href="{{ route('frontend.about') }}">About Our Club</a>
								<a href="{{ route('frontend.president') }}">Former President</a>
								<a href="{{route('frontend.meeting')}}">Meeting Information</a>
								<a href="{{route('frontend.committee')}}">Committee</a>
								<a href="{{route('frontend.history')}}">Brief Club History</a>
								<a href="{{route('frontend.gallery')}}">Gallery</a>
								<a href="{{route('frontend.memorandum')}}">Memorandum</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">
								Members <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								
								<a href="{{route('frontend.boardmembers')}}">Board Members</a>
								<a href="{{route('frontend.charter')}}">Charter Members</a>
								<a href="{{route('frontend.founder')}}">Founder Members</a>
								<a href="{{route('frontend.phf')}}">PHF & Major Donor Members</a>
								<a href="{{route('frontend.members')}}">Our Members</a>
								
							</div>
						</div>
					</li>

					<li><a href="{{route('frontend.cause')}}">Cause</a></li>
					<li><a href="{{route('frontend.campaign')}}">Projects</a></li>
					<li>
						<a href="{{ route('frontend.funding')}}">Fund Raising</a>
					</li>

					<li>
						<div class="dropdown">
							<button class="dropbtn">
								News <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<a href="{{route('frontend.events')}}">Events</a>
								<a href="{{route('frontend.notice')}}">Notice</a>
								<a href="{{route('frontend.news')}}">News</a>
								<a href="{{route('frontend.bulletin')}}">Bulletins</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">
								Get Involved <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<a href="{{route('frontend.join')}}">Join</a>
								<a href="{{route('frontend.rotaract')}}">Rotaract Club</a>
								<a href="{{route('frontend.interact')}}">Interacts Club</a>
								<a href="{{route('frontend.rcc')}}">RCC</a>
								<a href="{{route('frontend.opportunity')}}">Opportunity</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>