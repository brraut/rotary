@extends('dashboard.master')

@section('title')
	View {{ $data['news']->title }}
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info"> <b>{{ $data['news']->ncategory->title }}:</b> {{ $data['news']->title }} </h4> 
                <hr>
                <div class="text-center">
                  @if ($data['news']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['news']->featured) }}" alt="" class="img-fluid" style="height: 300px;
                  width: 50%;">
                  @endif
                 
                </div>
                <hr>
                <h4>Details about {{ $data['news']->title }}:</h4>
                @if ($data['news']->description)
                  {{-- expr --}}
                <p class="text-primary"> {!! $data['news']->description !!} </p>
                @else
                N/A
                @endif

                @if ($data['news']->file)
                  <h5>File:</h5><a href="{{ route($_base_route.'.download',$data['news']->id) }}"><i class="fa fa-cloud-download"></i>{{ $data['news']->file }}</a>
                  
                @endif

             
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

