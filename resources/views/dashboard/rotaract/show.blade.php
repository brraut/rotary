@extends('dashboard.master')

@section('title')
	View {{ $data['rotaract']->title }} for Sister Club Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['rotaract']->title }}</h4> 
                <small>Section for Sister Club</small>
               
                <hr>
                <h4 class="text-info">{{ $data['rotaract']->facebook_url }}</h4> 
                <small>Facebook Url</small>
               
                <hr>
                <h4 class="text-info">{{ $data['rotaract']->website_url }}</h4> 
                <small>Website Url</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['rotaract']->description !!} </p>
                <hr>
                <h4>Rotaract Image</h4>
                <div class="text-center">
                  @if ($data['rotaract']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['rotaract']->featured) }}" alt="" class="img-fluid" style="height: 300px;
                  width: 50%;">
                  @endif
                 
                </div>
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

       
      <!-- /.row -->
    </section>
@endsection

