 @extends('dashboard.master')

@section('title')
  Update {{ $_panel }}
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
                <h3 class="card-title">Add A {{ $_panel }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             {!! Form::model($data['contributor'],['url'=>route($_base_route.'.update',$data['contributor']->id),'enctype'=>'multipart/form-data']) !!}

                  @include($_view_path.'.common.form')
                  
              {!! Form::close() !!}
                
              
            </div>
          </div>
          <!--/.col (left) -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
        ],
        toolbar: "insertfile undo redo | fullscreen | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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
        }
    };

    tinymce.init(editor_config);
  </script>



@endsection