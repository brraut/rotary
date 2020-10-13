@extends('frontend.master')

@section('title')
     Rotary Members
@endsection



@section('content')

            <div class="member-container">
                <div class="member-banner">
                    <div class="img-container">
                        <img src="assets/images/board.jpg" class="img-fluid" alt="">
                    </div>
                </div>
				<div class="about-page-title mt-4">
					Board Members
                </div>
                <div class="container">
                    <div class="row">
                    @foreach ($data['lifetime_members'] as $member)
                        <div class="col-md-3 col-6">
                            <a href="{{route('frontend.member.single',$member->id)}}" class="member-wrapper">
                                <div class="profile-container">
                                @if ($member->featured)
                                                            
                                <img src="{{ asset('uploads/member/'.$member->featured) }}" alt="" class="img-fluid">
                                @else
                                <img src="{{ asset('frontend/images/default-user.png') }}" alt="" class="img-fluid">
                                @endif
                                 </div>
                                <div class="name">
                                {{ $member->name }}
                                </div>
                                <div class="designation">
                                {{ $member->position }}
                                </div>
                            </a>

                        </div>
                        @endforeach
                       


                    </div>
                </div>
				
			</div>
@endsection

