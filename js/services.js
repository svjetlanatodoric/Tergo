
function animateElement() {
    const arrowElement = document.getElementById('arrow-text');


    if (isElementInViewport(arrowElement) && !arrowElement.classList.contains('arrow-text')) {
        arrowElement.classList.add('arrow-text');

    }
}

function isElementInViewport(ele) {
    const rect = ele.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Trigger the animation when the page loads
window.addEventListener('scroll', animateElement);


function animateElementIn() {
    const animatedElement = document.getElementById('quote-text');


    if (isElementInViewport(animatedElement) && !animatedElement.classList.contains('quote-text')) {
        animatedElement.classList.add('quote-text');

    }
}

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Trigger the animation when the page loads
window.addEventListener('scroll', animateElementIn);
