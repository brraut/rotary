@extends('dashboard.master')

@section('title')
	View {{ $data['memorandum']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['memorandum']->title }}</h4> 
                <small>Section for About Us</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['memorandum']->description !!} </p>
                
               
             
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

