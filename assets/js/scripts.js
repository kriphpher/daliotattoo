document.addEventListener('DOMContentLoaded', function(){
    const menuLinks = document.querySelectorAll('.navbar-nav .nav-link');
    menuLinks.forEach(link => {
      link.addEventListener('click', function(e){
        e.preventDefault();
            const targetId=this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            const offcanvasElement = document.querySelector('.offcanvas');
            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
            offcanvasInstance.hide();
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            })
        })
    })
})

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
        else {
            entry.target.classList.remove('show');
        }
    })
})

const hiddenElements = document.queryselectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

// alert("Site não esta pronto ainda")