ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 100
});

ScrollReveal().reveal('#profession, #About article , h1, #birth, .skill-title', {origin: 'top'});
ScrollReveal().reveal('figure, .form-floating, .skills, .skill-bar, #timeline', {origin: 'bottom'});
ScrollReveal().reveal('.left-project, .left-checkpoint, #triangle', {origin: 'left'});
ScrollReveal().reveal('.right-project, .right-checkpoint', {origin: 'right'});