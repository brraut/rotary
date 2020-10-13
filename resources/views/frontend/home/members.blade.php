@extends('frontend.master')

@section('title')
     Rotary Members
@endsection



@section('content')


    <div class="member-container">
                <div class="member-banner">
                    <div class="img-container">
                        <img src="assets/images/members.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                {{
                    $data["memberdetail"]->title
                }}
                {!!
                    $data["memberdetail"]->description
                !!}
				<div class="about-page-title mt-4">
					Rotary Club Members
                </div>
                <div class="container">
                    <div class="row">
                    @foreach ($data['central_members'] as $member)
                        <div class="col-md-3 col-6">
                            <div class="member-wrapper">
                                <div class="profile-container">
                                    <img src="{{ asset('uploads/member/'.$member->featured) }}"  class="img-fluid" alt="">
                                </div>
                                <div class="name">
                                {{ $member->name }}
                                </div>
                                <div class="designation">
                                {{ $member->position }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                       


                    </div>
                </div>
				
			</div>
@endsection

