<?php

namespace App\Http\Controllers;
use App\Lang;
use App\Test;
use App\Result;
use Auth;

use Illuminate\Http\Request;

class langController extends Controller
{

	public function welcome(){

        $langs = Lang::get();
		return view('welcome')->withLangs($langs);
	}


	public function list(){

        $tasks = Test::get();
        $langs = Lang::get();
        return view('list')->withLangs($langs)->withTasks($tasks);
	}

	public function answerQuery($query){

		$result = Result::orderBy($query, 'desc')->first();

		$lang = Lang::where('id', $result->lang)->first();

		return $lang;

	}

	public function showLang($id){
		$tasks = Test::get();
		$lang = Lang::where('id', $id)->first();
		$results = Result::where('lang', $id)->get();

		$count = count($results);

		$word_count = 0;
		$openness = 0;
		$adventurouseness = 0;
		$artistic_interests = 0;
		$emotionality = 0;
		$imagination = 0;
		$intellect = 0;
		$authority_challenging = 0;
		$conscientiousness = 0;
		$achivement_striving = 0;
		$cautiousness = 0;
		$dutifulness = 0;
		$orderliness = 0;
		$self_discipline = 0;
		$self_efficacy = 0;
		$extraversion = 0;
		$activity_level = 0;
		$assertiveness = 0;
		$cheerfulness = 0;
		$excitement_seeking = 0;
		$outgoing = 0;
		$gregariousness = 0;
		$agreeableness = 0;
		$altruism = 0;
		$cooperation = 0;
		$modesty = 0;
		$uncompromising = 0;
		$sympathy = 0;
		$trust = 0;
		$emotional_range = 0;
		$fiery = 0;
		$prone_to_worry = 0;
		$melancholy = 0;
		$immoderation = 0;
		$self_consciousness = 0;
		$susceptilble_to_stess = 0;
		$challenge = 0;
		$closeness = 0;
		$curiosity = 0;
		$excitement = 0;
		$harmony = 0;
		$ideal = 0;
		$liberty = 0;
		$love = 0;
		$practicality = 0;
		$self_expression = 0;
		$stability = 0;
		$structure = 0;
		$conservation = 0;
		$openness_to_change = 0;
		$hedonism = 0;
		$self_enhancement = 0;
		$self_transcendence = 0;

		$consumption_preferences_automobile_ownership_cost = 0;
		$consumption_preferences_automobile_safety = 0;
		$consumption_preferences_clothes_quality = 0;
		$consumption_preferences_clothes_style = 0;
		$consumption_preferences_clothes_comfort = 0;
		$consumption_preferences_influence_brand_name = 0;
		$consumption_preferences_influence_utility = 0;
		$consumption_preferences_influence_online_ads = 0;
		$consumption_preferences_influence_social_media = 0;
		$consumption_preferences_influence_family_members = 0;
		$consumption_preferences_spur_of_moment = 0;
		$consumption_preferences_credit_card_payment = 0;
		$consumption_preferences_eat_out = 0;
		$consumption_preferences_gym_membership = 0;
		$consumption_preferences_outdoor = 0;
		$consumption_preferences_concerned_environment = 0;
		$consumption_preferences_start_business = 0;
		$consumption_preferences_movie_romance = 0;
		$consumption_preferences_movie_adventure = 0;
		$consumption_preferences_movie_horror = 0;
		$consumption_preferences_movie_musical = 0;
		$consumption_preferences_movie_historical = 0;
		$consumption_preferences_movie_science_fiction = 0;
		$consumption_preferences_movie_war = 0;
		$consumption_preferences_movie_drama = 0;
		$consumption_preferences_movie_action = 0;
		$consumption_preferences_movie_documentary = 0;
		$consumption_preferences_music_rap = 0;
		$consumption_preferences_music_country = 0;
		$consumption_preferences_music_r_b = 0;
		$consumption_preferences_music_hip_hop = 0;
		$consumption_preferences_music_live_event = 0;
		$consumption_preferences_music_playing = 0;
		$consumption_preferences_music_latin = 0;
		$consumption_preferences_music_rock = 0;
		$consumption_preferences_music_classical = 0;
		$consumption_preferences_read_frequency = 0;
		$consumption_preferences_books_entertainment_magazines = 0;
		$consumption_preferences_books_non_fiction = 0;
		$consumption_preferences_books_financial_investing = 0;
		$consumption_preferences_books_autobiographies = 0;
		$consumption_preferences_volunteer = 0;

		if($count > 0)
		{
		foreach($results as $result){
			$word_count += $result->word_count;
			$openness += $result->openness;
			$adventurouseness += $result->adventurousness;
			$artistic_interests += $result->artistic_interests;
			$emotionality += $result->emotionality;
			$imagination += $result->imagination;
			$intellect += $result->intellect;
			$authority_challenging += $result->authority_challenging ;
			$conscientiousness += $result->conscientiousness;
			$achivement_striving += $result->achivement_striving;
			$cautiousness +=	$result->cautiousness ;
			$dutifulness +=	$result->dutifulness;
			$orderliness += $result->orderliness ;
			$self_discipline +=		$result->self_discipline;
			$self_efficacy += $result->self_efficacy ;
			$extraversion += $result->extraversion;
			$activity_level += $result->activity_level ;
			$assertiveness += $result->assertiveness ;
			$cheerfulness += $result->cheerfulness;
			$excitement_seeking += $result->excitement_seeking ;
			$outgoing += $result->outgoing;
			$gregariousness += $result->gregariousness ;
			$agreeableness += $result->agreeableness ;
			$altruism += $result->altruism ;
			$cooperation += $result->cooperation ;
			$modesty += $result->modesty ;
			$uncompromising += $result->uncompromising ;
			$sympathy += 	$result->sympathy;
			$trust += $result->trust ;
			$emotional_range += $result->emotional_range ;
			$fiery += $result->fiery;
			$prone_to_worry += $result->prone_to_worry ;
			$melancholy += $result->melancholy;
			$immoderation += 	$result->immoderation;
			$self_consciousness += $result->self_consciousness ;
			$susceptilble_to_stess += 	$result->susceptilble_to_stess ;
			$challenge +=	$result->challenge ;
			$closeness += $result->closeness ;
			$curiosity += 	$result->curiosity;
			$excitement += $result->excitement ;
			$harmony += $result->harmony ;
			$ideal += $result->ideal ;
			$liberty += $result->liberty ;
			$love += 	$result->love ;
			$practicality += $result->practicality;
			$self_expression += $result->self_expression ;
			$stability += $result->stability ;
			$structure += $result->structure; 
			$conservation += 	$result->conservation ;
			$openness_to_change += $result->openness_to_change ;
			$hedonism += $result->hedonism ;
			$self_enhancement +=$result->self_enhancement ;
			$self_transcendence += $result->self_transcendence ;

			$consumption_preferences_automobile_ownership_cost += $result->consumption_preferences_automobile_ownership_cost ;
			$consumption_preferences_automobile_safety += 	$result->consumption_preferences_automobile_safety ;
			$consumption_preferences_clothes_quality += $result->consumption_preferences_clothes_quality;
			$consumption_preferences_clothes_style += $result->consumption_preferences_clothes_style ;
			$consumption_preferences_clothes_comfort += $result->consumption_preferences_clothes_comfort ;
			$consumption_preferences_influence_brand_name += $result->consumption_preferences_influence_brand_name;
			$consumption_preferences_influence_utility += $result->consumption_preferences_influence_utility;
			$consumption_preferences_influence_online_ads += $result->consumption_preferences_influence_online_ads;
			$consumption_preferences_influence_social_media +=$result->consumption_preferences_influence_social_media ;
			$consumption_preferences_influence_family_members += $result->consumption_preferences_influence_family_members;
			$consumption_preferences_spur_of_moment += $result->consumption_preferences_spur_of_moment;
			$consumption_preferences_credit_card_payment +=$result->consumption_preferences_credit_card_payment; 
			$consumption_preferences_eat_out += $result->consumption_preferences_eat_out;
			$consumption_preferences_gym_membership += $result->consumption_preferences_gym_membership ;
			$consumption_preferences_outdoor += $result->consumption_preferences_outdoor ;
			$consumption_preferences_concerned_environment += $result->consumption_preferences_concerned_environment;
			$consumption_preferences_start_business += $result->consumption_preferences_start_business ;
			$consumption_preferences_movie_romance += $result->consumption_preferences_movie_romance ;
			$consumption_preferences_movie_adventure += $result->consumption_preferences_movie_adventure ;
			$consumption_preferences_movie_horror += $result->consumption_preferences_movie_horror ;
			$consumption_preferences_movie_musical +=	$result->consumption_preferences_movie_musical ;
			$consumption_preferences_movie_historical +=	$result->consumption_preferences_movie_historical ;
			$consumption_preferences_movie_science_fiction += $result->consumption_preferences_movie_science_fiction;
			$consumption_preferences_movie_war += $result->consumption_preferences_movie_war;
			$consumption_preferences_movie_drama += $result->consumption_preferences_movie_drama ;
			$consumption_preferences_movie_action += $result->consumption_preferences_movie_action ;
			$consumption_preferences_movie_documentary += $result->consumption_preferences_movie_documentary ;
			$consumption_preferences_music_rap += $result->consumption_preferences_music_rap ;
			$consumption_preferences_music_country += $result->consumption_preferences_music_country ;
			$consumption_preferences_music_r_b += $result->consumption_preferences_music_r_b ;
			$consumption_preferences_music_hip_hop += $result->consumption_preferences_music_hip_hop ;
			$consumption_preferences_music_live_event += $result->consumption_preferences_music_live_event ;

			$consumption_preferences_music_playing += $result->consumption_preferences_music_playing ;
			$consumption_preferences_music_latin += $result->consumption_preferences_music_latin ;
			$consumption_preferences_music_rock += $result->consumption_preferences_music_rock ;
			$consumption_preferences_music_classical +=	$result->consumption_preferences_music_classical ;

			$consumption_preferences_read_frequency += $result->consumption_preferences_read_frequency;
			$consumption_preferences_books_entertainment_magazines += $result->consumption_preferences_books_entertainment_magazines;
			$consumption_preferences_books_non_fiction += $result->consumption_preferences_books_non_fiction;
			$consumption_preferences_books_financial_investing += $result->consumption_preferences_books_financial_investing ;
			$consumption_preferences_books_autobiographies += $result->consumption_preferences_books_autobiographies;
			$consumption_preferences_volunteer +=$result->consumption_preferences_volunteer ;
		}

				


		$word_count = $word_count /$count;
		$openness = $openness /$count;
		$adventurouseness = $adventurouseness /$count;
		$artistic_interests = $artistic_interests /$count;
		$emotionality = $emotionality /$count;
		$imagination = $imagination /$count;
		$intellect = $intellect /$count;
		$authority_challenging = $authority_challenging /$count;
		$conscientiousness =  $conscientiousness /$count;
		$achivement_striving =  $achivement_striving /$count;
		$cautiousness =  $cautiousness /$count;
		$dutifulness =  $dutifulness /$count;
		$orderliness =  $orderliness /$count;
		$self_discipline =  $self_discipline /$count;
		$self_efficacy =  $self_efficacy /$count;
		$extraversion =  $extraversion /$count;
		$activity_level =  $activity_level /$count;
		$assertiveness =  $assertiveness /$count;
		$cheerfulness =  $cheerfulness /$count;
		$excitement_seeking =  $excitement_seeking /$count;
		$outgoing =  $outgoing /$count;
		$gregariousness =  $gregariousness /$count;
		$agreeableness =  $agreeableness /$count;
		$altruism =  $altruism /$count;
		$cooperation =  $cooperation /$count;
		$modesty =  $modesty /$count;
		$uncompromising =  $uncompromising /$count;
		$sympathy =  $sympathy /$count;
		$trust =  $trust /$count;
		$emotional_range =  $emotional_range /$count;
		$fiery =  $fiery /$count;
		$prone_to_worry =  $prone_to_worry /$count;
		$melancholy =  $melancholy /$count;
		$immoderation =  $immoderation /$count;
		$self_consciousness =  $self_consciousness /$count;
		$susceptilble_to_stess =  $susceptilble_to_stess /$count;
		$challenge =  $challenge /$count;
		$closeness =  $closeness /$count;
		$curiosity =  $curiosity /$count;
		$excitement =  $excitement /$count;
		$harmony =  $harmony /$count;
		$ideal =  $ideal /$count;
		$liberty =  $liberty /$count;
		$love =  $love /$count;
		$practicality =  $practicality /$count;
		$self_expression =  $self_expression /$count;
		$stability =  $stability /$count;
		$structure =  $structure /$count;
		$conservation =  $conservation /$count;
		$openness_to_change =  $openness_to_change /$count;
		$hedonism =  $hedonism /$count;
		$self_enhancement =  $self_enhancement /$count;
		$self_transcendence =  $self_transcendence /$count;
		$consumption_preferences_automobile_ownership_cost =  $consumption_preferences_automobile_ownership_cost /$count;

		$consumption_preferences_automobile_safety =  $consumption_preferences_automobile_safety /$count;

		$consumption_preferences_clothes_quality =  $consumption_preferences_clothes_quality /$count;

		$consumption_preferences_clothes_style =  $consumption_preferences_clothes_style /$count;

		$consumption_preferences_clothes_comfort =  $consumption_preferences_clothes_comfort /$count;

		$consumption_preferences_influence_brand_name =  $consumption_preferences_influence_brand_name /$count;

		$consumption_preferences_influence_utility =  $consumption_preferences_influence_utility /$count;

		$consumption_preferences_influence_online_ads =  $consumption_preferences_influence_online_ads /$count;

		$consumption_preferences_influence_social_media =   $consumption_preferences_influence_social_media/$count;

		$consumption_preferences_influence_family_members =  $consumption_preferences_influence_family_members /$count;

		$consumption_preferences_spur_of_moment =  $consumption_preferences_spur_of_moment /$count;

		$consumption_preferences_credit_card_payment = $consumption_preferences_credit_card_payment /$count;
		$consumption_preferences_eat_out =  $consumption_preferences_eat_out /$count;
		$consumption_preferences_gym_membership =   $consumption_preferences_gym_membership/$count;
		$consumption_preferences_outdoor =  $consumption_preferences_outdoor /$count;
		$consumption_preferences_concerned_environment =  $consumption_preferences_concerned_environment /$count;
		$consumption_preferences_start_business =  $consumption_preferences_start_business /$count;
		$consumption_preferences_movie_romance =  $consumption_preferences_movie_romance /$count;
		$consumption_preferences_movie_adventure =  $consumption_preferences_movie_adventure /$count;
		$consumption_preferences_movie_horror =  $consumption_preferences_movie_horror /$count;
		$consumption_preferences_movie_musical =  $consumption_preferences_movie_musical /$count;
		$consumption_preferences_movie_historical =  $consumption_preferences_movie_historical /$count;
		$consumption_preferences_movie_science_fiction =   $consumption_preferences_movie_science_fiction/$count;
		$consumption_preferences_movie_war =  $consumption_preferences_movie_war /$count;
		$consumption_preferences_movie_drama =  $consumption_preferences_movie_drama /$count;
		$consumption_preferences_movie_action =  $consumption_preferences_movie_action /$count;
		$consumption_preferences_movie_documentary =  $consumption_preferences_movie_documentary /$count;
		$consumption_preferences_music_rap =  $consumption_preferences_music_rap /$count;
		$consumption_preferences_music_country =  $consumption_preferences_music_country /$count;
		$consumption_preferences_music_r_b =  $consumption_preferences_music_r_b /$count;
		$consumption_preferences_music_hip_hop =  $consumption_preferences_music_hip_hop /$count;
		$consumption_preferences_music_live_event =   $consumption_preferences_music_live_event/$count;
		$consumption_preferences_music_playing = $consumption_preferences_music_playing /$count;
		$consumption_preferences_music_latin =  $consumption_preferences_music_latin/$count;
		$consumption_preferences_music_rock =  $consumption_preferences_music_rock/$count;
		$consumption_preferences_music_classical = $consumption_preferences_music_classical /$count;
		$consumption_preferences_read_frequency = $consumption_preferences_read_frequency /$count;
		$consumption_preferences_books_entertainment_magazines = $consumption_preferences_books_entertainment_magazines /$count;
		$consumption_preferences_books_non_fiction = $consumption_preferences_books_non_fiction /$count;
		$consumption_preferences_books_financial_investing =  $consumption_preferences_books_financial_investing/$count;
		$consumption_preferences_books_autobiographies = $consumption_preferences_books_autobiographies /$count;
		$consumption_preferences_volunteer =  $consumption_preferences_volunteer /$count;


		}


		$average = [

			"word_count" => "$word_count",
			"openness" => "$openness",
			"adventurouseness" => "$adventurouseness",
			"artistic_interests" => "$artistic_interests",
			"emotionality" => "$emotionality",
			"imagination" => "$imagination",
			"intellect" => "$intellect",
			"authority_challenging" => "$authority_challenging",
			"conscientiousness" => "$conscientiousness",
			"achivement_striving" => "$achivement_striving",
			"cautiousness" => "$cautiousness",
			"dutifulness" => "$dutifulness",
			"orderliness" => "$orderliness",
			"self_discipline" => "$self_discipline",
			"self_efficacy" => "$self_efficacy",
			"extraversion" => "$extraversion",
			"activity_level" => "$activity_level",
			"assertiveness" => "$assertiveness",
			"cheerfulness" => "$cheerfulness",
			"excitement_seeking" => "$excitement_seeking",
			"outgoing" => "$outgoing",
			"gregariousness" => "$gregariousness",
			"agreeableness" => "$agreeableness",
			"altruism" => "$altruism",
			"cooperation" => "$cooperation",
			"modesty" => "$modesty",
			"uncompromising" => "$uncompromising",
			"sympathy" => "$sympathy",
			"trust" => "$trust",
			"emotional_range" => "$emotional_range",
			"fiery" => "$fiery",
			"prone_to_worry" => "$prone_to_worry",
			"melancholy" => "$melancholy",
			"immoderation" => "$immoderation",
			"self_consciousness" => "$self_consciousness",
			"susceptilble_to_stess" => "$susceptilble_to_stess",
			"challenge" => "$challenge",
			"closeness" => "$closeness",
			"curiosity" => "$curiosity",
			"excitement" => "$excitement",
			"harmony" => "$harmony",
			"ideal" => "$ideal",
			"liberty" => "$liberty",
			"love" => "$love",
			"practicality" => "$practicality",
			"self_expression" => "$self_expression",
			"stability" => "$stability",
			"structure" => "$structure",
			"conservation" => "$conservation",
			"openness_to_change" => "$openness_to_change",
			"hedonism" => "$hedonism",
			"self_enhancement" => "$self_enhancement",
			"self_transcendence" => "$self_transcendence",
			"consumption_preferences_automobile_ownership_cost" => "$consumption_preferences_automobile_ownership_cost",
			"consumption_preferences_automobile_safety" => "$consumption_preferences_automobile_safety",
			"consumption_preferences_clothes_quality" => "$consumption_preferences_clothes_quality",
			"consumption_preferences_clothes_style" => "$consumption_preferences_clothes_style",
			"consumption_preferences_clothes_comfort" => "$consumption_preferences_clothes_comfort",
			"consumption_preferences_influence_brand_name" => "$consumption_preferences_influence_brand_name",
			"consumption_preferences_influence_utility" => "$consumption_preferences_influence_utility",
			"consumption_preferences_influence_online_ads" => "$consumption_preferences_influence_online_ads",
			"consumption_preferences_influence_social_media" => "$consumption_preferences_influence_social_media",
			"consumption_preferences_influence_family_members" => "$consumption_preferences_influence_family_members",
			"consumption_preferences_spur_of_moment" => "$consumption_preferences_spur_of_moment",
			"consumption_preferences_credit_card_payment" => "$consumption_preferences_credit_card_payment",
			"consumption_preferences_eat_out" => "$consumption_preferences_eat_out",
			"consumption_preferences_gym_membership" => "$consumption_preferences_gym_membership",
			"consumption_preferences_outdoor" => "$consumption_preferences_outdoor",
			"consumption_preferences_concerned_environment" => "$consumption_preferences_concerned_environment",
			"consumption_preferences_start_business" => "$consumption_preferences_start_business",
			"consumption_preferences_movie_romance" => "$consumption_preferences_movie_romance",
			"consumption_preferences_movie_adventure" => "$consumption_preferences_movie_adventure",
			"consumption_preferences_movie_horror" => "$consumption_preferences_movie_horror",
			"consumption_preferences_movie_musical" => "$consumption_preferences_movie_musical",
			"consumption_preferences_movie_historical" => "$consumption_preferences_movie_historical",
			"consumption_preferences_movie_science_fiction" => "$consumption_preferences_movie_science_fiction",
			"consumption_preferences_movie_war" => "$consumption_preferences_movie_war",
			"consumption_preferences_movie_drama" => "$consumption_preferences_movie_drama",
			"consumption_preferences_movie_action" => "$consumption_preferences_movie_action",
			"consumption_preferences_movie_documentary" => "$consumption_preferences_movie_documentary",
			"consumption_preferences_music_rap" => "$consumption_preferences_music_rap",
			"consumption_preferences_music_country" => "$consumption_preferences_music_country",
			"consumption_preferences_music_r_b" => "$consumption_preferences_music_r_b",
			"consumption_preferences_music_hip_hop" => "$consumption_preferences_music_hip_hop",
			"consumption_preferences_music_live_event" => "$consumption_preferences_music_live_event",
			"consumption_preferences_music_playing" => "$consumption_preferences_music_playing",
			"consumption_preferences_music_latin" => "$consumption_preferences_music_latin",
			"consumption_preferences_music_rock" => "$consumption_preferences_music_rock",
			"consumption_preferences_music_classical" => "$consumption_preferences_music_classical",
			"consumption_preferences_read_frequency" => "$consumption_preferences_read_frequency",
			"consumption_preferences_books_entertainment_magazines" => "$consumption_preferences_books_entertainment_magazines",
			"consumption_preferences_books_non_fiction" => "$consumption_preferences_books_non_fiction",
			"consumption_preferences_books_financial_investing" => "$consumption_preferences_books_financial_investing",
			"consumption_preferences_books_autobiographies" => "$consumption_preferences_books_autobiographies",
			"consumption_preferences_volunteer" => "$consumption_preferences_volunteer"
		];


        return view('langpage')->withLang($lang)->withResults($results)->withTasks($tasks)->withAverage($average);

	}


	public function tasklist(){

        $tasks = Test::get();
        return view('list')->withTasks($tasks);
	}

	public function showTask($id){
		$langs = Lang::get();
		$task = Test::where('id', $id)->first();
		$results = Result::where('task', $id)->get();
        return view('taskpage')->withTask($task)->withResults($results)->withLangs($langs);

	}

	public function postlang(Request $request){

		if(Auth::user()){
			$lang = new Lang();
			$lang->name = $request->name;
			$lang->started = $request->created;
			$lang->save();
		}
		return back();


	}

	public function posttask(Request $request){
		if(Auth::user()){
			$task = new Test();
			$task->name = $request->name;
			$task->save();
		}
		return back();
	}

	public function posttexts(Request $request){

		if(Auth::user()){

			preg_match("/\{(.*)\}/s", $request->result, $matches);
			$data = json_decode($matches[0]);
			//dd($data->personality[0]->percentile);

			$result = new Result();
			$result->lang = $request->lang;
			$result->task = $request->task;
			$result->word_count = $data->word_count;

			$result->openness = $data->personality[0]->percentile;
				$result->adventurousness = $data->personality[0]->children[0]->percentile;
				$result->artistic_interests = $data->personality[0]->children[1]->percentile;
				$result->emotionality = $data->personality[0]->children[2]->percentile;
				$result->imagination = $data->personality[0]->children[3]->percentile;
				$result->intellect = $data->personality[0]->children[4]->percentile;
				$result->authority_challenging = $data->personality[0]->children[5]->percentile;

			$result->conscientiousness = $data->personality[1]->percentile;
				$result->achivement_striving = $data->personality[1]->children[0]->percentile;
				$result->cautiousness = $data->personality[1]->children[1]->percentile;
				$result->dutifulness = $data->personality[1]->children[2]->percentile;
				$result->orderliness = $data->personality[1]->children[3]->percentile;
				$result->self_discipline = $data->personality[1]->children[4]->percentile;
				$result->self_efficacy = $data->personality[1]->children[5]->percentile;
			
			$result->extraversion = $data->personality[2]->percentile;
				$result->activity_level = $data->personality[2]->children[0]->percentile;
				$result->assertiveness = $data->personality[2]->children[1]->percentile;
				$result->cheerfulness = $data->personality[2]->children[2]->percentile;
				$result->excitement_seeking = $data->personality[2]->children[3]->percentile;
				$result->outgoing = $data->personality[2]->children[4]->percentile;
				$result->gregariousness = $data->personality[2]->children[5]->percentile;

			$result->agreeableness = $data->personality[3]->percentile;
				$result->altruism = $data->personality[3]->children[0]->percentile;
				$result->cooperation = $data->personality[3]->children[1]->percentile;
				$result->modesty = $data->personality[3]->children[2]->percentile;
				$result->uncompromising = $data->personality[3]->children[3]->percentile;
				$result->sympathy = $data->personality[3]->children[4]->percentile;
				$result->trust = $data->personality[3]->children[5]->percentile;

			$result->emotional_range = $data->personality[4]->percentile;
				$result->fiery = $data->personality[4]->children[0]->percentile;
				$result->prone_to_worry = $data->personality[4]->children[1]->percentile;
				$result->melancholy = $data->personality[4]->children[2]->percentile;
				$result->immoderation = $data->personality[4]->children[3]->percentile;
				$result->self_consciousness = $data->personality[4]->children[4]->percentile;
				$result->susceptilble_to_stess = $data->personality[4]->children[5]->percentile;

			$result->challenge = $data->needs[0]->percentile;
			$result->closeness = $data->needs[1]->percentile;
			$result->curiosity = $data->needs[2]->percentile;
			$result->excitement = $data->needs[3]->percentile;
			$result->harmony = $data->needs[4]->percentile;
			$result->ideal = $data->needs[5]->percentile;
			$result->liberty = $data->needs[6]->percentile;
			$result->love = $data->needs[7]->percentile;
			$result->practicality = $data->needs[8]->percentile;
			$result->self_expression = $data->needs[9]->percentile;
			$result->stability = $data->needs[10]->percentile;
			$result->structure = $data->needs[11]->percentile;


			$result->conservation = $data->values[0]->percentile;
			$result->openness_to_change = $data->values[1]->percentile;
			$result->hedonism = $data->values[2]->percentile;
			$result->self_enhancement = $data->values[3]->percentile;
			$result->self_transcendence = $data->values[4]->percentile;


			$result->consumption_preferences_automobile_ownership_cost = $data->consumption_preferences[0]->consumption_preferences[0]->score;
			$result->consumption_preferences_automobile_safety = $data->consumption_preferences[0]->consumption_preferences[1]->score;
			$result->consumption_preferences_clothes_quality = $data->consumption_preferences[0]->consumption_preferences[2]->score;
			$result->consumption_preferences_clothes_style = $data->consumption_preferences[0]->consumption_preferences[3]->score;
			$result->consumption_preferences_clothes_comfort = $data->consumption_preferences[0]->consumption_preferences[4]->score;
			$result->consumption_preferences_influence_brand_name = $data->consumption_preferences[0]->consumption_preferences[5]->score;
			$result->consumption_preferences_influence_utility = $data->consumption_preferences[0]->consumption_preferences[6]->score;
			$result->consumption_preferences_influence_online_ads = $data->consumption_preferences[0]->consumption_preferences[7]->score;
			$result->consumption_preferences_influence_social_media = $data->consumption_preferences[0]->consumption_preferences[8]->score;
			$result->consumption_preferences_influence_family_members = $data->consumption_preferences[0]->consumption_preferences[9]->score;
			$result->consumption_preferences_spur_of_moment = $data->consumption_preferences[0]->consumption_preferences[10]->score;
			$result->consumption_preferences_credit_card_payment = $data->consumption_preferences[0]->consumption_preferences[11]->score;

			$result->consumption_preferences_eat_out = $data->consumption_preferences[1]->consumption_preferences[0]->score;
			$result->consumption_preferences_gym_membership = $data->consumption_preferences[1]->consumption_preferences[1]->score;
			$result->consumption_preferences_outdoor = $data->consumption_preferences[1]->consumption_preferences[2]->score;

			$result->consumption_preferences_concerned_environment = $data->consumption_preferences[2]->consumption_preferences[0]->score;

			$result->consumption_preferences_start_business = $data->consumption_preferences[3]->consumption_preferences[0]->score;

			$result->consumption_preferences_movie_romance = $data->consumption_preferences[4]->consumption_preferences[0]->score;
			$result->consumption_preferences_movie_adventure = $data->consumption_preferences[4]->consumption_preferences[1]->score;
			$result->consumption_preferences_movie_horror = $data->consumption_preferences[4]->consumption_preferences[2]->score;
			$result->consumption_preferences_movie_musical = $data->consumption_preferences[4]->consumption_preferences[3]->score;
			$result->consumption_preferences_movie_historical = $data->consumption_preferences[4]->consumption_preferences[4]->score;
			$result->consumption_preferences_movie_science_fiction = $data->consumption_preferences[4]->consumption_preferences[5]->score;
			$result->consumption_preferences_movie_war = $data->consumption_preferences[4]->consumption_preferences[6]->score;
			$result->consumption_preferences_movie_drama = $data->consumption_preferences[4]->consumption_preferences[7]->score;
			$result->consumption_preferences_movie_action = $data->consumption_preferences[4]->consumption_preferences[8]->score;
			$result->consumption_preferences_movie_documentary = $data->consumption_preferences[4]->consumption_preferences[9]->score;


			$result->consumption_preferences_music_rap = $data->consumption_preferences[5]->consumption_preferences[0]->score;
			$result->consumption_preferences_music_country = $data->consumption_preferences[5]->consumption_preferences[1]->score;
			$result->consumption_preferences_music_r_b = $data->consumption_preferences[5]->consumption_preferences[2]->score;
			$result->consumption_preferences_music_hip_hop = $data->consumption_preferences[5]->consumption_preferences[3]->score;
			$result->consumption_preferences_music_live_event = $data->consumption_preferences[5]->consumption_preferences[4]->score;
			$result->consumption_preferences_music_playing = $data->consumption_preferences[5]->consumption_preferences[5]->score;
			$result->consumption_preferences_music_latin = $data->consumption_preferences[5]->consumption_preferences[6]->score;
			$result->consumption_preferences_music_rock = $data->consumption_preferences[5]->consumption_preferences[7]->score;
			$result->consumption_preferences_music_classical = $data->consumption_preferences[5]->consumption_preferences[8]->score;


			$result->consumption_preferences_read_frequency = $data->consumption_preferences[6]->consumption_preferences[0]->score;
			$result->consumption_preferences_books_entertainment_magazines = $data->consumption_preferences[6]->consumption_preferences[1]->score;
			$result->consumption_preferences_books_non_fiction = $data->consumption_preferences[6]->consumption_preferences[2]->score;
			$result->consumption_preferences_books_financial_investing = $data->consumption_preferences[6]->consumption_preferences[3]->score;
			$result->consumption_preferences_books_autobiographies = $data->consumption_preferences[6]->consumption_preferences[4]->score;


			$result->consumption_preferences_volunteer = $data->consumption_preferences[7]->consumption_preferences[0]->score;

			$result->save();
		
		}
		return back();

	}



}
