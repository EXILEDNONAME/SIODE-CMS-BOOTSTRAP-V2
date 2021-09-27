<li class="menu-section">
  <h4 class="menu-text"> Configuration </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/configuration/generals*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/configuration/generals" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Generals </span>
  </a>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/themes*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Themes </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/themes/1*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/themes/1" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Other </span>
        </a>
      </li>
        <li class="menu-item {{ (request()->is('dashboard/themes/2*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/themes/2" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Bizland </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item {{ (request()->is('dashboard/sections*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/sections" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Sections </span>
  </a>
</li>
