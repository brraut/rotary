<div class="card-body">

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
        <label for="destinationName">Member Name</label>
        {!! Form::text('name',null,['class' => 'form-control','placeholder'=> 'Enter Name']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
      </div>

      </div>

      

      <div class="col-sm-6">
        <div class="form-group">
        <label for="destinationName">Email</label>
        {!! Form::text('address',null,['class' => 'form-control','placeholder'=> 'Enter Address']) !!}
        <small class="text-danger">{{ $errors->first('address') }}</small>
      </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
        <label for="destinationName">Position</label>
        {{-- {!! Form::text('position',null,['class' => 'form-control','placeholder'=> 'Eg: Chairman']) !!} --}}
        {!! Form::select('position', $data['positions'],
        null,['class' => 'form-control','placeholder'=> 'Select a Position']) !!}
        <small class="text-danger">{{ $errors->first('position') }}</small>
      </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
        <label for="destinationName">Member Id</label>
        {!! Form::number('member_id',null,['class' => 'form-control','placeholder'=> 'Enter Unique Member ID','min' => 1,'max' => 9999]) !!}
        <small class="text-danger">{{ $errors->first('member_id') }}</small>
      </div>
      </div>
    </div>

 @if (!isset($data['member']))
      <div class="form-group">
        <label for="exampleInputFile">Add User Image</label>
        {!! Form::file('form_image',['class' => 'form-control']) !!}    
        <small class="text-danger">{{ $errors->first('form_image') }}</small>

      </div>
      @else
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <label for="exampleInputFile">Change Banner Image</label>
            {!! Form::file('form_image',['class' => 'form-control']) !!}       
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group pull-right">
            <label for="exampleInputFile">Current Banner</label><br>
              <img src="{{ asset('uploads/'.$_folder.'/'.$data['member']->featured) }}" alt="" class="img-responsive" height="100px" width="150px"
              style="height: 100px;width: 150px;">
          </div>
        </div>
      </div>
      @endif

      <div class="row">
        <div class="col-sm-12">
        <button type="button" class="btn btn-primary btn-sm" id="member-description">Would You Like To Add A Descripion?</button> <br>
          <div class="form-group member-description">         
              <label for="exampleInputFile"></label><br>
              {!! Form::textarea('description',null,['class' => 'form-control','placeholder'=> 'Enter Description']) !!}
              <small class="text-danger">{{ $errors->first('description') }}</small>

     
           </div>
        </div>


      </div>

      <div class="row" style="margin-top: 20px;">
       <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Membership Type</label>
        <ul>
      
          @foreach ($data['mtypes'] as $index=>$mtype)
          @if($index < 2)
                    <li>
          {{ $mtype->type }}
          {!! Form::checkbox('mtype_id[]',  $mtype->id ,(isset($data['member']) and in_array($mtype->id, $data['member']->mtypes->pluck('id')->toArray())) ?true:null) !!}
          @endif
          @endforeach
         </li>
         
        
        </ul>
          <small class="text-danger">{{ $errors->first('mtype_id') }}</small>
        </div>

      </div>
      </div>
      <div class="row" style="margin-top: 20px;">
       <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Committee Member</label>
        <ul>
      
          @foreach ($data['mtypes'] as $index=>$mtype)
          @if($index >= 2)
                    <li>
          {{ $mtype->type }}
          {!! Form::checkbox('mtype_id[]',  $mtype->id ,(isset($data['member']) and in_array($mtype->id, $data['member']->mtypes->pluck('id')->toArray())) ?true:null) !!}
          @endif
          @endforeach
         </li>
         
        
        </ul>
          <small class="text-danger">{{ $errors->first('mtype_id') }}</small>
        </div>
        
      </div>
      </div>

      


</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>