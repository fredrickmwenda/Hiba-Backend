<nav class="sidebar">
@auth
  <div class="sidebar-header">
    @if(Auth::user()->hasRole('CompanyAdmin') || Auth::user()->hasRole('Employee'))
    <a href="{{route('company.dashboard')}}" class="sidebar-brand">
      Hiiba
      <!-- <span>UI</span> -->
    </a>
    @else
    <a href="{{route('dashboard')}}" class="sidebar-brand">
      Hiiba
      <!-- <span>UI</span> -->
    </a>
    @endif

    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        @if(Auth::user()->hasRole('CompanyAdmin') || Auth::user()->hasRole('Employee'))
          <a href="{{route('company.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        @else
          <a href="{{route('dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        @endif

      </li>
      
          
      @php 
          $companyUser = \App\Models\CompanyUser::where('user_id', Auth::user()->id)->first();
          
      @endphp
      @if(Auth::user()->roles != 'Employee' || ($companyUser && $companyUser->approved != 'no'))
        <li class="nav-item nav-category">Pages</li>
        
        @can('View Category')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="products">
            <i class="link-icon" data-feather="codepen"></i>
            <span class="link-title">Categories</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="categories">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create Category')
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan

        @can('View Company')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="activity"></i>
            <span class="link-title">Company</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('company.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create Company')
              <li class="nav-item">
                <a href="{{route('company.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan

        @can('View Progran')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#products" role="button" aria-expanded="false" aria-controls="products">
            <i class="link-icon" data-feather="tag"></i>
            <span class="link-title">Programs</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="products">
            <ul class="nav sub-menu">
        
              <li class="nav-item">
                <a href="{{route('program.index')}}" class="nav-link">Index</a>
              </li>

              @can('Create Progran')
              <li class="nav-item">
                <a href="{{route('program.create')}}" class="nav-link">Create</a>
              </li>
              @endcan
              

            </ul>
          </div>
        </li>
        @endcan

        @can('View Reward')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#rewards" role="button" aria-expanded="false" aria-controls="rewards">
            <i class="link-icon" data-feather="gift"></i>
            <span class="link-title">Rewards</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="rewards">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('reward.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create Rewards')
              <li class="nav-item">
                <a href="{{route('reward.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan

        <!-- @can('View Transaction')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#transactions" role="button" aria-expanded="false" aria-controls="products">
            <i class="link-icon" data-feather="shopping-cart"></i>
            <span class="link-title">Transactions</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="transactions">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="" class="nav-link">Index</a>
              </li>
           

            </ul>
          </div>
        </li>
        @endcan -->


        @can('View Card')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#virtual-card" role="button" aria-expanded="false" aria-controls="virtual-card">
            <i class="link-icon" data-feather="credit-card"></i>
            <span class="link-title">Virtual Cards</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="virtual-card">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('virtual.index')}}" class="nav-link">Index</a>
              </li>
            </ul>
          </div>
        </li>
        @endcan
        
        @can('View Redemption')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#redeem" role="button" aria-expanded="false" aria-controls="redeem">
            <i class="link-icon" data-feather="download-cloud"></i>
            <span class="link-title">Redemptions</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="redeem">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('redeem.index')}}" class="nav-link">Index</a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link">Create</a>
              </li> -->

            </ul>
          </div>
        </li>
        @endcan

        @can('View Sambaza')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#transfer" role="button" aria-expanded="false" aria-controls="transfer">          
          <i class="link-icon" data-feather="refresh-ccw"></i>
            <span class="link-title">Sambaza</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="transfer">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('sambaza.index')}}" class="nav-link">Index</a>
              </li>
            </ul>
          </div>
        </li>
        @endcan

        @can('View Ad')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ad" role="button" aria-expanded="false" aria-controls="ads">
            <i class="link-icon" data-feather="volume-2"></i>           
            <span class="link-title">Ads</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="ads">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('ad.index')}}" class="nav-link">Index</a>
              </li>
              <!-- @can('Create Ad')
              <li class="nav-item">
                <a href="{{route('ad.create')}}" class="nav-link">Create</a>
              </li>
              @endcan -->

            </ul>
          </div>
        </li>
        @endcan

        
        @can('View Notification')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#notification" role="button" aria-expanded="false" aria-controls="notification">
            <i class="link-icon" data-feather="download-cloud"></i>
            <span class="link-title">Notifications</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="notification">
            <ul class="nav sub-menu">
              @can('Create Notification')
              <li class="nav-item">
                <a href="{{route('notifications.create')}}" class="nav-link">Send Notification</a>
              </li>
              @endcan
      

            </ul>
          </div>
        </li>
        @endcan

        @can('View Customers')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="products">
            <i class="link-icon" data-feather="shopping-cart"></i>
            <span class="link-title">Customers</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="customers">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="" class="nav-link">Index</a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link">Create</a>
              </li> -->

            </ul>
          </div>
        </li>
        @endCan

        @can('View User')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="users">
            <i class="link-icon" data-feather="user"></i>
            <span class="link-title">Users</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="users">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create User')
              <li class="nav-item">
                <a href="{{route('user.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan


        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="reports">
            <i class="link-icon" data-feather="file-text"></i>
            <span class="link-title">Reports</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="reports">
            <ul class="nav sub-menu">
      
              
              <li class="nav-item">
                <a href="{{route('reports.optinrate')}}" class="nav-link">OptInRate</a>
              </li>


              <li class="nav-item">
                <a href="{{route('reports.redemption')}}" class="nav-link">Redemption</a>
              </li>

              <li class="nav-item">
                <a href="{{route('reports.sambaza')}}" class="nav-link">Sambaza</a>
              </li>
              

            </ul>
          </div>
        </li>
        

        @can('View Permission')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#permissions" role="button" aria-expanded="false" aria-controls="permissions">
            <i class="link-icon" data-feather="lock"></i>
            <span class="link-title">Permissions</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="permissions">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('permission.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create Permission')
              <li class="nav-item">
                <a href="{{route('permission.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan

        @can('View Role')
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#roles" role="button" aria-expanded="false" aria-controls="roles">
            <i class="link-icon" data-feather="key"></i>
            <span class="link-title">Roles</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="roles">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link">Index</a>
              </li>
              @can('Create Role')
              <li class="nav-item">
                <a href="{{route('role.create')}}" class="nav-link">Create</a>
              </li>
              @endcan

            </ul>
          </div>
        </li>
        @endcan

      @endif
    
    </ul>
  </div>
@endauth
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
    </a>
    <div class="theme-wrapper">
        <h6 class="text-muted mb-2">Light Theme:</h6>
        <a class="theme-item" href="#" onclick="setTheme('demo1')">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
        </a>
        <h6 class="text-muted mb-2">Dark Theme:</h6>
        <a class="theme-item active" href="#" onclick="setTheme('demo2')">
            <img src="../assets/images/screenshots/dark.jpg" alt="dark theme">
        </a>
    </div>
    </div>
</nav>