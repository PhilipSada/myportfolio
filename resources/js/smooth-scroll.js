const smoothScroll = (target, duration)=>{
    let elementTarget = document.querySelector(target);
    let targetPosition = elementTarget.getBoundingClientRect().top;
    let startPosition = window.pageYOffset;
    let targetDistance = targetPosition - startPosition;
    let startTime = null;
    
    const animation = (currentTime)=>{
        if(startTime === null) startTime = currentTime;
        let timeElapsed = currentTime -startTime;
        let run = ease(timeElapsed,startPosition,targetDistance, duration);
        window.scrollTo(0,run);
        if(timeElapsed < duration) requestAnimationFrame(animation);
       
    }

    const ease = (t,b,c,d)=>{
        t /= d / 2;
        if(t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }//from gisma;

    requestAnimationFrame(animation);
}

const aboutSection = document.querySelector('.about-link');
const contactSection = document.querySelector('.contact-link');
const secondContactSection = document.querySelector('.hero-contact-link');
const workSection = document.querySelector('.work-link');

aboutSection.addEventListener('click', ()=>{
    smoothScroll('#about-me',1000);
});
contactSection.addEventListener('click', ()=>{
    smoothScroll('#contact-me',1000);
});
secondContactSection.addEventListener('click', ()=>{
    smoothScroll('#contact-me',1000);
});
workSection.addEventListener('click', ()=>{
    smoothScroll('#work',1000);
});
