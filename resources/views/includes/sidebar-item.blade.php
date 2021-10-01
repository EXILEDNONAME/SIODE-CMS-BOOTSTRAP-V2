<li class="menu-section">
  <h4 class="menu-text"> Configuration </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/generals*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/generals" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Generals </span>
  </a>
</li>

<li class="menu-item {{ (request()->is('dashboard/themes*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/themes" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Themes </span>
  </a>
</li>

<li class="menu-section">
  <h4 class="menu-text"> Admin Only </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/sections*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/sections" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Sections </span>
  </a>
</li>
