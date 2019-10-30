<header id="site-header">
  <div class="container">
    <nav class="main-nav">
        <a href="{{ home_url('/') }}"><img src="{{App\site_brand()}}" alt="{{ get_bloginfo('name', 'display') }}" id="logo" /></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation', 
              'menu_class' => 'nav',
              'container'=>false
              ]) !!}
          @endif
        </ul>
    </nav>
  </div>
</header>