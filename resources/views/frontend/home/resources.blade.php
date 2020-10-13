@extends('frontend.master')

@section('title')
Resources
@endsection

@section('content')
<div class="single-page extra-page">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Downloads</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

     @if ($data['resources']->count() > 0)
        <div class="welcome-wrap">
            <div class="container">
                <h3>Resources To Download</h3>
                 <table class="table table-striped table-bordered table-hover">
                     <thead class="thead-dark">
                         <tr>
                            <th>S.No.</th>
                             <th>Date</th>
                             <th>Title</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($data['resources'] as $key => $resource)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                     <td>{{ $resource->created_at->format('M d, Y') }}</td>
                                     <td>{{ $resource->title }}</td>
                                     <td>
                                            <a href="{{ route('dashboard.resource.download',$resource->id) }}"> <i class="fa fa-download"> Download    </i></a> &nbsp &nbsp
                                            {{-- <a href="" download target="_blank"> <i class="fa fa-download"> View </i></a> --}}
                                    </td>
                                     
                                 </tr>
                            @endforeach
                        
                     </tbody>
                 </table>
            </div><!-- .container -->
        </div><!-- .home-page-icon-boxes -->
    @endif

    <!-- @if (auth()->check())
          @if ($data['confidential_resources']->count() > 0)
            <div class="welcome-wrap">
                <div class="container">
                    <h3>Confidential Resources For Members</h3>
                     <table class="table table-striped table-bordered table-hover">
                         <thead class="thead-dark">
                             <tr>
                                 <th>S.No.</th>
                                 <th>Date</th>
                                 <th>Title</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach ($data['confidential_resources'] as $key => $resource)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                         <td>{{ $resource->created_at->format('M d, Y') }}</td>
                                         <td>{{ $resource->title }}</td>
                                         <td>
                                                <a href="{{ route('dashboard.resource.download',$resource->id) }}"> <i class="fa fa-download"> Download    </i></a> &nbsp &nbsp
                                                {{-- <a href="" download target="_blank"> <i class="fa fa-download"> View </i></a> --}}
                                        </td>
                                         
                                     </tr>
                                @endforeach
                            
                         </tbody>
                     </table>
                </div>
            </div>
        @endif
    @endif -->

   

  

    
 
   

   



</div>

@endsection