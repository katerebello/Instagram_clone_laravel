<template>
<<<<<<< HEAD
    <div>
        <!-- follow button -->
        <button class="btn btn-primary ml-4 mt-1" @click="FollowUser" v-text="ButtonText"></button>

        <!-- <a href="#" role="button" @click="FollowUser" v-text="ButtonText" ></a> -->
    </div>
</template>



<script>
    export default {

        // accept the user id
=======
    <div class="container">
        <button class="btn btn-primary ml-4" @click="followUser" v-text="ButtonText"></button>
    </div>
</template>

<script>
    export default {
>>>>>>> insta-k
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

<<<<<<< HEAD
        // if the user clicks on follow
        data: function(){
            return{
=======
        data: function(){
            return {
>>>>>>> insta-k
                status: this.follows,
            }
        },

<<<<<<< HEAD
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
=======
        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;
                        console.log(response.data);
                    })

                    .catch(errors => {
                        if (errors.response.status == 401){
                            window.location = '/login';
                        }
                    })
>>>>>>> insta-k
            }
        },

        computed: {
<<<<<<< HEAD
            ButtonText(){
                return(this.status) ? 'Unfollow' : 'Follow';
=======
            ButtonText() {
                return (this.status) ? 'Unfollow' : 'Follow' ;
>>>>>>> insta-k
            }
        }
    }
</script>
