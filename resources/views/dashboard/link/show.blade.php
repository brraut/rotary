@extends('dashboard.master')

@section('title')
	View {{ $_panel }}
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-center text-info">{{ $data['destination']->name }}</h4>
                <hr>
                <div class="text-center">
                  <img src="{{ asset('uploads/'.$_folder.'/'.$data['destination']->featured) }}" alt="" class="img-fluid" style="height: 300px;
                  width: 50%;">
                </div>
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary">{{ $data['destination']->details }}</p>

             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

       <div class="row">

        <div class="col-sm-12">
          <div class="text-center">
            <h1>{{ $data['destination']->name }}  Gallery</h1>
          </div>  
        </div>
        

        @if ($data['destination']->dgalleries->count() >0)
          @foreach ($data['destination']->dgalleries as $image)
           <div class="col-4">
              <div class="card card-primary">
                <!-- /.card-header -->
                
                <div class="card-body">
                  <img src="{{ asset('uploads/'.$_folder.'/'.$image->featured) }}" alt="" class="img-fluid" style="height: 200px; width: 100%;">
                </div>

               
                <!-- /.card-body -->
              </div>
          <!-- /.card -->
           </div>
          @endforeach
          @else
          <div class="col-12">
            <div class="card card-danger">
              
            <div class="card-header">
              There are no images in gallery for {{ $data['destination']->name }} .
              <hr>
              Would You Like To Add Some?? <br>
              <a href="{{ route($_base_route.'.gallery.create',$data['destination']->id) }}" class="btn btn-info btn-sm">Add Images</a> 
            </div>
            </div>
          </div>
        @endif
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection

