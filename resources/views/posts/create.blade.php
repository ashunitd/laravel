@extends('welcome')


@section('content')

<form class="form-horizontal" method="post" action="/post/store">
{{csrf_field()}}
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputTitle" placeholder="Title" type="text" name="title">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textBody" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textBody" name="body"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
   
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    @if(count($errors))
    <div class="form-group">
      <div class="alert alert-danger">
        
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

      </ul>

      </div>


    </div>

    @endif

  </fieldset>
</form>

@endsection