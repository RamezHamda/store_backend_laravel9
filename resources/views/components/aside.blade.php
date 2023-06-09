<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
      <img src="{{ asset('adminassets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8') }}">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- menu-open, active --}}
               <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link
                {{ active('admin.index') }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    {{ __('admin.Dashboard') }}
                  </p>
                </a>
              </li>

          <li class="nav-item {{ active('categories', 'menu-open') }}">
            <a href="#" class="nav-link {{ active('categories') }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                {{ __('admin.Categories') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('show-categories')
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ active('admin.categories.index') }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('admin.All Categories') }}</p>
                    </a>
                  </li>
                @endcan

              <li class="nav-item">
                <a href="{{ route('admin.categories.create') }}" class="nav-link {{ active('admin.categories.create') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add New') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ active('products', 'menu-open') }}">
            <a href="#" class="nav-link {{ active('products') }}">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                {{ __('admin.Products') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @can('show-products')
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ active('admin.products.index') }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('admin.All Products') }}</p>
                    </a>
                  </li>
                @endcan

              <li class="nav-item">
                <a href="{{ route('admin.products.create') }}" class="nav-link {{ active('admin.products.create') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add New') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ active('coupons', 'menu-open') }}">
            <a href="#" class="nav-link {{ active('coupons') }}">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                {{ __('admin.Coupons') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.coupons.index') }}" class="nav-link {{ active('admin.coupons.index') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.All Coupons') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.coupons.create') }}" class="nav-link {{ active('admin.coupons.create') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add New') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.orders') }}" class="nav-link {{ active('admin.orders') }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                {{ __('admin.Orders') }}
                <span class="right badge badge-danger">20</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.payments') }}" class="nav-link {{ active('admin.payments') }}">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                {{ __('admin.Payments') }}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.customers') }}" class="nav-link {{ active('admin.customers') }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                {{ __('admin.Customers') }}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.admins') }}" class="nav-link {{ active('admin.admins') }}">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                {{ __('admin.Admins') }}
              </p>
            </a>
          </li>

          @if (Auth::user()->type == 'super-admin')
          <li class="nav-item {{ active('roles', 'menu-open') }}">
            <a href="#" class="nav-link {{ active('roles') }}">
              <i class="nav-icon fas fa-shield-alt"></i>
              <p>
                {{ __('admin.Roles') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.roles.index') }}" class="nav-link {{ active('admin.roles.index') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.All Roles') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.roles.create') }}" class="nav-link {{ active('admin.roles.create') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add New') }}</p>
                </a>
              </li>
            </ul>
          </li>
          @endif


          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
