<template>
    <div class="container">
        <i class="fas fa-heart" @click="likePost" :class=" { changeColor: this.status }"></i>
        
        
        <!-- <button class="btn btn-primary mr-1" @click="likePost" v-text="buttonText"></button> -->
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
                    })
                    .catch(errors => {
                        if (errors.response.status == 401){
                            window.location = '/login';
                        }
                    })
            }
        },

        // computed: {
        //     buttonText(){
        //         return (this.status) ? 'Dislike' : 'Like';
        //     }
            
        // }
    }
        
</script>
<style>
    .changeColor{
        color: red;
    }
    .fas{
        font-size: 22px;
        margin-left:-14px;
    }
</style>