window.addEventListener("DOMContentLoaded", () => {
    setup();
    changeSplide();
});
const btnScrollTo = document.querySelector("#scrolly");
const section1 = document.querySelector(".point");
btnScrollTo.addEventListener("click", function (e) {
    const s1coords = section1.getBoundingClientRect();
    /*console.log(s1coords);
    console.log(e.target.getBoundingClientRect());
    console.log("Current Scroll (X/Y", window.pageXOffset, pageYOffset);*/
    window.scrollTo({
        left: s1coords.left + window.pageXOffset,
        top: s1coords.top + window.pageYOffset,
        behavior: "smooth",
    });
    //section1.scrollIntoView({behavior: "smooth"}); modern way
});
/*
const faders = document.querySelectorAll(".fade-in");
const appearOptions = {
    threshold: 1,               // whole thing is there before it fades in\
    rootMargin: "0px"
};
const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry =>{
        if (!entry.isIntersecting){
        return;} else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target); // stop looking once action is complete
        }
    })
},
 appearOptions);

 faders.forEach(fader =>{
     appearOnScroll.observe(fader);
 })
 */
function setup() {
    const options = {
        rootMargin: "0px 0px -10px 0px"
    }
    const observer = new IntersectionObserver((entries,
        observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target);
            } else {
                return;
            }
        })
    }, options);
    // need to delect the paragraph text on the form
    /*const headerTwo = document.querySelector("h2");
    observer.observe(headerTwo); */
    const paras = document.querySelectorAll("p");
    paras.forEach(p => observer.observe(p));
}

function changeSplide() {
    new Splide('#image-slider', {
        cover: true,
        heightRatio: 0.5,
    }).mount();
}
