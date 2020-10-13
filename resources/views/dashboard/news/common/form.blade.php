<div class="card-body">

    <div class="row">

      {!! Form::hidden('user_id',$loggedInUser->id) !!}

      <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter News Title']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>

      </div>

      <div class="col-sm-12">
          @if (!isset($data['news']))
            <div class="form-group">
              <label for="exampleInputFile">Add Featured Image</label>
              {!! Form::file('form_image',['class' => 'form-control']) !!}    
              <small class="text-danger">{{ $errors->first('form_image') }}</small>

            </div>
            @else
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="exampleInputFile">Change Featured Image</label>
                  {!! Form::file('form_image',['class' => 'form-control']) !!}       
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group pull-right">
                  <label for="exampleInputFile">Current Image</label><br>
                    <img src="{{ asset('uploads/'.$_folder.'/'.$data['news']->featured) }}" alt="" class="img-responsive" height="100px" width="150px"
                    style="height: 100px;width: 150px;">
                </div>
              </div>
            </div>
       @endif
        
      </div>
     

      <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Description</label>
         {!! Form::textarea('description',null,['class' => 'form-control tiny','placeholder'=> 'Enter Description']) !!}
         <small class="text-danger">{{ $errors->first('description') }}</small>
      </div>
      </div>

      
    </div>

        @if (!isset($data['news']))
            <div class="form-group">
              <label for="exampleInputFile">Upload a document(pdf,or doc)</label>
              {!! Form::file('file_upload',['class' => 'form-control']) !!}    
              <small class="text-danger">{{ $errors->first('file_upload') }}</small>

            </div>
            @else
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="exampleInputFile">Change the document(pdf, or doc)</label>
                  {!! Form::file('file_upload',['class' => 'form-control']) !!}       
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group pull-right">
                  <label for="exampleInputFile">Current File</label><br>
                  <a href="#"><i class="fa fa-cloud-download"></i>{{ $data['news']->file }}</a>
               </div>
              </div>
            </div>
       @endif

      

      <div class="row" style="margin-top: 20px;">
       <div class="col-sm-12">
        <div class="form-group">
        <label for="destinationName">Select Category</label>
          {!! Form::select('ncategory_id',$data['categories']->pluck('title','id')->toArray(),null,['class' => 'form-control','placeholder' => 'Select The Category']) !!}
          <small class="text-danger">{{ $errors->first('ncategory_id') }}</small>
        </div>
      </div>
      </div>

      


</div>
               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>