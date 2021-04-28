import { createApp } from 'vue'
import App from './App.vue'
import './index.css'
import router from './router'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCCeEEuke3Absp4598jGE8mBz5Z7VZmouA',
      libraries: 'places',
    }
  });

createApp(App).use(router).mount('#app')