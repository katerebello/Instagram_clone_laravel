<template>
    <div class="container">
        <button class="btn btn-primary mr-1" @click="likePost">Like</button>
    </div>
</template>

<script>
    export default {
        props:['userId','postId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            likePost(){
                axios.post('/like/' + this.userId +'/'+ this.postId)
                    .then(response=>{
                        console.log(response.data);
                    });
            }
        }
    }
        
</script>
