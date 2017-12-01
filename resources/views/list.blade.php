@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
              <h2>Languages</h2>
              <table class="table table-striped">
                  
                 @foreach($langs as $lang)
                        <tr>
                            <td><a href="/lang/{{$lang->id}}">{{ $lang->name }}</a></td>
                            <td>{{ $lang->started }}</td>
                        </tr>
                @endforeach

              </table>

              <hr>
              <h2>Tasks</h2>
               <table class="table table-striped">
                  
                 @foreach($tasks as $task)
                        <tr>
                            <td><a href="/task/{{$task->id}}">{{ $task->name }}</a></td>
                        </tr>
                @endforeach

              </table>
        </div>
    </div>
</div>
@endsection
