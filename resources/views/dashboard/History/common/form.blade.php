<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Title For History Section</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Heading']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationDetails">Description for History Section</label>
        {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Caption']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>

      </div>
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>