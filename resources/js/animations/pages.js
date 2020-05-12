
const initialPageAnimation = ()=>{
  // const mql = window.matchMedia('screen and (max-width: 767px)');
    let tl = gsap.timeline()
      tl.fromTo(
        ".logo",
        {
          x: -200,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          delay: 0.5,
          duration: 1.3,
        }
    ) .fromTo(
          ".nav-links",
          {
            x: 200,
            opacity: 0,
          },
          {
            x: 0,
            opacity: 1,
            delay: 0.5,
            duration: 1.3,
          },
          ">-1.8"
    ).fromTo(
      ".hamburger",
      {
        x: 200,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        delay: 0.5,
        duration: 1.3,
      },
      ">-1.8"
    )
    .fromTo(
      ".hero-intro",
      {
        x: 0,
        y: 100,
        opacity: 0,
      },
      {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 1.2,
      }
    ).fromTo(
        ".hero h2",
        {
            x: 0,
            y: 100,
           opacity: 0,
        },
        {
            x: 0,
            y: 0,
            opacity: 1,
            duration: 1.2,
        }
        
    ).fromTo(
        ".hero-text",
        {
            x: 0,
            y: 100,
           opacity: 0,
        },
        {
            x: 0,
            y: 0,
            opacity: 1,
            duration: 1.2,
        }
        
    ).fromTo(
      ".hero-text-1",
      {
          x: 0,
          y: 100,
         opacity: 0,
      },
      {
          x: 0,
          y: 0,
          opacity: 1,
          duration: 1.2,
      },">-1.8"
      
  ).fromTo(
        ".hero-contact",
        {
            x: 0,
            y: 100,
           opacity: 0,
        },
        {
            x: 0,
            y: 0,
            opacity: 1,
            duration: 1.2,
        }
        
    )
   
      
}
      

// const initialPageSmallerScreenAnimation = ()=>{
//       let smallerScreenTl = gsap.timeline();
//       if(window.screen.width < 769){
//         smallerScreenTl.fromTo(
//           ".logo",
//           {
//             x: -200,
//             opacity: 0,
//           },
//           {
//             x: 0,
//             opacity: 1,
//             delay: 0.5,
//             duration: 1.3,
//           }
//       ).fromTo(
//             ".hamburger",
//             {
//               x: 200,
//               opacity: 0,
//             },
//             {
//               x: 0,
//               opacity: 1,
//               delay: 0.5,
//               duration: 1.3,
//             },
//             ">-1.8"
//       )
//       .fromTo(
//         ".hero-intro",
//         {
//           x: 0,
//           y: 100,
//           opacity: 0,
//         },
//         {
//           x: 0,
//           y: 0,
//           opacity: 1,
//           duration: 1.2,
//         }
//       ).fromTo(
//           ".hero h2",
//           {
//               x: 0,
//               y: 100,
//              opacity: 0,
//           },
//           {
//               x: 0,
//               y: 0,
//               opacity: 1,
//               duration: 1.2,
//           }
          
//       ).fromTo(
//           ".hero-text-1",
//           {
//               x: 0,
//               y: 100,
//              opacity: 0,
//           },
//           {
//               x: 0,
//               y: 0,
//               opacity: 1,
//               duration: 1.2,
//           }
          
//       ).fromTo(
//           ".hero-contact",
//           {
//               x: 0,
//               y: 100,
//              opacity: 0,
//           },
//           {
//               x: 0,
//               y: 0,
//               opacity: 1,
//               duration: 1.2,
//           }
          
//       )
//       }else{
//         smallerScreenTl.kill();
//       }
     
// }
      

const runScrollAnimation = ()=>{
  
    const aboutSection = document.querySelector('.about');
    const workSectionOne = document.querySelector('.work-text-1');
    const workSectionTwo = document.querySelector('.work-text-2');
    const workSectionThree = document.querySelector('.work-text-3');
    // const workMobileTwo = document.querySelector('.mobile-text');
    const contactSection = document.querySelector('.contact');
    const tlAboutScroll = new gsap.timeline({onUpdate: debugPercentage});
    const mql = window.matchMedia('(min-width: 1400px)');
     
    //this function is optional as it is just for debugging purposes
    const debugPercentage = ()=>{
        console.log(tlServicesScroll.progress())
    }
    
    tlAboutScroll.fromTo('.about', {opacity:0}, {opacity:1, duration:4});
  
    let homeController = new ScrollMagic.Controller();
    let aboutScene = new ScrollMagic.Scene({
        triggerElement:'.about',
        triggerHook:1,
        duration:aboutSection.offsetHeight
    })
    .setTween(tlAboutScroll)
    .addTo(homeController);
  
    //Work Section One Scroll animation
  
    const tlWorkSectionOneScroll = new gsap.timeline();
    
        tlWorkSectionOneScroll.fromTo('.image-container-1', {opacity:0, x:'-100%'}, {opacity:1, x:0, ease: Expo.easeOut, duration:4})
      .fromTo('.work-text-1', {opacity:0, ease: Expo.easeOut, x:'100%'}, {opacity:1, x:0, duration:4}, ">-1.8");
      let workSectionOneScene = new ScrollMagic.Scene({
          triggerElement:'.work-text-1',
          triggerHook:1,
          duration:workSectionOne.offsetHeight
      })
      .setTween(tlWorkSectionOneScroll)
      .addTo(homeController);
      
      
     
   
    //Work Section Two Scroll animation
    
      const tlWorkSectionTwoScroll = new gsap.timeline();
     
      tlWorkSectionTwoScroll.fromTo('.image-container-2', {opacity:0, x:'100%'}, {opacity:1, x:0,ease: Expo.easeOut, duration:4})
      .fromTo('.work-text-2', {opacity:0, ease: Expo.easeOut, x:'-100%'}, {opacity:1, x:0, duration:4}, ">-1.8");
      let workSectionTwoScene = new ScrollMagic.Scene({
          triggerElement:'.work-text-2',
          triggerHook:1,
          duration:workSectionTwo.offsetHeight
      })
      .setTween(tlWorkSectionTwoScroll)
      .addTo(homeController);
    
    
    
   
    //Work Section Three Scroll animation
  
    const tlWorkSectionThreeScroll = new gsap.timeline();
     
        tlWorkSectionThreeScroll.fromTo('.image-container-3', {opacity:0, x:'-100%'}, {opacity:1, x:0, ease: Expo.easeOut, duration:4})
        .fromTo('.work-text-3', {opacity:0, ease: Expo.easeOut, x:'100%'}, {opacity:1, x:0, duration:4}, ">-1.8");
        let workSectionScene = new ScrollMagic.Scene({
            triggerElement:'.work-text-3',
            triggerHook:1,
            duration:workSectionThree.offsetHeight
        })
        .setTween(tlWorkSectionThreeScroll)
        .addTo(homeController);
     
     
    
   
  
  
    //Contact scroll animation
    const tlContactScroll = new gsap.timeline();
    if(mql.matches){
      tlContactScroll.fromTo('.contact', {opacity:0}, {opacity:1, duration:4});
    
      let contactScene = new ScrollMagic.Scene({
          triggerElement:'.contact',
          triggerHook:1,
          duration:contactSection.offsetHeight
      })
      .setTween(tlContactScroll)
      .addTo(homeController);
    }else{
      tlContactScroll.kill();
    }
      
  }
   
  

   
 



initialPageAnimation();
runScrollAnimation();
// initialPageSmallerScreenAnimation();