"use strict";

var smoothScroll = function smoothScroll(target, duration) {
  var elementTarget = document.querySelector(target);
  var targetPosition = elementTarget.getBoundingClientRect().top;
  var startPosition = window.pageYOffset;
  var targetDistance = targetPosition - startPosition;
  var startTime = null;

  var animation = function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    var timeElapsed = currentTime - startTime;
    var run = ease(timeElapsed, startPosition, targetDistance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  };

  var ease = function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }; //from gisma;


  requestAnimationFrame(animation);
};

var aboutSection = document.querySelector('.about-link');
var contactSection = document.querySelector('.contact-link');
var secondContactSection = document.querySelector('.hero-contact-link');
var workSection = document.querySelector('.work-link');
aboutSection.addEventListener('click', function () {
  smoothScroll('#about-me', 1000);
});
contactSection.addEventListener('click', function () {
  smoothScroll('#contact-me', 1000);
});
secondContactSection.addEventListener('click', function () {
  smoothScroll('#contact-me', 1000);
});
workSection.addEventListener('click', function () {
  smoothScroll('#work', 1000);
});