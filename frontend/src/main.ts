import { createApp } from "vue";

import App from "./App.vue";
import router from "./router";

import "./assets/main.css";

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faLocationDot, faUser, faUserSecret } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faUserSecret, faUser, faLocationDot)

const app = createApp(App);

app.use(router);
app.component('font-awesome-icon', FontAwesomeIcon)
app.mount("#app");
