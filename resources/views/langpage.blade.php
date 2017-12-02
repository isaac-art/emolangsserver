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
                <th>Task </th>
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
                    <th>automobile_ownership_cost </th>
                  <th>automobile_safety</th>
                  <th>clothes_quality </th>
                  <th>clothes_style </th>
                  <th>clothes_comfort </th>
                  <th>influence_brand_nae </th>
                  <th>influence_utility</th>
                  <th>influence_online_ads</th>
                  <th>influence_social_media</th>
                  <th>influence_familymembers </th>
                  <th>spur_of_moment </th>
                  <th>credit_card_payment </th>
                  <th>eat_out</th>
                  <th>gym_membership </th>
                  <th>outdoor </th>
                  <th>concerned_environment</th>
                  <th>start_business</th>
                  <th>movie_romance</th>
                  <th>movie_adventure </th>
                  <th>movie_horror </th>
                  <th>movie_musical</th>
                  <th>movie_historical</th>
                  <th>movie_science_fiction </th>
                  <th>movie_war </th>
                  <th>movie_drama</th>
                  <th>movie_action</th>
                  <th>movie_documentary</th>
                  <th>music_rap </th>
                  <th>music_country</th>
                  <th>music_r_b </th>
                  <th>music_hip_hop</th>
                  <th>music_live_event </th>
                  <th>music_playing</th>
                  <th>music_latin </th>
                  <th>music_rock </th>
                  <th>music_classical </th>
                  <th>read_frequency </th>
                  <th>books_entertainment_magazines </th>
                  <th>books_non_fiction </th>
                  <th>books_financial_investing</th>
                  <th>books_autobiographies</th>
                  <th>volunteer </th>

            </thead>
              <tr class="success">
                <td>AVERAGE</td>
                  <td>{{ $average["word_count"] }}</td>
                  <td>{{ $average["openness"] }}</td>
                  <td>{{ $average["adventurouseness"] }}</td>
                  <td>{{ $average["artistic_interests"] }}</td>
                  <td>{{ $average["emotionality"] }}</td>
                  <td>{{ $average["imagination"] }}</td>
                  <td>{{ $average["intellect"] }}</td>
                  <td>{{ $average["authority_challenging"] }}</td>
                  <td>{{ $average["conscientiousness"] }}</td>
                  <td>{{ $average["achivement_striving"] }}</td>
                  <td>{{ $average["cautiousness"] }}</td>
                  <td>{{ $average["dutifulness"] }}</td>
                  <td>{{ $average["orderliness"] }}</td>
                  <td>{{ $average["self_discipline"] }}</td>
                  <td>{{ $average["self_efficacy"] }}</td>
                  <td>{{ $average["extraversion"] }}</td>
                  <td>{{ $average["activity_level"] }}</td>
                  <td>{{ $average["assertiveness"] }}</td>
                  <td>{{ $average["cheerfulness"] }}</td>
                  <td>{{ $average["excitement_seeking"] }}</td>
                  <td>{{ $average["outgoing"] }}</td>
                  <td>{{ $average["gregariousness"] }}</td>
                  <td>{{ $average["agreeableness"] }}</td>
                  <td>{{ $average["altruism"] }}</td>
                  <td>{{ $average["cooperation"] }}</td>
                  <td>{{ $average["modesty"] }}</td>
                  <td>{{ $average["uncompromising"] }}</td>
                  <td>{{ $average["sympathy"] }}</td>
                  <td>{{ $average["trust"] }}</td>
                  <td>{{ $average["emotional_range"] }}</td>
                  <td>{{ $average["fiery"] }}</td>
                  <td>{{ $average["prone_to_worry"] }}</td>
                  <td>{{ $average["melancholy"] }}</td>
                  <td>{{ $average["immoderation"] }}</td>
                  <td>{{ $average["self_consciousness"] }}</td>
                  <td>{{ $average["susceptilble_to_stess"] }}</td>
                  <td>{{ $average["challenge"] }}</td>
                  <td>{{ $average["closeness"] }}</td>
                  <td>{{ $average["curiosity"] }}</td>
                  <td>{{ $average["excitement"] }}</td>
                  <td>{{ $average["harmony"] }}</td>
                  <td>{{ $average["ideal"] }}</td>
                  <td>{{ $average["liberty"] }}</td>
                  <td>{{ $average["love"] }}</td>
                  <td>{{ $average["practicality"] }}</td>
                  <td>{{ $average["self_expression"] }}</td>
                  <td>{{ $average["stability"] }}</td>
                  <td>{{ $average["structure"] }}</td>
                  <td>{{ $average["conservation"] }}</td>
                  <td>{{ $average["openness_to_change"] }}</td>
                  <td>{{ $average["hedonism"] }}</td>
                  <td>{{ $average["self_enhancement"] }}</td>
                  <td>{{ $average["self_transcendence"] }}</td>
                  <td>{{$average["consumption_preferences_automobile_ownership_cost"] }}</td>
                  <td>{{$average["consumption_preferences_automobile_safety"]}} </td>
                  <td>{{$average["consumption_preferences_clothes_quality"] }}</td>
                  <td>{{$average["consumption_preferences_clothes_style"] }}</td>
                  <td>{{$average["consumption_preferences_clothes_comfort"] }}</td>
                  <td>{{$average["consumption_preferences_influence_brand_name"] }}</td>
                  <td>{{$average["consumption_preferences_influence_utility"]}}</td>
                  <td>{{$average["consumption_preferences_influence_online_ads"]}}</td>
                  <td>{{$average["consumption_preferences_influence_social_media"]}}</td>
                  <td>{{$average["consumption_preferences_influence_family_members"] }}</td>
                  <td>{{$average["consumption_preferences_spur_of_moment"] }}</td>
                  <td>{{$average["consumption_preferences_credit_card_payment"] }}</td>
                  <td>{{$average["consumption_preferences_eat_out"]}}</td>
                  <td>{{$average["consumption_preferences_gym_membership"] }}</td>
                  <td>{{$average["consumption_preferences_outdoor"] }}</td>
                  <td>{{$average["consumption_preferences_concerned_environment"]}}</td>
                  <td>{{$average["consumption_preferences_start_business"]}}</td>
                  <td>{{$average["consumption_preferences_movie_romance"]}}</td>
                  <td>{{$average["consumption_preferences_movie_adventure"] }}</td>
                  <td>{{$average["consumption_preferences_movie_horror"] }}</td>
                  <td>{{$average["consumption_preferences_movie_musical"]}}</td>
                  <td>{{$average["consumption_preferences_movie_historical"]}}</td>
                  <td>{{$average["consumption_preferences_movie_science_fiction"] }}</td>
                  <td>{{$average["consumption_preferences_movie_war"] }}</td>
                  <td>{{$average["consumption_preferences_movie_drama"]}}</td>
                  <td>{{$average["consumption_preferences_movie_action"]}}</td>
                  <td>{{$average["consumption_preferences_movie_documentary"]}}</td>
                  <td>{{$average["consumption_preferences_music_rap"] }}</td>
                  <td>{{$average["consumption_preferences_music_country"]}}</td>
                  <td>{{$average["consumption_preferences_music_r_b"] }}</td>
                  <td>{{$average["consumption_preferences_music_hip_hop"]}}</td>
                  <td>{{$average["consumption_preferences_music_live_event"] }}</td>
                  <td>{{$average["consumption_preferences_music_playing"]}}</td>
                  <td>{{$average["consumption_preferences_music_latin"] }}</td>
                  <td>{{$average["consumption_preferences_music_rock"] }}</td>
                  <td>{{$average["consumption_preferences_music_classical"] }}</td>
                  <td>{{$average["consumption_preferences_read_frequency"] }}</td>
                  <td>{{$average["consumption_preferences_books_entertainment_magazines"] }}</td>
                  <td>{{$average["consumption_preferences_books_non_fiction"] }}</td>
                  <td>{{$average["consumption_preferences_books_financial_investing"]}}</td>
                  <td>{{$average["consumption_preferences_books_autobiographies"]}}</td>
                  <td>{{$average["consumption_preferences_volunteer"] }}</td>
                 
 
              </tr>    
              @foreach($results as $result)
                <tr>
                  <td>
                    <a href="/task/{{ $result->task }}">
                       @foreach($tasks as $task)
                          @if($task->id == $result->task)
                            {{ $task->name }}
                          @endif
                      @endforeach
                    </a>
                  </td>
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
                  <td>{{$result->consumption_preferences_automobile_ownership_cost }}</td>
                  <td>{{$result->consumption_preferences_automobile_safety}} </td>
                  <td>{{$result->consumption_preferences_clothes_quality }}</td>
                  <td>{{$result->consumption_preferences_clothes_style }}</td>
                  <td>{{$result->consumption_preferences_clothes_comfort }}</td>
                  <td>{{$result->consumption_preferences_influence_brand_nae }}</td>
                  <td>{{$result->consumption_preferences_influence_utility}}</td>
                  <td>{{$result->consumption_preferences_influence_online_ads}}</td>
                  <td>{{$result->consumption_preferences_influence_social_media}}</td>
                  <td>{{$result->consumption_preferences_influence_familymembers }}</td>
                  <td>{{$result->consumption_preferences_spur_of_moment }}</td>
                  <td>{{$result->consumption_preferences_credit_card_payment }}</td>
                  <td>{{$result->consumption_preferences_eat_out}}</td>
                  <td>{{$result->consumption_preferences_gym_membership }}</td>
                  <td>{{$result->consumption_preferences_outdoor }}</td>
                  <td>{{$result->consumption_preferences_concerned_environment}}</td>
                  <td>{{$result->consumption_preferences_start_business}}</td>
                  <td>{{$result->consumption_preferences_movie_romance}}</td>
                  <td>{{$result->consumption_preferences_movie_adventure }}</td>
                  <td>{{$result->consumption_preferences_movie_horror }}</td>
                  <td>{{$result->consumption_preferences_movie_musical}}</td>
                  <td>{{$result->consumption_preferences_movie_historical}}</td>
                  <td>{{$result->consumption_preferences_movie_science_fiction }}</td>
                  <td>{{$result->consumption_preferences_movie_war }}</td>
                  <td>{{$result->consumption_preferences_movie_drama}}</td>
                  <td>{{$result->consumption_preferences_movie_action}}</td>
                  <td>{{$result->consumption_preferences_movie_documentary}}</td>
                  <td>{{$result->consumption_preferences_music_rap }}</td>
                  <td>{{$result->consumption_preferences_music_country}}</td>
                  <td>{{$result->consumption_preferences_music_r_b }}</td>
                  <td>{{$result->consumption_preferences_music_hip_hop}}</td>
                  <td>{{$result->consumption_preferences_music_live_event }}</td>
                  <td>{{$result->consumption_preferences_music_playing}}</td>
                  <td>{{$result->consumption_preferences_music_latin }}</td>
                  <td>{{$result->consumption_preferences_music_rock }}</td>
                  <td>{{$result->consumption_preferences_music_classical }}</td>
                  <td>{{$result->consumption_preferences_read_frequency }}</td>
                  <td>{{$result->consumption_preferences_books_entertainment_magazines }}</td>
                  <td>{{$result->consumption_preferences_books_non_fiction }}</td>
                  <td>{{$result->consumption_preferences_books_financial_investing}}</td>
                  <td>{{$result->consumption_preferences_books_autobiographies}}</td>
                  <td>{{$result->consumption_preferences_volunteer }}</td>


                </tr>
              @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
