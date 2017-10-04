@extends('welcome')

@section('content')
<form class="form-horizontal" method="POST" action="/register">
{{csrf_field()}}
  <fieldset>
    <legend>Legend</legend>

    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputName" placeholder="Name" type="text" name="name">
      </div>
    </div>

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
      <label for="inputPasswordConfirm" class="col-lg-2 control-label">Confirm Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="password_confirmation" placeholder="Password" type="password" name="password_confirmation">
       
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