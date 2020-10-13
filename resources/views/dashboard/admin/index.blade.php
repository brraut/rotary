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
					<a href="{{ route($_base_route.'.create') }}" class="btn btn-primary btn-sm pull-right">Add An Admin</a>
				</div>	
                <thead>
                <tr>
                  <th>Name</th>
                  <th>email</th>
                  <th style="width: 50px;">Action</th>                  
                </tr>
                </thead>
                <tbody>
                 @foreach ($data['users'] as $user)
                   <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td width="22%">

                      @if ($user->role !='super-admin')
                        {{-- expr --}}
                      <a href="{{ route($_base_route.'.delete',$user->id) }}" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i> Remove This @if($user->role == 'admin') Admin @elseif ($user->role == "member") Member @endif</a>
                      @endif
                      {{-- <a href="{{ route($_base_route.'.show',$about->id) }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-eye"></i> View</a> --}}

                      {{-- <a href="{{ route($_base_route.'.edit',$about->id) }}" class="btn btn-warning btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a> --}}
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