<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Official Name</label>
        {!! Form::text('name',null,['class' => 'form-control','placeholder'=> 'Enter official name']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Language Used</label>
        {!! Form::text('language',null,['class' => 'form-control','placeholder'=> 'Enter language will be used in meeting']) !!}
        <small class="text-danger">{{ $errors->first('language') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Weekly Meeting</label>
        {!! Form::text('weekly_meeting',null,['class' => 'form-control','placeholder'=> 'Enter Weekly meeting info']) !!}
        <small class="text-danger">{{ $errors->first('weekly_meeting') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName"> Meeting Notice</label>
        {!! Form::text('meeting_notice',null,['class' => 'form-control','placeholder'=> 'Enter Meeting Notice Info']) !!}
        <small class="text-danger">{{ $errors->first('meeting_notice') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Attendent</label>
        {!! Form::text('attendent',null,['class' => 'form-control','placeholder'=> 'Enter Attendent Info']) !!}
        <small class="text-danger">{{ $errors->first('attendent') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Venue</label>
        {!! Form::text('venue',null,['class' => 'form-control','placeholder'=> 'Enter Venue informations']) !!}
        <small class="text-danger">{{ $errors->first('venue') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Google Map</label>
        {!! Form::text('google_map',null,['class' => 'form-control','placeholder'=> 'Enter google map location of venue']) !!}
        <small class="text-danger">{{ $errors->first('google_map') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationDetails">Description</label>
        {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Caption']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>

      </div>
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>