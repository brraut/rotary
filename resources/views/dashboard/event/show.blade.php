@extends('dashboard.master')

@section('title')
	View {{ $data['event']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['event']->title }}</h4> 
                <div class="text-center">
                  <img src="{{ asset('uploads/'.$_folder.'/'.$data['event']->featured) }}" alt="" class="img-fluid" style="height: 300px;
                  width: 50%;">
                </div>
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['event']->description !!} </p>

             
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

