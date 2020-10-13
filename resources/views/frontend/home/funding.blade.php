@extends('frontend.master')

@section('title')
Fund Raising
@endsection

@section('content')


<div class="sources-container">
				<div class="about-page-title">
					Fund Raising
				</div>
				<div class="subtitle">
					Individual and the Company who Financially supports the club
				</div>
				<div class="sources-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="sidebar">
									<h4 class="text-center">Campaigns</h4>
									<div class="sidebar-title">
										We are commited to Achieve:
									</div>
									<ul class="nav nav-tabs">
									<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#fundinghome"
												>Home</a
											>
										</li>
										@foreach($data['campaigns'] as $campaign)
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#funding{{$campaign->id}}"
												>{{$campaign->title}}</a
											>
										</li>
										@endforeach
										
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<div class="source-main">
									<div class="tab-content">
									<div class="tab-pane container active" id="fundinghome">
											
											<div class="project-item">
													<div class="project-title">
														Your Support Matters
													</div>
													<div class="row">
													<div class="col-md-6">
													<div class="img-container">
															<img
																src="{{ asset('uploads/campaign/'.$data['campaigns']->first()->featured) }}"
																class="img-fluid"
																alt=""
															/>
														</div>	
													</div>
													<div class="col-md-6">
														<div class="project-description">
														Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident totam repudiandae praesentium reprehenderit enim a, aperiam deleniti eius. Et libero incidunt praesentium laudantium vero reiciendis laboriosam quia enim harum quidem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident totam repudiandae praesentium reprehenderit enim a, aperiam deleniti eius. Et libero incidunt...
														</div>
													</div>
												</div>
																						
													<div class="donation mt-5">
														<div class="title">
															Your support could make a difference.
														</div>
														<div class="button-container">
															<a
																href="javascript:void(0)"
																data-toggle="collapse"
																data-target="#support"
																>Support <i class="fa fa-hand-holding-usd"></i
															></a>
														</div>
														<div id="support" class="collapse collapse-container">
															
															<div class="contact-title">
																To donate please contact:
															</div>
															<div class="email">
																Email: rotarydurbarmarg@gmail.com
															</div>
	
															<div class="phone">
																Phone: +977 - 01343635
															</div>
															<div class="thanks">
																Thank You! For Your Support
															</div>
														</div>
													</div>
												</div>
												
	
												
											</div>
									@foreach($data['campaigns'] as $campaign)
										<div class="tab-pane container" id="funding{{$campaign->id}}">
											
										<div class="project-item">
												<a href="{{route('frontend.campaign.single',$campaign->id)}}" class="project-title pb-2" style="display: block">
													{{$campaign->title}}
												</a>
												<div class="row">
													<div class="col-md-4">
														<div class="img-container">
															<img
																src="{{ asset('uploads/campaign/'.$campaign->featured) }}"
																class="img-fluid"
																alt=""
															/>
														</div>
													</div>
													<div class="col-md-8">
														<div class="project-description">
														{!! Str::words($campaign->description,50, '...')!!}
														</div>
													</div>
												</div>
												
												@foreach($data['sources'] as $source)
												<div class="table-name">
													{{$source->type}}
												</div>
											
												
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th>Donor ID</th>
															<th>Name</th>
															<th>Email</th>
															<th>Country</th>
														</tr>
													</thead>
													<tbody>
													@foreach($campaign->fundings as $funding)
												
												@if($source->id == $funding->funding_source_id)
														<tr>
															<td>{{$funding->id}}</td>
															<td>{{$funding->name}}</td>
															<td>{{$funding->email}}</td>
															<td>{{$funding->address}}</td>
														</tr>
														@endif
											@endforeach
													</tbody>
												</table>
												
											@endforeach
												<div class="donation">
													<div class="title">
														Your support could make a difference.
													</div>
													<div class="button-container">
														<a
															href="javascript:void(0)"
															data-toggle="collapse"
															data-target="#support"
															>Support <i class="fa fa-hand-holding-usd"></i
														></a>
													</div>
													<div id="support" class="collapse collapse-container">
														<div class="support-title">
															Project Name: {{$campaign->title}}
														</div>
														<div class="contact-title">
															To donate please contact:
														</div>
														<div class="email">
															Email: rotarydurbarmarg@gmail.com
														</div>

														<div class="phone">
															Phone: +977 - 01343635
														</div>
														<div class="thanks">
															Thank You! For Your Support
														</div>
													</div>
												</div>
											</div>
											

											
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection