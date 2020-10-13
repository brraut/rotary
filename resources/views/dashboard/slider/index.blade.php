@extends('dashboard.master')

@section('title')
	{{ $_panel }}
@endsection

@section('css')
	 <link rel="stylesheet" href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection


@section('content')

   <section class="content">


      <div class="row">

        <div class="col-12">
         

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              	<div class="form">
					<a href="{{ route($_base_route.'.create') }}" class="btn btn-primary btn-sm pull-right">Add A {{ $_panel }}</a>
				</div>	
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Caption</th>
                  <th style="width: 100px;">Banner</th>
                  <th style="width: 50px;">Action</th>                  
                </tr>
                </thead>
                <tbody>
                 @foreach ($data['sliders'] as $slider)
                   <tr>
                    <td>{{ $slider->title }}</td>
                    <td>{{ str_limit($slider->caption,100) }}</td>
                    <td>
                      <div class="text-center">
                        <img src="{{ asset('uploads/'.$_folder.'/'.$slider->featured) }}" alt="" class="img-responsive" height="100px" width="150px" style="height: 100px;width: 150px;">
                      </div>                        
                    </td>
                   
                    <td width="22%">
                      <a href="{{ route($_base_route.'.delete',$slider->id) }}" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i> Delete</a>
                      <a href="{{ route($_base_route.'.edit',$slider->id) }}" class="btn btn-warning btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
                    </td>

                  </tr>
                 @endforeach
                
               
                
                </tbody>
                
              </table>
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
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
@endsection