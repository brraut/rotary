@extends('dashboard.master')

@section('title')
	View {{ $data['memberdetail']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['memberdetail']->title }}</h4> 
                <small>Section for Members</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['memberdetail']->description !!} </p>
                <hr>
               
             
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

