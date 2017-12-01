<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Results extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->integer('word_count');
            $table->integer('lang');
            $table->float('openness')->nullable();
            $table->float('adventurousness')->nullable();
            $table->float('artistic_interests')->nullable(); 
            $table->float('emotionality')->nullable();
            $table->float('imagination')->nullable();
            $table->float('intellect')->nullable();
            $table->float('authority_challenging')->nullable();
            $table->float('conscientiousness')->nullable();
            $table->float('achivement_striving')->nullable();
            $table->float('cautiousness')->nullable();
            $table->float('dutifulness')->nullable();
            $table->float('orderliness')->nullable();
            $table->float('self_discipline')->nullable();
            $table->float('self_efficacy')->nullable();
            $table->float('extraversion')->nullable();
            $table->float('activity_level')->nullable();
            $table->float('assertiveness')->nullable();
            $table->float('cheerfulness')->nullable();
            $table->float('excitement_seeking')->nullable();
            $table->float('outgoing')->nullable();
            $table->float('gregariousness')->nullable();
            $table->float('agreeableness')->nullable();
            $table->float('altruism')->nullable();
            $table->float('cooperation')->nullable();
            $table->float('modesty')->nullable();
            $table->float('uncompromising')->nullable();
            $table->float('sympathy')->nullable();
            $table->float('trust')->nullable();
            $table->float('emotional_range')->nullable();
            $table->float('fiery')->nullable();
            $table->float('prone_to_worry')->nullable();
            $table->float('melancholy')->nullable();
            $table->float('immoderation')->nullable();
            $table->float('self_consciousness')->nullable();
            $table->float('susceptilble_to_stess')->nullable();
            $table->float('challenge')->nullable();
            $table->float('closeness')->nullable();
            $table->float('curiosity')->nullable();
            $table->float('excitement')->nullable();
            $table->float('harmony')->nullable();
            $table->float('ideal')->nullable();
            $table->float('liberty')->nullable();
            $table->float('love')->nullable();
            $table->float('practicality')->nullable();
            $table->float('self_expression')->nullable();
            $table->float('stability')->nullable();
            $table->float('structure')->nullable();
            $table->float('conservation')->nullable();
            $table->float('openness_to_change')->nullable();
            $table->float('hedonism')->nullable();
            $table->float('self_enhancement')->nullable();
            $table->float('self_transcendence')->nullable();
            $table->float('consumption_preferences_automobile_ownership_cost')->nullable();
            $table->float('consumption_preferences_automobile_safety')->nullable();
            $table->float('consumption_preferences_clothes_quality')->nullable();
            $table->float('consumption_preferences_clothes_style')->nullable();
            $table->float('consumption_preferences_clothes_comfort')->nullable();
            $table->float('consumption_preferences_influence_brand_name')->nullable();
            $table->float('consumption_preferences_influence_utility')->nullable();
            $table->float('consumption_preferences_influence_online_ads')->nullable();
            $table->float('consumption_preferences_influence_social_media')->nullable();
            $table->float('consumption_preferences_influence_family_members')->nullable();
            $table->float('consumption_preferences_spur_of_moment')->nullable();
            $table->float('consumption_preferences_credit_card_payment')->nullable();
            $table->float('consumption_preferences_eat_out')->nullable();
            $table->float('consumption_preferences_gym_membership')->nullable();
            $table->float('consumption_preferences_outdoor')->nullable();
            $table->float('consumption_preferences_concerned_environment')->nullable();
            $table->float('consumption_preferences_start_business')->nullable();
            $table->float('consumption_preferences_movie_romance')->nullable();
            $table->float('consumption_preferences_movie_adventure')->nullable();
            $table->float('consumption_preferences_movie_horror')->nullable();
            $table->float('consumption_preferences_movie_musical')->nullable();
            $table->float('consumption_preferences_movie_historical')->nullable();
            $table->float('consumption_preferences_movie_science_fiction')->nullable();
            $table->float('consumption_preferences_movie_war')->nullable();
            $table->float('consumption_preferences_movie_drama')->nullable();
            $table->float('consumption_preferences_movie_action')->nullable();
            $table->float('consumption_preferences_movie_documentary')->nullable();
            $table->float('consumption_preferences_music_rap')->nullable();
            $table->float('consumption_preferences_music_country')->nullable();
            $table->float('consumption_preferences_music_r_b')->nullable();
            $table->float('consumption_preferences_music_hip_hop')->nullable();
            $table->float('consumption_preferences_music_live_event')->nullable();
            $table->float('consumption_preferences_music_playing')->nullable();
            $table->float('consumption_preferences_music_latin')->nullable();
            $table->float('consumption_preferences_music_rock')->nullable();
            $table->float('consumption_preferences_music_classical')->nullable();
            $table->float('consumption_preferences_read_frequency')->nullable();
            $table->float('consumption_preferences_books_entertainment_magazines')->nullable();
            $table->float('consumption_preferences_books_non_fiction')->nullable();
            $table->float('consumption_preferences_books_financial_investing')->nullable();
            $table->float('consumption_preferences_books_autobiographies')->nullable();
            $table->float('consumption_preferences_volunteer')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
