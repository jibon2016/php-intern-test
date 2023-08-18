import './bootstrap';
import '@/css/app.css';

import {createApp} from 'vue';
import { router } from '@/js/router/router.js';
import App from '@/App.vue';

const app = createApp(App)
        .use(router)
app.mount('#app')
