@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                ADD TEST RESULTS
                <form class="form" method="post" action="/posttext" enctype='application/json'>
                     {{ csrf_field() }}
                    <select class="form-control" name="lang">
                        @foreach($langs as $lang)
                          <option value="{{$lang->id}}">{{$lang->name}}</option>
                        @endforeach
                    </select>
                    <input class="form-control" type="text" name="task" placeholder="task title">
                    <textarea class="form-control" name="result" placeholder="json response"></textarea>
                    <button class="form-control" type="submit">Add JSON</button>
                </form>

                <hr>
                ADD A LANGUAGE
                <form class="form" method="post" action="/postlang">
                     {{ csrf_field() }}
                    <input class="form-control" type="text" name="name" placeholder="language name">
                    <input class="form-control" type="text" name="created" placeholder="year created">
                    <button class="form-control" type="submit">Add Language</button>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
