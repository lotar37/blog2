<template>
<div v-for="user in users" :key="user.id">
    {{ user.email }} - {{ user.name }} - {{ macs }}
</div>
    <div>Counter: {{ counter }}</div>
</template>

<script>
export default {
    data(){
        return{
            counter:0
        }
    },
    props:{
        users:Array,
        macs: String,

    },
    mounted() {
        setInterval(()=>{
            this.counter++
        }, 1000)
    }
}
</script>
