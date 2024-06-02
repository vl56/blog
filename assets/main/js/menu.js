document.addEventListener('DOMContentLoaded', function() {
  const menuItems = document.querySelectorAll('.submenu');

  menuItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
      const submenu = this.querySelector('ul');
      if (submenu) {
        submenu.style.display = 'block';
        setTimeout(() => {
          submenu.style.opacity = '1';
        }, 10);
      }
    });

    item.addEventListener('mouseleave', function() {
      const submenu = this.querySelector('ul');
      if (submenu) {
        submenu.style.opacity = '0';
        setTimeout(() => {
          submenu.style.display = 'none';
        }, 300);
      }
    });
  });
});
