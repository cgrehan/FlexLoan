import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { InertiaLink} from "@inertiajs/inertia-vue/src";
import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
import '@mdi/font/css/materialdesignicons.css'
import AppLayout from "./Pages/Partials/AppLayout";
import store from "./core/services/store";

Vue.config.productionTip = false;
// window.process.env.BASE_URL = '/';
// Global 3rd party plugins
import "popper.js";
import "tooltip.js";
import PerfectScrollbar from "perfect-scrollbar";
window.PerfectScrollbar = PerfectScrollbar;
import ClipboardJS from "clipboard";
window.ClipboardJS = ClipboardJS;

// Vue 3rd party plugins
// import vuetify from "./core/plugins/vuetify";
import "./core/plugins/perfect-scrollbar";
import "./core/plugins/inline-svg";
import "./core/plugins/apexcharts";
import "./core/plugins/metronic";
import "@mdi/font/css/materialdesignicons.css";

// API service init
//ApiService.init();

// Remove this to disable mock API
//MockService.init();


import vuetify from "vuetify";

window.toastr = require('toastr')

Vue.use(VueToastr2)
Vue.use(vuetify);
Vue.component('app-layout',AppLayout);

Vue.prototype.$route = route
Vue.component('inertia-link',InertiaLink);
InertiaProgress.init();

createInertiaApp({
    id:'app',
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            store,
            vuetify:new vuetify(),
            render: h => h(App, props),
        }).$mount(el)
    },
})
