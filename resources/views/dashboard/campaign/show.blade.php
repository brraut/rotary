@extends('dashboard.master')

@section('title')
	View {{ $data['campaign']->title }} for Cause Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['campaign']->title }}</h4> 
                <small>Section for Cause </small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['campaign']->description !!} </p>
                <hr>
                <h4>Cause Image</h4>
                <div class="text-center">
                  @if ($data['campaign']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['campaign']->featured) }}" alt="" class="img-fluid" style="height: 300px;
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

