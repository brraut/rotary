<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Join Procedure Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter procedure title']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationDetails">Join Procedure Description</label>
        {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Procedure']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>

      </div>
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>