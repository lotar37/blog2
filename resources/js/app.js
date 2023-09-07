require('./bootstrap');
import Users from "./Components/Users";
import Point from "./Components/Point";
import List from "./Components/List";
import { createApp } from "vue";
const app = createApp({})
app.component('component-users', Users)
app.component('point', Point)



app.component('list', List)
const vm = app.mount("#app")
