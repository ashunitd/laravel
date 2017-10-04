@extends('welcome')


@section('content')
<div class="title"><h1>

                    
                    <li>{{ $task->body }}</li>
                    <p style="font-size: 20px;">{{ $task->created_at}}</p>

                    

  </h1></div>

  <br>
  <br>
  <hr>
  <div class="comments">
  <ul class="list-group">
  	@foreach($task->comments as $comment)
  	<li class="list-group-item">
  	<strong >{{$comment->created_at->diffForHumans()}}</strong>
  	<article>
  		{{$comment->body}}
  	</article>
  	</li>
  	@endforeach
  	</ul>
  </div>

  <br>
  <br>
  <hr>
  <div class="card">
  	<div class="card-block">
  		<form method="POST" action="/post/{{$task->id}}/comments">
  		{{csrf_field()}}
  			<div claass="form-group">
  				<textarea class="form-control" name="body"></textarea>

  			</div>
  			<div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
    </div>
  		</form>
  	</div>


  </div>
 @endsection
