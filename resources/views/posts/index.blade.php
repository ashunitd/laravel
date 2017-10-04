@extends('welcome')

@section('hello')

<h1>To Write Posts please Login</h1>

@endsection


@section('content')

 <div class="container">
            <div class="content">
                <div class="title"><h1>
                    @foreach($tasks as $task)
                    <a style="text-decoration: none" href="/tasks/{{$task->id}}"><li>{{ $task->title }}</li></a>
                    <p style="font-size: 20px;">{{ $task->created_at}}</p>
                    @endforeach

                </h1></div>

            </div>
        </div>

@endsection

@section('footer')
<script type="text/javascript" src="/app/app.js"></script>
@endsection