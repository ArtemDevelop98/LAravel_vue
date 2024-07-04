import './bootstrap';
import { createApp } from 'vue';
import store from "./store"
import router from "./routes/router";

import index from './components/index.vue'

createApp(index)
    .use(router)
    .use(store)
    .mount('#app')
