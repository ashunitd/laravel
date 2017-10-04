@extends('welcome')

@section('content')
<form class="form-horizontal" method="POST" action="/login">
{{csrf_field()}}
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">
       
      </div>
    </div>
    
  
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
@endsection