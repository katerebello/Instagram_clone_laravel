<template>
    <div>
        <!-- follow button -->
        <!-- <button class="btn btn-primary ml-4 mt-1" @click="FollowUser" v-text="ButtonText"></button> -->

        <a href="" role="button" class="pl-1" style="text-decoration:none" @click="FollowUser" v-text="ButtonText"></a>
    </div>
</template>

<script>
    export default {

        // accept the user id
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        // if the user clicks on follow
        data: function(){
            return{
                status: this.follows,
            }
        },

        // follow user method
        methods: {
            FollowUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {

                        // updates the text of the button
                        this.status = ! this.status;
                        
                        console.log(response.data);
                    })
                    // the 401 error ;; when you try to follow a user before you login or register
                    .catch(errors => {
                        if(errors.response.status == 401 ){
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            ButtonText(){
                return(this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
