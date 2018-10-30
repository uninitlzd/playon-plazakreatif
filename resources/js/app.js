import 'animate.css'
import 'fullpage-vue/src/fullpage.css'
import VueFullpage from 'fullpage-vue'
import VueCountdown from '@chenfengyuan/vue-countdown'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueFullpage);

Vue.component(VueCountdown.name, VueCountdown);
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('homepage-component', require('./components/HomepageComponent.vue'));
Vue.component('homepage-countdown', require('./components/HomepageCountdown.vue'));
Vue.component('ragam-acara', require('./components/RagamAcaraSection.vue'));
Vue.component('fullpage-wrapper', require('./components/FullPageWrapper.vue'));
Vue.component('card-slider', require('./components/CardSlider.vue'));
Vue.component('workshop-slider', require('./components/WorkshopSlider.vue'));
Vue.component('lomba-slider', require('./components/LombaSlider.vue'));
Vue.component('timeline-acara', require('./components/TimelineAcara.vue'));
Vue.component('card', require('./components/Card'));

// or for a single instance
import Sticky from 'vue-sticky-directive'
import vueSmoothScroll from 'vue-smooth-scroll'
import VueGlide from 'vue-glide-js'
import VueChartkick from 'vue-chartkick'

Vue.use(Sticky);
Vue.use(vueSmoothScroll)
Vue.use(VueGlide)
Vue.use(VueChartkick)

const app = new Vue({
    el: '#app',
});
