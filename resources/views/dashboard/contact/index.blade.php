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
              
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th style="width: 50px;">Action</th>                  
                </tr>
                </thead>
                <tbody>
                 @foreach ($data['contacts'] as $contact)
                   <tr>
                    <td>{{ $contact->fullname }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->body }}</td>
                    <td width="25%">
                      <a href="{{ route($_base_route.'.delete',$contact->id) }}" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i> Delete</a>
                      <a href="{{ route($_base_route.'.show',$contact->id) }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-eye"></i> View</a>
                      

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