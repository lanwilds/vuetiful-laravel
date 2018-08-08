<template>
    <v-container grid-list-sm>
    <v-layout row wrap>
      <v-flex xs12 sm4 v-for="(card,i) in cards" :key="i">
        <v-card>

          <v-card-title primary-title>
            <div>
              <h3 class="headline text-md-center">{{card.title}}</h3>
              <div class="text-md-center">{{card.text}}</div>
            </div>
          </v-card-title>

          <v-card-actions >
            <v-btn  block color="orange">Share</v-btn>
            <v-btn  block color="orange">Explore</v-btn>
          </v-card-actions>
        </v-card>

      </v-flex>

    </v-layout>
    </v-container>
</template>

<script>
    export default {
        data(){
            return{
                cards:[
                    {
                        title:'Kangaroo Valley Safari',
                        text:'Located two hours south of Sydney in the Southern Highlands of New South Wales',
                        src:'https://cdn.vuetifyjs.com/images/cards/desert.jpg'
                    },
                    {
                        title:'Kangaroo Valley Safari',
                        text:'Located two hours south of Sydney in the Southern Highlands of New South Wales',
                        src:'https://cdn.vuetifyjs.com/images/cards/desert.jpg'
                    },
                    {
                        title:'Kangaroo Valley Safari',
                        text:'Located two hours south of Sydney in the Southern Highlands of New South Wales',
                        src:'https://cdn.vuetifyjs.com/images/cards/desert.jpg'
                    }
                ]
            }
        }
    }
</script>
