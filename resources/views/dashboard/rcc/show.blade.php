@extends('dashboard.master')

@section('title')
	View {{ $data['rcc']->title }} for Sister Club Section
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['rcc']->title }}</h4> 
                <small>Section for Sister Club</small>
               
                <hr>
                <h4>Detailed Information:</h4>
                <p class="text-primary"> {!! $data['rcc']->description !!} </p>
                <hr>
                <h4>RCC Image</h4>
                <div class="text-center">
                  @if ($data['rcc']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['rcc']->featured) }}" alt="" class="img-fluid" style="height: 300px;
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

