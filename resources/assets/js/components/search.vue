<template>
    <div>
        <h2>I need a language that ...</h2>
        <select v-model="selected" class="form-control" v-on:change="submitSearch">
            <option disabled value="">Select a question</option>
            <option :value="question.query" v-for="question in questions" >{{question.text}}</option>
        </select>

        <h2 v-if="language">
           You should use: {{ language.name }}
        </h2>
    </div>
</template>

<script>
      export default {
        selected: "",
        data () {
            return {
                language: "",
                questions: [
                    {text: "is open", query:"openess"},
                    {text: "is adventurous", query:"adventurousness"},
                    {text: "has artistic interest", query:"artistic_interests"},
                    {text: "is emotional", query:"emotionality"},
                    {text: "is imaginative", query:"imagination"},
                    {text: "for intellectuals", query:"intellect"},
                    {text: "challenges authority", query:"authority_challenging"},
                    {text: "is conscientious", query:"conscientiousness"},
                    {text: "strives for achivement", query:"achivement_striving"},
                    {text: "is cautious", query:"cautiousness"},
                    {text: "is dutiful", query:"dutifulness"},
                    {text: "is ordered", query:"orderliness"},
                    {text: "with self discipline", query:"self_discipline"},
                    {text: "believes in itself", query:"self_efficacy"},
                    {text: "is extraverted", query:"extraversion"},
                    {text: "is active", query:"activity_level"},
                    {text: "is assertive", query:"assertiveness"},
                    {text: "will cheer me up", query:"cheerfulness"},
                    {text: "is excitement seeking", query:"excitement_seeking"},
                    {text: "is outgoing", query:"outgoing"},
                    {text: "is sociable", query:"gregariousness"},
                    {text: "is altruistic", query:"altruism"},
                    {text: "is cooperative", query:"cooperation"},
                    {text: "is modest", query:"modesty"},
                    {text: "is uncompromising", query:"uncompromising"},
                    {text: "is sympathetic", query:"sympathy"},
                    {text: "is trusting", query:"trust"},
                    {text: "has a wide emotional range", query:"emotional_range"},
                    {text: "is fiery", query:"fiery"},
                    {text: "is prone to worry", query:"prone_to_worry"},
                    {text: "is melancholy", query:"melancholy"},
                    {text: "is lacking restraint", query:"immoderation"},
                    {text: "is self conscious", query:"self_consciousness"},
                    {text: "is stressed out", query:"susceptilble_to_stess"},
                    {text: "is challenging", query:"challenge"},
                    {text: "is close", query:"closeness"},
                    {text: "is curious", query:"curiosity"},
                    {text: "is exciting", query:"exciting"},
                    {text: "is harmonious", query:"harmony"},
                    {text: "has strong ideals", query:"ideal"},
                    {text: "likes liberty", query:"liberty"},
                    {text: "loving", query:"love"},
                    {text: "is practical", query:"practicality"},
                    {text: "expresses itself", query:"self_expression"},
                    {text: "is stable", query:"stability"},
                    {text: "has a strong structure", query:"structure"},
                    {text: "conserves", query:"conservation"},
                    {text: "is open to change", query:"openness_to_change"},
                    {text: "is hedonistic", query:"hedonism"},
                    {text: "is exciting", query:"exciting"},
                    {text: "enhances itself", query:"self_enhancement"},
                    {text: "transcends itself", query:"self_transcendence"},
                    {text: "considers cost when buying a car", query:"consumption_preferences_automobile_ownership_cost"},
                    {text: "considers safety when buying a car", query:"consumption_preferences_automobile_safety"},
                    {text: "chooses quality when buying clothes", query:"consumption_preferences_clothes_quality"},
                    {text: "chooses style when buying clothes", query:"consumption_preferences_clothes_style"},
                    {text: "chooses comfort when buying clothes", query:"consumption_preferences_clothes_comfort"},
                    {text: "is influenced by brand names", query:"consumption_preferences_influence_brand_name"},
                    {text: "is influenced by utility", query:"consumption_preferences_influence_utility"},
                    {text: "is influenced by online ads", query:"consumption_preferences_influence_online_ads"},
                    {text: "is influenced by social media", query:"consumption_preferences_influence_social_media"},
                    {text: "is influenced by family members", query:"consumption_preferences_influence_family_members"},
                    {text: "takes spur of the moment decisions", query:"consumption_preferences_spur_of_moment"},
                    {text: "pays by credit card", query:"consumption_preferences_credit_card_payment"},
                    {text: "likes to eat out", query:"consumption_preferences_eat_out"},
                    {text: "has a gym membership", query:"consumption_preferences_gym_membership"},
                    {text: "likes the outdoors", query:"consumption_preferences_outdoor"},
                    {text: "is concerned for the environment", query:"consumption_preferences_concerned_environment"},
                    {text: "is likely to start a business", query:"consumption_preferences_start_business"},
                    {text: "likes romantic movies", query:"consumption_preferences_movie_romance"},  
                    {text: "likes adventure movies", query:"consumption_preferences_movie_adventure"},
                    {text: "likes horror movies", query:"consumption_preferences_movie_horror"},
                    {text: "likes musicals", query:"consumption_preferences_movie_musicals"},
                    {text: "likes historical movies", query:"consumption_preferences_movie_historical"},
                    {text: "likes science fiction movies", query:"consumption_preferences_movie_science_fiction"},
                    {text: "likes war movies", query:"consumption_preferences_movie_war"},
                    {text: "likes dramatic movies", query:"consumption_preferences_movie_drama"},
                    {text: "likes action movies", query:"consumption_preferences_movie_action"},
                    {text: "likes documentaries", query:"consumption_preferences_movie_documentary"},
                    {text: "listens to rap", query:"consumption_preferences_music_rap"},
                    {text: "listens to country", query:"consumption_preferences_music_country"},
                    {text: "listens to RnB", query:"consumption_preferences_music_r_b"},
                    {text: "listens to hip-hop", query:"consumption_preferences_music_hip_hop"},
                    {text: "goes to live concerts", query:"consumption_preferences_music_live_event"},
                    {text: "like playing instruments", query:"consumption_preferences_music_playing"},
                    {text: "listens to latin music", query:"consumption_preferences_music_latin"},
                    {text: "listens to rock music", query:"consumption_preferences_music_rock"},
                    {text: "listens to classical music", query:"consumption_preferences_music_classical"},
                    {text: "reads a lot", query:"consumption_preferences_read_frequency"},
                    {text: "reads magazines", query:"consumption_preferences_books_entertainment_magazines"},
                    {text: "reads non fiction", query:"consumption_preferences_books_non_fiction"},
                    {text: "reads books on financial investing", query:"consumption_preferences_books_financial_investing"},    
                    {text: "reads autobiographies", query:"consumption_preferences_books_autobiographies"},
                    {text: "likely to volunteer", query:"consumption_preferences_volunteer"},                                    
                ],
            }
        },
        mounted() {
            console.log('search mounted.');
        },
        methods:{
            submitSearch: function(){
                axios.post('/search/'+this.selected)
                .then(function (response) {
                    console.log(response);
                    this.language = response.data;
                }.bind(this))
                .catch(function (error) {
                    console.log(error);
                }.bind(this));
            }
        }
    }
</script>
