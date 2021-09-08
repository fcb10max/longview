const mainMenu = document.querySelector('.mainMenu');
const header = document.querySelector('.header');
const menu_icon = document.getElementById('nav-icon');
const navigation = document.getElementById('nav');

menu_icon.addEventListener('click', show_close_menu);

function show_close_menu() {
  if (menu_icon.classList.contains('open')) {
      mainMenu.style.left = '100%';
      menu_icon.classList = '';
      nav.style.position = 'static';
      header.style.position = 'static';
  } else {
      mainMenu.style.display = 'flex';
      mainMenu.style.left = '0';
      menu_icon.classList = 'open';
      nav.style.position = 'fixed';
      header.style.position = 'fixed';
      mainMenu.style.zIndex = '10';
      header.style.zIndex = '10';
      header.style.background = '#fff';
      header.style.top = '0';
      nav.style.zIndex = '10';
      nav.style.top = '30px';
  }
}
