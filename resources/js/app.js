/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var moment = require('moment');

const vueapp = new Vue({
    el: '#vueId',
    data() {
        return {
            info: null
        }
    },
    beforeMount() {
        this.getData();
    },
    methods: {
        async getData() {
            const res = await fetch('http://api.openweathermap.org/data/2.5/weather?lat=-36.8483&lon=174.7625&units=metric&appid=554be8b1edfa95808cde6b443b9d7df6');
            const data = await res.json();
            this.info = data;
            this.info.sunrise = moment.unix(data.sys.sunrise).format("MMMM Do YYYY, h:mm:ss a");
            this.info.sunset = moment.unix(data.sys.sunset).format("MMMM Do YYYY, h:mm:ss a");
            this.info.current = moment.unix(data.dt).format("MMMM Do YYYY, h:mm:ss a");
        }
    }

});
