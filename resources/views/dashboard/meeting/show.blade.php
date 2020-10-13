@extends('dashboard.master')

@section('title')
	View {{ $data['meeting']->name }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['meeting']->name }}</h4> 
                <small>Official Name</small>
               
                <hr>
                <h5>Language used:</h5>
                <div class="text-primary"> {{ $data['meeting']->language}} </div>
                <hr>
                <h5>Weekly Meeting:</h5>
                <div class="text-primary"> {{$data['meeting']->weekly_meeting}} </div>
                <hr>
                <h5>Meeting Notice:</h5>
                <div class="text-primary"> {{$data['meeting']->meeting_notice}} </div>
                <hr>
                <h5>Attendent:</h5>
                <div class="text-primary"> {{$data['meeting']->attendent}} </div>
                <hr>
                <h5>Venue:</h5>
                <div class="text-primary"> {{$data['meeting']->venue}} </div>
                <hr>
                <h5>Google Map:</h5>
                <div class="text-primary"> {{$data['meeting']->google_map}} </div>
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['meeting']->description !!} </p>
               
             
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

