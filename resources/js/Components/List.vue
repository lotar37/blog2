<template>
<point v-for="point in points" :title="point" :font-sizer="itemFontSize" @font-size-enlarge="addSize"></point>
    <span class="btn btn-success" @click.once="addItem">Add</span>
    <span class="btn btn-success ml-2" @keyup.enter="addItem">Press Enter</span>
</template>

<script>
export default {
    name: "List",
    components: {

    },

    data(){
        return{
            points:[
                {id:1, text:'Slava'},
                {id:2, text:'Gora'},
                {id:3, text:'Nick'},
            ],
            itemFontSize:1,
        }
    },
    methods:{
        addItem(){
            this.points.push({id:this.points.length+1, text:'New Chel'},)
        },
        addSize(delta){
            this.itemFontSize += delta
        }
    }
}
</script>

<style scoped>

</style>
