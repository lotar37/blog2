<template>
<div v-for="user in users" :key="user.id">
    {{ user.email }} - {{ user.name }}
</div>
</template>

<script>
export default {
    props:{
        users:Array
    }
}
</script>
