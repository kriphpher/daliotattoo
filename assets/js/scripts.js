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