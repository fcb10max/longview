<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longview</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>

  <nav class='top-nav'>
    <img class='logo' src="<?php echo get_template_directory_uri() . '/images/logo.jpg'?>" alt="img">
    <div id='burger-menu' onclick ='show_hide_menu()'>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <div class='wideMenu'>
    <div class='wideMenuWrap'>

      <div class='wideMenuitem'>
        
        <div class='wideMenuItemTitle'>
        
          <p>How can we help?</p>
        
        </div>
        
        <div class='wideMenuItemContent'>
        
          <a href='#'>I'd like better property management</a>
          <a href='#'>I am interested in Guaranteed Rent</a>
          <a href='#'>I am interested in Air BnB management</a>
          <a href='#'>I am interested in selling my property</a>
          <a href='#'>What od you mean "accidental landlord"?</a>
        
        </div>

      </div>


      <div class='wideMenuitem'>
        <div class='wideMenuItemTitle'>
        
          <p>Who are you?</p>
        
        </div>
        
        <div class='wideMenuItemContent'>
        
          <a href='#'>I am a property investor/landlord</a>
          <a href='#'>I want to join the LongView team</a>
          <a href='#'>I am a tenant</a>
          <a href='#'>I am from the media</a>
          <a href='#'>I am a potential partner</a>
          <a href='#'>I am a vendor</a>
          <a href='#'>I am a buyer</a>
          <a href='#'>I am part of an Owners Corporation</a>
        
        </div>
      
      </div>


      <div class='wideMenuitem'>
      
        <div class='wideMenuItemTitle'>
        
          <p>Knowledge hub</p>
        
        </div>
        
        <div class='wideMenuItemContent'>
        
          <a href='#'>Property Management</a>
          <a href='#'>Property Investment</a>
          <a href='#'>Property Development</a>
          <a href='#'>Property Finance</a>
          <a href='#'>Property Renovations</a>
          <a href='#'>I am a landlord</a>
          <a href='#'>I am a tenant</a>
        
        </div>
      
      </div>


      <div class='wideMenuitem'>
      
        <div class='wideMenuItemTitle'>

        <p>About us</p>
        
        </div>
        
        <div class='wideMenuItemContent'>
        
          <a href='#'>About LongView</a>
          <a href='#'>Our team</a>
          <a href='#'>Case Studies</a>
          <a href='#'>FAQ</a>
          <a href='#'>Work with us</a>
        
        </div>
      
      </div>


      <div class='wideMenuitem'>

        <div class='wideMenuItemTitle'>

          <p>Contact us</p>

        </div>

        <div class='wideMenuItemContent'>

          <p id='phone'>Phone: 1800 931 784</p>
          <p id='email'>Email: info@longview.com.au</p>
          <a href='#' id='inquiry'>Send Inquiry</a>

        </div>

        <div class="socials">
          <div class="social"><a href="#" class="fa fa-facebook"></a></div>
          <div class="social"><a href="#" class="fa fa-linkedin"></a> </div>
        </div>

      </div>
  
    </div>
  </div>



  <div class='shortMenu'>
    <div class='shortMenuNavBar'>
        <img src="<?php echo get_template_directory_uri() . '/images/logo_white.png'?>" alt="">
        <div id='short-burger-menu' onclick='hide_short_menu()'>
          <span></span>
          <span></span>
        </div>
    </div>
    <div class='shortMenuWrap'>

    <details class='content'>
      <summary class=menuTitle><p>How can we help?</p></summary>
      <a href="#">I’d like better property management</a>
      <a href="#">I am interested in Guaranteed Rent</a>
      <a href="#">I am interested in Air BnB management</a>
      <a href="#">I am interested in selling my property </a>
      <a href="#">What do you mean “accidental landlord”?</a>
    </details>

    <details class='content'>
      <summary class=menuTitle><p>Who are you?</p></summary>
      <a href="#">I am a property investor/landlord</a>
      <a href="#">I want to join the LongView team</a>
      <a href="#">I am a tenant</a>
      <a href="#">I am from the media</a>
      <a href="#">I am a potential partner </a>
      <a href="#">I am a vendor</a>
      <a href="#">I am a buyer</a>
      <a href="#">I am part of an Owners Corporation</a>
    </details>

    <details class='content'>
      <summary class=menuTitle><p>Knowledge hub</p></summary>
      <a href="#">Property Management</a>
      <a href="#">Property Investment</a>
      <a href="#">Property Development</a>
      <a href="#">Property Finance</a>
      <a href="#">Property Renovations</a>
      <a href="#">I am a landlord</a>
      <a href="#">I am a tenant</a>
    </details>

    <details class='content'>
      <summary class=menuTitle><p>About us</p></summary>
      <a href="#">About LongView</a>
      <a href="#">Our team</a>
      <a href="#">Case Studies</a>
      <a href="#">FAQ</a>
      <a href="#">Work with us</a>
    </details>

    <div class='shortMenuitem'>

      <div class='shortMenuItemTitle'>

        <p class='shortMenuItem-Title'>Contact us</p>

      </div>

      <div class='shortMenuItemContent'>

        <p id='phone'>Phone: 1800 931 784</p>
        <p id='email'>Email: info@longview.com.au</p>
        <a href='#' id='inquiry'>Send Inquiry</a>

      </div>

      <div class="socials">
        <div class="social"><a href="#" class="fa fa-facebook"></a></div>
        <div class="social"><a href="#" class="fa fa-linkedin"></a> </div>
      </div>
    </div>

    </div>
  </div>

</header>
