@extends('dashboard.master')

@section('title')
	View {{ $data['interact']->title }} for Sister Club Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['interact']->title }}</h4> 
                <small>Section for Sister Club</small>
               
                <hr>
                <h4 class="text-info">{{ $data['interact']->facebook_url }}</h4> 
                <small>Facebook Url</small>
               
                <hr>
                <h4 class="text-info">{{ $data['interact']->website_url }}</h4> 
                <small>Website Url</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['interact']->description !!} </p>
                <hr>
                <h4>Interact Image</h4>
                <div class="text-center">
                  @if ($data['interact']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['interact']->featured) }}" alt="" class="img-fluid" style="height: 300px;
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

