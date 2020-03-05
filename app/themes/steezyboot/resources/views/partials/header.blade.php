<header class="banner">
  <div class="container">
    <img class ='img-reponsive' src="@asset('images/STZYLOGO-v2.png')">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
