<template>
    <div>
        <!-- follow button -->
        <button class="btn btn-primary ml-4 mt-1" @click="FollowUser">Follow Me</button>
    </div>
</template>

<script>
    export default {

        // accept the user id
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        // follow user method
        methods: {
            FollowUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        console.log(response.data);
                    });
            }
        }
    }
</script>
