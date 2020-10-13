@extends('dashboard.master')

@section('title')
	{{ $_panel }}
@endsection

@section('css')
	 <link rel="stylesheet" href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.css') }}">
   <style>
     .excel-import{
      padding : 10px;
     }
   </style>
@endsection


@section('content')

   <section class="content">


      <div class="row">
<!-- 
        <div class="col-6 excel-import">
          {!! Form::open(['url'=>route($_base_route.'.import'),'enctype'=>'multipart/form-data']) !!}
          <label for="input_file">Upload An Excel file to add members</label>
                    {{-- <a href="{{ route($_base_route.'.import') }}" class="btn btn-primary btn-sm pull-right">Import From Excel</a> --}}
                     <input type="file" name="input_file" class="form-control" >
                       
                        <button type="submit" class="btn btn-info btn-sm" style="margin-top: 10px;">Upload</button>
                     <small>{{ $errors->first('input_file') }}</small>
                  {!! Form::close() !!}
        </div> -->


        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

               {!! Form::open(['url'=>route($_base_route.'.update-memberships'),'enctype'=>'multipart/form-data' , 'id'=>'update-memberships']) !!}

              <table id="example1" class="table table-bordered table-striped">
              	<div class="form">
                  <a href="{{ route($_base_route.'.create') }}" class="btn btn-primary btn-sm pull-right">Add {{ $_panel }}</a>


        				</div>	

                <thead>
                <tr>
                  <th>Member Id</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Email</th>
                  <th>Membership Type
                   {{-- <a href="" onclick="event.preventDefault(); document.getElementById('update-form').submit();" class="btn btn-info btn-sm">Update</a> --}}
                 {{-- <button class="btn btn-info btn-sm" type="submit">Update</button> --}}
                </th>
                  <th style="width: 50px;">Action</th>                  
                </tr>
                </thead>
                <tbody>



                 @foreach ($data['members'] as $member)
                   <tr>
                    <td><b>{{ $member->member_id }}</b></td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->position }}</td>
                    <td>{{ $member->address }}</td>
                    <td>

                                     
                        {!! Form::hidden('update_id[]',$member->id) !!}
                        @foreach ($data['mtypes'] as $index=>$type)
                        @if($index < 2)
                          <input type="checkbox" name="mtype_id[][{{ $member->id }}]" value="{{ $type->id }}" @foreach ($member->mtypes as $mtype )
                            @if ($mtype->id == $type->id)
                              checked
                            @endif
                          @endforeach> {{ $type->type }} <br>
                          @endif

                        @endforeach
                 
                    
                       {{--  @foreach ($member->mtypes as $type)
                          {{ $type->type }} @if (!$loop->last)
                           ,
                          @endif
                        @endforeach --}}
                    </td>
                    <td width="22%">
                      <a href="{{ route($_base_route.'.delete',$member->id) }}" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i> Delete</a>
                      <a href="{{ route($_base_route.'.show',$member->id) }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-eye"></i> View</a>

                      <a href="{{ route($_base_route.'.edit',$member->id) }}" class="btn btn-warning btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
                    </td>

                  </tr>
                 @endforeach
                
               
                
                </tbody>
                <tfoot>
                  <tr>
                    <th>Member Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Address</th>
                    <th>Membership Type
                     {{-- <a href="" onclick="event.preventDefault(); document.getElementById('update-form').submit();" class="btn btn-info btn-sm">Update</a> --}}
                   <button class="btn btn-info btn-sm" type="submit">Update</button>
                  </th>
                    <th style="width: 50px;">Action</th>                  
                  </tr>
              </tfoot>
                
                
              </table>

              {!! Form::close() !!}
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