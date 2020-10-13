@extends('dashboard.master')

@section('title')
  Add Gallery for {{ $data['gallery']->title }}
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
  <meta title="csrf-token" content="{{ csrf_token() }}"> 


@endsection

@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Images for {{ $data['gallery']->title }} Gallery

                <a href="{{ route($_base_route.'.gallery',$data['gallery']->id) }}" class="btn btn-info btn-sm pull-right">Done Adding Images? View The Gallery</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                {!! Form::open(['url'=>route($_base_route.'.gallery.store',$data['gallery']->id),'enctype'=>'multipart/form-data','class'=>'dropzone','id'=>'imageUpload']) !!}
                  {!! Form::hidden('gallery_id',$data['gallery']->id) !!}

                  
                  
                {!! Form::close() !!}
              
                
              
            </div>
            <button type="submit" id="button" class="btn btn-primary">Submit </button>
          </div>
          <!--/.col (left) -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script type="text/javascript">
  Dropzone.options.imageUpload = {
    
    autoProcessQueue:false,
    required:true,
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    addRemoveLinks: true,
    maxFiles:8,
    parallelUploads : 100,
    maxFilesize:10,
    headers: { 'X-CSRF-TOKEN': $('meta[title="csrf-token"]').attr('content') },
    url:"{{ route('dashboard.gallery.gallery.store',$data['gallery']->id) }}",
    init: function(){
      myDropZone = this;
       $("#button").click(function (e) {
            e.preventDefault();
            myDropZone.processQueue();
             setTimeout(function() {
                  window.location.href = '{{route("$_base_route")}}';
                }, 10000);
           

        });
        $(myDropZone).on('sending', function(file, xhr, formData) {
            // Append all form inputs to the formData Dropzone will POST
            var data = $('#frmTarget').serializeArray();
            $.each(data, function(key, el) {
                formData.append(el.title, el.value);
            });
        });
    },
  };
  Dropzone.options.imageUpload.init();
  

</script>
@endsection