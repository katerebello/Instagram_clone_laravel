<template>
    <div class="container">
        <i class="fas fa-heart" @click="likePost" :class=" { changeColor: this.status }"></i>
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
        }
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
