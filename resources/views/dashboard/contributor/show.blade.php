@extends('dashboard.master')

@section('title')
	View {{ $data['contributor']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['contributor']->title }}</h4> 
                <small>Section for About Us</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['contributor']->description !!} </p>
                <hr>
                <h4>About Image</h4>
                <div class="text-center">
                  @if ($data['contributor']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['contributor']->featured) }}" alt="" class="img-fluid" style="height: 300px;
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

