@extends('dashboard.master')

@section('title')
	View {{ $data['member']->name }} Profile
@endsection




@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h4 class="text-info">{{ $data['member']->name }}</h4> 
                
                <div class="text-center">
                  @if ($data['member']->featured)
                     <img src="{{ asset('uploads/'.$_folder.'/'.$data['member']->featured) }}" alt="" class="img-fluid" style="height: 300px;
                  width: 50%;">
                  @endif
                 
                </div>
                <hr>
                <h4>Details about {{ $data['member']->name }}:</h4>
                @if ($data['member']->description)
                  {{-- expr --}}
                <p class="text-primary"> {!! $data['member']->description !!} </p>
                @else
                N/A
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

