"use strict";

$(document).ready(function () {});
$(document).ready(function () {$('.slider').slider(); });
$(".button-collapse").sideNav();
$(document).ready(function() {
    $('ul.tabs').tabs();
});
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});