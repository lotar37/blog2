require('./bootstrap');
import Users from "./Components/Users";
import { createApp } from "vue";
const app = createApp({})
app.component('component-users', Users)
app.mount("#app")
