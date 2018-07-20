<div class="page-header">
  <h1>{!! App::title() !!}</h1>
  @if (is_home())
    <ul>
      @foreach (get_categories() as $categorie)
        <li>
          <a href="{{ get_category_link($categorie->cat_ID) }}">
              {{ $categorie->name }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</div>
