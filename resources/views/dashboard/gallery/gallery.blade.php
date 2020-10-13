@extends('dashboard.master')

@section('title')
	Destination
@endsection

@section('content')

   <section class="content">
      <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-12">
          <a class="btn btn-warning btn-sm" href="{{ route($_base_route.'.gallery.create',$data['gallery']->id)}}">Add More Images?</a>
        </div>
      </div>
      
      <div class="row">

        @if ($data['gallery']->images->count() >0)
          @foreach ($data['gallery']->images as $image)
           <div class="col-4">
              <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-header">
                  {{-- <h1 class="card-title">Gallery</h1> --}}
                </div>
                <div class="card-body">
                  <img src="{{ asset('uploads/'.$_folder.'/'.$image->featured) }}" alt="" class="img-fluid" style="height: 200px; width: 100%;">
                </div>

                <div class="card-footer">
                  <a href="{{ route($_base_route.'.gallery.delete',$image->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
              There are no images in gallery for {{ $data['gallery']->name }} .
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

