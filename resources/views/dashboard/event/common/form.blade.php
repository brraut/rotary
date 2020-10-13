<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Event/Activity Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Event Title']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationDetails">Description</label>
        {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Description']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>

      </div>

       @if (!isset($data['event']))
      <div class="form-group">
        <label for="exampleInputFile">Browse Event Image</label>
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
              <img src="{{ asset('uploads/'.$_folder.'/'.$data['event']->featured) }}" alt="" class="img-responsive" height="100px" width="150px"
              style="height: 100px;width: 150px;">
          </div>
        </div>
      </div>
      @endif

      <div class="form-group">
            <label for="exampleInputFile">When does the event start?</label>

            @if (isset($data['event']))
              
            <input type="date" name="start_date"  value="{{ isset($data['event']->start_date)? $data['event']->start_date->format('Y-m-d'):null }}" >
            @else
            <input type="date" name="start_date"  >
            @endif

        
      </div>


</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>