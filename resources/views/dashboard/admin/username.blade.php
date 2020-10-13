@extends('dashboard.master')

@section('title')
  Change Username
@endsection

@section('content')
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Current Username :{{ $loggedInUser->name }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              {!! Form::open(['url'=>route($_base_route.'.reset-username'),'enctype'=>'multipart/form-data']) !!}

                  <div class="box-body">
                    
                     <div class="form-group">

                        <label for="username">New Username</label>
                        {!! Form::text('username',null,['class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('username') }}</span>
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