 @extends('dashboard.master')

@section('title')
  Add {{ $_panel }}
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
                <h3 class="card-title">Add {{ $_panel }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                {!! Form::open(['url'=>route($_base_route.'.store'),'enctype'=>'multipart/form-data']) !!}

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
  
  <script>
    $(document).ready(function(){
      $('div.member-description').hide();
      $('button#member-description').click(function(){
      $('div.member-description').slideToggle('slow');
      });
    });
  </script>

  


@endsection