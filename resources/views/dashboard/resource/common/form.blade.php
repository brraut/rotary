<div class="card-body">

      <div class="form-group">
        <label for="destinationName">Title</label>
        {!! Form::text('title',null,['class' => 'form-control','placeholder'=> 'Enter Resource Title']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
      </div>
 @if (!isset($data['resource']))
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
                  <a href="#"><i class="fa fa-cloud-download"></i>{{ $data['resource']->file }}</a>
               </div>
              </div>
            </div>
       @endif

       <div class="form-group">

        {!! Form::checkbox('isConfidential', 1) !!}

       {{--  @if (isset($data['resource']))
          
        {!! Form::checkbox('isConfidential', 1, $data['resource']->isConfidential? true : false) !!}
        @else
        {!! Form::checkbox('isConfidential', 1, false) !!}

        @endif --}}
        <label for="destinationDetails">Make This A Confidential Resource?</label>
    
      </div>

</div>

               

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>