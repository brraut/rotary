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
                <h4>By:</h4><h4 class="text-info">{{ $data['contact']->fullname }} | {{ $data['contact']->email }}</h4> 
                
                <hr>
                <h4>Message:</h4>
                <p class="text-primary"> {!! $data['contact']->body !!} </p>


                <!-- {!! Form::open(['url'=>route($_base_route.'.reply',$data['contact']->id),'enctype'=>'multipart/form-data','method'=>'GET']) !!}
                  
                  <div class="form-group">
                    <label for="">Send a Reply??</label>
                    <textarea name="reply_message" id="" cols="20" rows="6" class="form-control tiny"></textarea>
                    <small class="text-danger">{{ $errors->first('reply_message') }}</small>
                  </div>
                  <button  type="submit"  class="btn btn-warning btn-sm pull-right"><i class="fa fa-paper-plane"></i> Reply</button>

                {!! Form::close() !!} -->

             
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

@section('js')

<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>

 var editor_config = {
      path_absolute : "/",
      selector : "textarea.tiny",
      plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",
            "fullscreen",
            "tabfocus",
            "nonbreaking"
        ],

        toolbar: "insertfile undo redo | fullscreen | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | nonbreaking",
        nonbreaking_force_tab :true,
        image_advtab: true,
        extended_valid_elements: "*[*]",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }



            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                
            });
        },

    };

    tinymce.init(editor_config);
  </script>



@endsection



