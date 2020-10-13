<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Name</label>
        {!! Form::text('fullname',null,['class' => 'form-control','placeholder'=> 'Enter Heading']) !!}
        <small class="text-danger">{{ $errors->first('fullname') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationName">Email</label>
        {!! Form::text('email',null,['class' => 'form-control','placeholder'=> 'Enter Heading']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationDetails">Message</label>
        {!! Form::textarea('body',null,['class' => 'form-control','placeholder'=> 'Enter Caption']) !!}
        <small class="text-danger">{{ $errors->first('body') }}</small>

      </div>


</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>