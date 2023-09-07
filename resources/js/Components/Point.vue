<template>
    <div>
        <div v-if="show" >
        <li @click="toggleItem(false)" :style="{fontSize: fontSizer + 'em'}">{{ title.text }}</li>
            <button @click="$emit('fontSizeEnlarge',0.1)">+</button>
        </div>
        <div v-else>
        <input  v-model="title.text" @keyup.enter="toggleItem(true)">
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            show:true,
        }
    },
    name: "Point",
    props: {
        title:Object,
        fontSizer:null,

    },
    emits: ['fontSizeEnlarge'],
    methods:{
        toggleItem(s){
            this.show = s
        },
    }

}
</script>

<style scoped>

</style>
