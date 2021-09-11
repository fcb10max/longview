console.log('script');

const burgerMenu = document.getElementById('burger-menu');
const wideMenu = document.querySelector('.wideMenu');
const shortMenu = document.querySelector('.shortMenu');
const shortMenuNavBar = document.querySelector('.shortMenuNavBar');
const shortMenuWrap = document.querySelector('.shortMenuWrap');
const shortBurgerMenu = document.getElementById('short-burger-menu');

const media_query = window.matchMedia( "(max-width:375px)" );

function show_hide_menu() {
  console.log('clicked');
  if (!media_query.matches) {
    console.log('not media');
    shortMenu.style.display = 'none';
    if (burgerMenu.classList.contains('open')) {
      burgerMenu.classList = '';
      wideMenu.style.left = '100%';
      wideMenu.style.opacity = '0';
      document.body.style.position = 'static';
    } else {
      document.body.style.position = 'fixed';
      burgerMenu.classList = 'open';
      wideMenu.style.display = 'flex';
      wideMenu.style.left = '0';
      wideMenu.style.opacity = '1';
    }
  } else if (media_query.matches) {
    console.log('media');
    shortMenu.style.display = 'flex';
    shortMenu.style.left = '0';
    shortMenu.style.opacity = '1';
  }
}

function hide_short_menu() {
  if (media_query.matches) {
    shortMenu.style.left = '100%';
    document.body.style.position = '';
    shortMenu.style.opacity = '0';
  }
}