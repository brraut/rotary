@extends('dashboard.master')

@section('title')
	View {{ $data['funding']->title }} for About Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h5 class="text-info">{{ $data['funding']->name }}</h5> 
                <small>Donar Name</small>
                <hr>
                <h5 class="text-info">{{ $data['funding']->email }}</h5> 
                <small>Donar Email</small>
                <hr>
                <h5 class="text-info">{{ $data['funding']->address }}</h5> 
                <small>Donar Address</small>
                <hr>
                <h5 class="text-info">{{ $data['funding_source']->type}}</h5> 
                <small>Donar Type</small>
                <hr> <h5 class="text-info">{{ $data['campaign']->title }}</h5> 
                <small>Funded Campaign</small>
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

