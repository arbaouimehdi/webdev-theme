<header class="banner">
  <div class="container">
    <hgroup>
      <h1 class="brand">
        <a href="{{ home_url('/') }}">
          {{ get_bloginfo('name', 'display') }}
        </a>
      </h1>
      <h2>
        {{ get_bloginfo('description', 'display') }}
      </h2>
    </hgroup>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>