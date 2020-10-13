 @extends('dashboard.master')

@section('title')
  Update Settings
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
                {!! Form::open(['url'=>route('dashboard.setting.update'),'enctype'=>'multipart/form-data']) !!}
                <div class="card-body">

                  <div class="form-group">
                    <label for="">Privacy Policy</label>
                    {!! Form::textarea('privacy_policy',$data['settings']->privacy_policy,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('privacy_policy') }}</small>
                  </div>

                  <div class="form-group">
                    <label for="">Footer Contact</label>
                    {!! Form::textarea('footer_contacts',$data['settings']->footer_contacts,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('footer_contacts') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">Footer About</label>
                    {!! Form::textarea('footer_about',$data['settings']->footer_about,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('footer_about') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">Phone Number</label>
                    {!! Form::text('phone',$data['settings']->phone,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">Email</label>
                    {!! Form::text('email',$data['settings']->email,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">Facebook URL</label>
                    {!! Form::text('fb_url',$data['settings']->fb_url,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('fb_url') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">Twitter URL</label>
                    {!! Form::text('twitter_url',$data['settings']->twitter_url,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('twitter_url') }}</small>
                    
                  </div>

                  <div class="form-group">
                    <label for="">LinkedIn URL</label>
                    {!! Form::text('linkedIn_url',$data['settings']->linkedIn_url,['class'=>'form-control tiny']) !!}
                    <small class="text-danger">{{ $errors->first('linkedIn_url') }}</small>
                    
                  </div>

                  @if (!isset($data['settings']))
                  <div class="form-group">
                    <label for="exampleInputFile">Add Logo</label>
                    {!! Form::file('form_image',['class' => 'form-control']) !!}    
                    <small class="text-danger">{{ $errors->first('form_image') }}</small>

                  </div>
                  @else
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label for="exampleInputFile">Change Logo</label>
                        {!! Form::file('form_image',['class' => 'form-control']) !!}       
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group pull-right">
                        <label for="exampleInputFile">Current Banner</label><br>
                          <img src="{{ asset('uploads/'.$_folder.'/'.$data['settings']->featured) }}" alt="" class="img-responsive" >
                      </div>
                    </div>
                  </div>
                  @endif

                  <!-- @if (!isset($data['settings']->members_pdf))
                  <div class="form-group">
                    <label for="exampleInputFile">Add Members PDF</label>
                    {!! Form::file('file_upload',['class' => 'form-control']) !!}    
                    <small class="text-danger">{{ $errors->first('form_image') }}</small>

                  </div>
                  @else
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label for="exampleInputFile">Change Members PDF</label>
                        {!! Form::file('file_upload',['class' => 'form-control']) !!}       
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group pull-right">
                        <label for="exampleInputFile">Current File</label><br>
                        <a href="">{{ $data['settings']->members_pdf }}</a>
                          {{-- <img src="{{ asset('uploads/'.$_folder.'/'.$data['settings']->members_pdf) }}" alt="" class="img-responsive" > --}}
                      </div>
                    </div>
                  </div>
                  @endif -->


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