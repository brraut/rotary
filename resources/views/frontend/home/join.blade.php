@extends('frontend.master')

@section('title')
About Rotary Durbarmarg
@endsection

@section('content')
<div class="join-container">
				<div class="about-page-title">
					Join Rotary
				</div>
				<div class="subtitle">
					Rotary is 1.2 million passionate individuals in 35,000+ clubs
					worldwide. We are both an international organization and a local
					community leader. Together we lead change in our own backyards and
					across the world.
				</div>
				<div class="part-wrapper">
					<div class="part-title">
						Be a Part of our Club
					</div>
				</div>
				<div class="container">
					<div class="member-section">
						<div class="title">
							Procedure of Membership
							
						</div>
						<div class="sub-title">
						We accept new members by invitation. To help you to know more about the Rotary, we give you information’s and ideas about our plan, activities, fellowship etc. so that you can ensure yourself about the right time and right Club to join. You can join our at least 3 (three) regular meeting’s to qualify for membership and we recognize you as member by awarding a Rotary Pin in a special function of the Club.
						</div>
						
						@foreach($data['joins'] as $join)
						<div class="procedure-item">
					
							<div class="procedure-title">
								{{$join->title}}
							</div>
							<div class="procedure-description">
								{!! $join->description !!}
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
            </div>
            @endsection