@extends('frontend.master')

@section('title')
     Rotary Committee
@endsection



@section('content')


    <div class="member-container">
               
				<div class="about-page-title mt-4">
				    Committee Members
                </div>
                <div class="container">
                <h4 class="mt-5">Administration Committee Member</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                    @if(isset($data['administration-committee-director']->name))
                        <td>{{$data['administration-committee-director']->name}}</td>
                        <td>{{$data['administration-committee-director']->address}}</td>
                        <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['administration-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                    
               
                <h4 class="mt-5">Membership Committee Member</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['membership-committee-director']->name))
                            <td>{{$data['membership-committee-director']->name}}</td>
                            <td>{{$data['membership-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['membership-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>

              
                <h4 class="mt-5">Rotary Foundation Committee Member</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['rotary-foundation-committee-director']->name))
                            <td>{{$data['rotary-foundation-committee-director']->name}}</td>
                            <td>{{$data['rotary-foundation-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['rotary-foundation-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>

                <h4 class="mt-5">Service Project Committee Member</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['service-project-committee-director']->name))
                            <td>{{$data['service-project-committee-director']->name}}</td>
                            <td>{{$data['service-project-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['service-project-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                <!-- <h4 class="mt-5 ml-5">Youth Service Sub Committee Member</h4>
                <table class="table ml-5 table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['youth-service-sub-committee-director']->name))
                            <td>{{$data['youth-service-sub-committee-director']->name}}</td>
                            <td>{{$data['youth-service-sub-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['youth-service-sub-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table> -->
                <h4 class="mt-5 ml-5">Vocational Service Sub Committee Member</h4>
                <table class="table table-bordered ml-5">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['vocational-service-sub-committee-director']->name))
                            <td>{{$data['vocational-service-sub-committee-director']->name}}</td>
                            <td>{{$data['vocational-service-sub-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['vocational-service-sub-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>

                <h4 class="mt-5">Public Image Committee Member</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['public-image-committee-director']->name))
                            <td>{{$data['public-image-committee-director']->name}}</td>
                            <td>{{$data['public-image-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['public-image-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                <h4 class="mt-5 ml-5">Flagship Project Sub Committee Member</h4>
                <table class="table table-bordered ml-5">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        @if(isset($data['flagship-project-sub-committee-director']->name))
                            <td>{{$data['flagship-project-sub-committee-director']->name}}</td>
                            <td>{{$data['flagship-project-sub-committee-director']->address}}</td>
                            <td>Director</td>
                        @endif
                    </tr>
                    @foreach ($data['flagship-project-sub-committee-member'] as $member)
                    <tr>
                        <td> {{ $member->name }}</td>
                        <td>{{$member->address}}</td>
                        <td>Member</td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                </div>
			</div>
@endsection

