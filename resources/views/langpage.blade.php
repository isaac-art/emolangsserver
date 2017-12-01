@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
              <div class="panel-heading"> 
              {{ $lang->name }} - {{ $lang->started }} - {{ count($results) }} result
              </div>
            </div>
            <div class="panel" style="overflow: scroll;">
            <table class="table table-striped" >
            <thead>
                <th>Task</th>
                <th>word_count</th>
                <th>openness</th>
                <th>adventurousness</th>
                <th>artistic interests</th>
                <th>emotionality</th>
                <th>imagination</th>
                <th>intellect</th>
                <th>authority challenging</th>
                <th>conscientiousness</th>
                <th>achievement striving</th>
                <th>cautiousness</th>
                <th>dutifulness</th>
                <th>orderliness</th>
                <th>self discipline</th>
                <th>self efficacy</th>
                <th>extraversion</th>
                <th>activity level</th>
                <th>assertiveness</th>
                <th>cheerfulness</th>
                <th>excitement seeking</th>
                <th>outgoing</th>
                <th>gregariousness</th>
                <th>agreeableness</th>
                <th>altruism</th>
                <th>cooperation</th>
                <th>modesty</th>
                <th>uncompromising</th>
                <th>sympathy</th>
                <th>trust</th>
                <th>emotional range</th>
                <th>fiery</th>
                <th>prone to worry</th>
                <th>melancholy</th>
                <th>immoderation</th>
                <th>self consciousness</th>
                <th>susceptible to stress</th>
                <th>challange</th>
                <th>closeness</th>
                <th>curiosity</th>
                <th>excitement</th>
                <th>harmony</th>
                <th>ideal</th>
                <th>liberty</th>
                <th>love</th>
                <th>practicality</th>
                <th>self expression</th>
                <th>stability</th>
                <th>structure</th>
                <th>conservation</th>
                <th>openness to change</th>
                <th>hedonism</th>
                <th>self enhancement</th>
                <th>self transcendence</th>
            </thead>
                      
              @foreach($results as $result)
                <tr>
                  <td>{{ $result->task }}</td>
                  <td>{{ $result->word_count }}</td>
                  <td>{{ $result->openness }}</td>
                  <td>{{ $result->adventurousness }}</td>
                  <td>{{ $result->artistic_interests }}</td>
                  <td>{{ $result->emotionality }}</td>
                  <td>{{ $result->imagination }}</td>
                  <td>{{ $result->intellect }}</td>
                  <td>{{ $result->authority_challenging }}</td>
                  <td>{{ $result->conscientiousness }}</td>
                  <td>{{ $result->achivement_striving }}</td>
                  <td>{{ $result->cautiousness }}</td>
                  <td>{{ $result->dultifulness }}</td>
                  <td>{{ $result->orderliness }}</td>
                  <td>{{ $result->self_discipline }}</td>
                  <td>{{ $result->self_efficacy }}</td>
                  <td>{{ $result->extraversion }}</td>
                  <td>{{ $result->activity_level }}</td>
                  <td>{{ $result->assertiveness }}</td>
                  <td>{{ $result->cheefulness }}</td>
                  <td>{{ $result->excitement_seeking }}</td>
                  <td>{{ $result->outgoing }}</td>
                  <td>{{ $result->gregariousness }}</td>
                  <td>{{ $result->agreeableness }}</td>
                  <td>{{ $result->altruism }}</td>
                  <td>{{ $result->cooperation }}</td>
                  <td>{{ $result->modesty }}</td>
                  <td>{{ $result->uncompromising }}</td>
                  <td>{{ $result->sympathy }}</td>
                  <td>{{ $result->trust }}</td>
                  <td>{{ $result->emotional_range }}</td>
                  <td>{{ $result->fiery }}</td>
                  <td>{{ $result->prone_to_worry }}</td>
                  <td>{{ $result->melancholy }}</td>
                  <td>{{ $result->immoderation }}</td>
                  <td>{{ $result->self_consciousness }}</td>
                  <td>{{ $result->susceptilble_to_stess }}</td>
                  <td>{{ $result->challenge }}</td>
                  <td>{{ $result->closeness }}</td>
                  <td>{{ $result->curiosity }}</td>
                  <td>{{ $result->excitement }}</td>
                  <td>{{ $result->harmony }}</td>
                  <td>{{ $result->ideal }}</td>
                  <td>{{ $result->liberty }}</td>
                  <td>{{ $result->love }}</td>
                  <td>{{ $result->practicality }}</td>
                  <td>{{ $result->self_expression }}</td>
                  <td>{{ $result->stability }}</td>
                  <td>{{ $result->structure }}</td>
                  <td>{{ $result->conservation }}</td>
                  <td>{{ $result->openness_to_change }}</td>
                  <td>{{ $result->hedonism }}</td>
                  <td>{{ $result->self_enhancement }}</td>
                  <td>{{ $result->self_transcendence }}</td>



                </tr>
              @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
