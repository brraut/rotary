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
					<a href="{{ route($_base_route.'.create') }}" class="btn btn-primary btn-sm pull-right">Add {{ $_panel }}</a>
				</div>	
                <thead>
                <tr>
                  <th>Cateogory</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th style="width: 50px;">Action</th>                  
                </tr>
                </thead>
                <tbody>
                 @foreach ($data['news'] as $post)
                   <tr>
                    <td>{{ $post->ncategory->title }}</td>
                    <td>{{ $post->title }}</td>
                     <td>
                      <div class="text-center">
                        @if (isset($post->featured))
                          <img src="{{ asset('uploads/'.$_folder.'/'.$post->featured) }}" alt="" class="img-responsive" height="100px" width="150px" style="height: 100px;width: 150px;">
                          @else
                          N/A
                        @endif
                        
                      </div>                        
                    </td>
                    
                    <td width="22%">
                      <a href="{{ route($_base_route.'.delete',$post->id) }}" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i> Delete</a>
                      <a href="{{ route($_base_route.'.show',$post->id) }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-eye"></i> View</a>

                      <a href="{{ route($_base_route.'.edit',$post->id) }}" class="btn btn-warning btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
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