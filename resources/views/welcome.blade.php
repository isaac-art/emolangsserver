@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>WELCOME</h2>
              
              <table class="table table-striped">
                  
                 @foreach($langs as $lang)
                        <tr>
                            <td><a href="/lang/{{$lang->id}}">{{ $lang->name }}</a></td>
                            <td>{{ $lang->started }}</td>
                        </tr>
                @endforeach

              </table>

        </div>
    </div>
</div>
@endsection
