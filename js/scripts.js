/**
 * Functions and scripts related to the theme.
 */

jQuery(document).ready(function( $ ) {


});

var lineDrawing = anime({
    targets: '#lineDrawing .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: false
});

var menulinks = anime.timeline();

menulinks
    .add({
        targets: '#menulinks li',
        opacity: 0,
        easing: 'easeOutExpo'
    })
    .add({
        targets: '#menulinks li',
        opacity: 1,
        easing: 'easeOutExpo'
    })
