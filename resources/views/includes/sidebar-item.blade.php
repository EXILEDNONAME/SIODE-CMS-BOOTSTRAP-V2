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

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/sections*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> Sections </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/sections/about*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/sections/about" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> About </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Count </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Testimonial </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Contact </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Pricing </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Service </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/reports*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/dummy/reports" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Team </span>
        </a>
      </li>
    </ul>
  </div>
</li>
