"use strict";

var initialPageAnimation = function initialPageAnimation() {
  if (window.screen.width > 768) {
    var tl = gsap.timeline();
    tl.fromTo(".logo", {
      x: -200,
      opacity: 0
    }, {
      x: 0,
      opacity: 1,
      delay: 0.5,
      duration: 1.3
    }).fromTo(".nav-links", {
      x: 200,
      opacity: 0
    }, {
      x: 0,
      opacity: 1,
      delay: 0.5,
      duration: 1.3
    }, ">-1.8").fromTo(".hero-intro", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    }).fromTo(".hero h2", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    }).fromTo(".hero-text", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    }).fromTo(".hero-contact", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    });
  }
};

var runScrollAnimation = function runScrollAnimation() {
  var aboutSection = document.querySelector('.about');
  var workSection = document.querySelector('.work-section');
  var contactSection = document.querySelector('.contact');
  var tlAboutScroll = new gsap.timeline({
    onUpdate: debugPercentage
  }); //this function is optional as it is just for debugging purposes

  var debugPercentage = function debugPercentage() {
    console.log(tlServicesScroll.progress());
  };

  tlAboutScroll.fromTo('.about', {
    opacity: 0
  }, {
    opacity: 1,
    duration: 4
  });
  var homeController = new ScrollMagic.Controller();
  var aboutScene = new ScrollMagic.Scene({
    triggerElement: '.about',
    triggerHook: 1,
    duration: aboutSection.offsetHeight
  }).setTween(tlAboutScroll).addTo(homeController); //Work Section Scroll animation

  var tlWorkSectionScroll = new gsap.timeline();

  if (window.screen.width > 1200) {
    tlWorkSectionScroll.fromTo('.work-section', {
      opacity: 0
    }, {
      opacity: 1,
      duration: 4
    });
    var workSectionScene = new ScrollMagic.Scene({
      triggerElement: '.work-section',
      triggerHook: 1,
      duration: workSection.offsetHeight
    }).setTween(tlWorkSectionScroll).addTo(homeController);
  } else {
    tlWorkSectionScroll.kill();
  } //Contact scroll animation


  var tlContactScroll = new gsap.timeline();

  if (window.screen.width > 1200) {
    tlContactScroll.fromTo('.contact', {
      opacity: 0
    }, {
      opacity: 1,
      duration: 4
    });
    var contactScene = new ScrollMagic.Scene({
      triggerElement: '.contact',
      triggerHook: 1,
      duration: contactSection.offsetHeight
    }).setTween(tlContactScroll).addTo(homeController);
  } else {
    tlContactScroll.kill();
  } //.addIndicators can be added after the setTween for debugging purposes 

};

initialPageAnimation();
runScrollAnimation();