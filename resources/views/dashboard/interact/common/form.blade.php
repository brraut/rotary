<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Title For Sister Club</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Heading']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Facebook Url For Sister Club</label>
        {!! Form::text('facebook_url',null,['class' => 'form-control','placeholder'=> 'Enter Facebook Url']) !!}
        <small class="text-danger">{{ $errors->first('facebook_url') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationName">Website Url For Sister Club</label>
        {!! Form::text('website_url',null,['class' => 'form-control','placeholder'=> 'Enter Website Url']) !!}
        <small class="text-danger">{{ $errors->first('website_url') }}</small>
      </div>
      <div class="form-group">
        <label for="destinationDetails">Description for Sister Club</label>
        {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Description']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>

      </div>
      @if (!isset($data['rotaract']))
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
              <img src="{{ asset('uploads/'.$_folder.'/'.$data['interact']->featured) }}" alt="" class="img-responsive" height="100px" width="150px"
              style="height: 100px;width: 150px;">
          </div>
        </div>
      </div>
      @endif

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>