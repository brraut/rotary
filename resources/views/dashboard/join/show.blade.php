@extends('dashboard.master')

@section('title')
	View {{ $data['join']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['join']->title }}</h4> 
                <small>Title of Procedure</small>
               
                <hr>
                <h4>Description of Procedure:</h4>
                <p class="text-primary"> {!! $data['join']->description !!} </p>
               
               
             
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

