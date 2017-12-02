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

	public function showLang($id){
		$tasks = Test::get();
		$lang = Lang::where('id', $id)->first();
		$results = Result::where('lang', $id)->get();
        return view('langpage')->withLang($lang)->withResults($results)->withTasks($tasks);

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
