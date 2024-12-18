 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>@lang('Dashboard')</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @if(App\Traits\AppHelper::perUser('users.index'))
      
     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>{{__('Forms')}}</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>{{__('Tables')}}</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('users.index')}}">
              <i class="bi bi-circle"></i><span>{{__('Users')}}</span>
            </a>
          </li>
          <li>
            <a href="{{route('roles.index')}}">
              <i class="bi bi-circle"></i><span>{{__('Roles')}}</span>
            </a>
          </li>
          <li>
            <a href="{{route('categories.index')}}">
              <i class="bi bi-circle"></i><span>{{__('Categories')}}</span>
            </a>
          </li>
          <li>
            <a href="{{route('products.index')}}">
              <i class="bi bi-circle"></i><span>{{__('Products')}}</span>
            </a>
          </li>
          <li>
            <a href="{{route('songs.index')}}">
              <i class="bi bi-circle"></i><span>{{__('Songs')}}</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     
      

      <li class="nav-heading">{{__('Pages')}}</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('users.show', auth()->user()->id) }}">
            <i class="bi bi-person"></i>
            <span>{{__('Profile')}}</span>
        </a>
    </li>
    

     

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>{{__('Contact')}}</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>{{__('Register')}}</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>{{__('Login')}}</span>
        </a>
      </li><!-- End Login Page Nav -->


      @endif
    </ul>

  </aside><!-- End Sidebar-->