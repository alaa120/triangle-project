<header class="banner">
  
  
    //start top bar

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif

      <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <span> <i class="fas fa-phone"></i> +2 0223323233223 </span>
            <span><i class="fas fa-map-marker-alt"></i> 48 Saad zaghlol st ,Giza egypt</span>
          </div>
          <div class="col-sm text-right">

              <ul class="bar-icons" >
                  <li><a href=""><i class="fas fa-envelope"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
  
      //start carousel
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <span class="n-logo">
                <img src="http://localhost/new-project/web/app/themes/new-theme/dist/images/apple-logo.png" alt="" >
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">News</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sectors
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Careers</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Management Team</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fas fa-search-plus"></i></a>   
                  </li>
                </div>
              </div>
            </nav>
</header>
