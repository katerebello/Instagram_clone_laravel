<template>
    <div>
        <!-- <a href="" style="color:black" >   -->
            <i class="far fa-heart fa-2x" @click="LikePost" v-text="ButtonText"></i>
        <!-- </a>  -->
    </div>
</template>

<script>
    export default {

        // accept the user id
        props: ['userId', 'likes'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return{
                status: this.likes,
            }
        },
        

        // follow user method
        methods: {
            LikePost(){
                axios.post('/like/'+ this.userId)
                    .then(response => {

                        console.log(response.data);
                       
                    })
                    
            }
        },
        computed: {
            ButtonText(){
                return(this.status) ? 'Unfollow' : 'Follow';
            }
        }

    }
</script>
