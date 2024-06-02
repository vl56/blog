document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
  
    menuToggle.addEventListener('click', function() {
      this.querySelector('.hamburger').classList.toggle('active');
      menu.classList.toggle('open');
    });
  });
  