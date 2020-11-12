<template>
    <div class="container">
        <button class="btn btn-primary mr-1" @click="likePost" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props:['userId','postId','likes'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return {
                status:this.likes,
            }
        },

        methods: {
            likePost(){
                axios.post('/like/' + this.userId +'/'+ this.postId)
                    .then(response=>{
                        this.status = !this.status;
                        console.log(response.data);
                    });
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'Dislike' : 'Like';
            }
        }
    }
        
</script>
