<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Link Title','required']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      <div class="form-group">
        <label for="destinationName">Link URL</label>
        {!! Form::url('link',null,['class' => 'form-control','placeholder'=> 'Eg: https://www.your-link-domain.com','required', 'pattern'=>"https?://.*"]) !!}
        <small class="text-danger">{{ $errors->first('link') }}</small>
      </div>

     
     

</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>