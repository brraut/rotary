<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Donar Name</label>
        {!! Form::text('name',null,['class' => 'form-control','placeholder'=> 'Enter Name']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Donar Email</label>
        {!! Form::text('email',null,['class' => 'form-control','placeholder'=> 'Enter Email']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Donar Address</label>
        {!! Form::text('address',null,['class' => 'form-control','placeholder'=> 'Enter Address']) !!}
        <small class="text-danger">{{ $errors->first('address') }}</small>
      </div>

      <div class="row" style="margin-top: 20px;">
       <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Select Donar Type</label>
          {!! Form::select('funding_source_id',$data['categories']->pluck('type','id')->toArray(),null,['class' => 'form-control','placeholder' => 'Select The Category']) !!}
          <small class="text-danger">{{ $errors->first('funding_source_id') }}</small>
        </div>
      </div>
      </div>
      <div class="row" style="margin-top: 20px;">
       <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Select Funded Campaign</label>
          {!! Form::select('campaign_id',$data['campaigns']->pluck('title','id')->toArray(),null,['class' => 'form-control','placeholder' => 'Select The Campaign']) !!}
          <small class="text-danger">{{ $errors->first('campaign_id') }}</small>
        </div>
      </div>
      </div>
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>