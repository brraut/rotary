<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Image Title']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationDetails">Caption</label>
        {!! Form::textarea('caption',null,['class' => 'form-control','placeholder'=> 'Enter Caption','rows'=>3]) !!}
        <small class="text-danger">{{ $errors->first('caption') }}</small>

      </div>

      @if (!isset($data['slider']))
      <div class="form-group">
        <label for="exampleInputFile">Browse Banner Image</label>
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
              <img src="{{ asset('uploads/'.$_folder.'/'.$data['slider']->featured) }}" alt="" class="img-responsive" height="100px" width="150px"
              style="height: 100px;width: 150px;">
          </div>
        </div>
      </div>
      @endif
     
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>