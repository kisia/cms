require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

var app = new Vue({
    el: '#app',
    data:{}
});

$(document).read(function(){
    $('button.dropdown').hover(function(e){
        $(this).toggleClass('is-open');
    });
});
