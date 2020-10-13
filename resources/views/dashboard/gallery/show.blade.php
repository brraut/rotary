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
                <h4 class="text-center text-info">{{ $data['gallery']->title }}</h4>
                <hr>
                <h4>Gallery Album Image</h4>
                <div class="text-center">
                  @if ($data['gallery']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['gallery']->featured) }}" alt="" class="img-fluid" style="height: 300px;
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

       <div class="row">

        
        

        @if ($data['gallery']->images->count() >0)
          @foreach ($data['gallery']->images as $image)
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
              There are no images in gallery for {{ $data['gallery']->title }} .
              <hr>
              Would You Like To Add Some?? <br>
              <a href="{{ route($_base_route.'.gallery.create',$data['gallery']->id) }}" class="btn btn-info btn-sm">Add Images</a> 
            </div>
            </div>
          </div>
        @endif
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection

