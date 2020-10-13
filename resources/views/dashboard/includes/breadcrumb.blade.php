<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
          @if (!request()->is('*gallery*'))
          {{ $_panel }} 
          @else
          Gallery 
            @if (isset($data['destination']))
             for {{ $data['destination']->name }}
            @endif
          @endif
            
           </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ $dashboard_url }}"><i class="fa fa-home"></i></a></li>
          
            @if (request()->is('*gallery*') and isset($data['destination']))
            <li class="breadcrumb-item"><a href="{{ route($_base_route)}}">{{ $_panel }}</a></li>
            
            <li class="breadcrumb-item"><a href="{{ route($_base_route.'.gallery',$data['destination']->id)}}">{{ $data['destination']->name }} Gallery</a></li>
            @else
            <li class="breadcrumb-item"><a href="{{ route($_base_route)}}">{{ $_panel }}</a></li>
            @endif
            
            @if (request()->is('*create*'))
            <li class="breadcrumb-item active">Create</li>
            @elseif(request()->is('*edit*'))
            <li class="breadcrumb-item active">Edit</li>
            @elseif(request()->is('*show*'))

            <li class="breadcrumb-item active">Show</li>
           
            
            @endif
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>