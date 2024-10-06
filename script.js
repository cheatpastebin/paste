document.addEventListener('DOMContentLoaded', () => {
    const starField = document.createElement('div');
    starField.className = 'stars';

    // Number of stars
    const starCount = 200; 

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        
        // Random size and position
        const size = Math.random() * 3 + 1;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.top = `${Math.random() * 100}vh`; 
        star.style.left = `${Math.random() * 100}vw`;
        star.style.animationDuration = `${Math.random() * 2 + 1}s`; 

        starField.appendChild(star);
    }

    document.body.appendChild(starField);
});


document.addEventListener("DOMContentLoaded", function() {
    let links = document.querySelectorAll('.post-link');
    links.forEach(link => {
        link.addEventListener('mouseenter', () => {
            link.style.transform = 'scale(1.1)';
        });
        link.addEventListener('mouseleave', () => {
            link.style.transform = 'scale(1)';
        });
    });

    // Animation for paste content
    let pasteContent = document.getElementById('pasteContent');
    if (pasteContent) {
        pasteContent.style.transition = 'all 0.5s ease';
        pasteContent.style.opacity = '0';
        setTimeout(() => {
            pasteContent.style.opacity = '1';
        }, 200);
    }
});


