@extends('dashboard.master')

@section('title')
	Change Password
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              {!! Form::open(['url'=>route($_base_route.'.reset-password'),'enctype'=>'multipart/form-data']) !!}

                  <div class="box-body">
                    
                     <div class="form-group">
                        <label for="old_password">Old Password</label>
                        {!! Form::password('old_password',['class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('old_password') }}</span>
                      </div>
                  
                      <div class="form-group">
                        <label for="new_password">New Password</label>
                        {!! Form::password('password',['class'=>'form-control']) !!}
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                      </div>

                      <div class="form-group">
                        <label for="confirmation">Confirm Password</label>
                        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                      </div>

                    
                    </div>
             
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  
               {!! Form::close() !!}
          </div>
          <!-- /.box -->

         
        </div>
       
      </div>
      <!-- /.row -->
    </section>
@endsection