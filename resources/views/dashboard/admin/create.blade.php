 @extends('dashboard.master')

@section('title')
  Create Admin
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
                <h3 class="card-title">Update Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                {!! Form::open(['url'=>route('dashboard.admin.store'),'enctype'=>'multipart/form-data']) !!}
                <div class="card-body">

                  <div class="form-group ">
                            <label for="name" >{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group ">

                            <div class="col-md-6">
                              <div>
                                <label><input  type="radio" name="role[]" value='super-admin'>&nbsp; Super Admin Login?</label> <br>
                                <label><input  type="radio" name="role[]" value='admin'>&nbsp; Admin Login?</label> <br>
                                <label><input  type="radio" name="role[]" value='member' checked="true">&nbsp; Member Login?</label>

                              </div>
                            
                            </div>
                        </div>


                  <button class="btn btn-sm btn-info"> Submit</button>
                  
                 {!! Form::close() !!}

               </div>
              
                
              
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