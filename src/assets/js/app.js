import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import 'slick-carousel';
import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import './navigation';
import './home';
import './about';
import './services';
import './contact-us';
import './faqs';
import './general';

$(document).foundation();


//Smooth scrolling with links
$('.scroll-down a').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
});