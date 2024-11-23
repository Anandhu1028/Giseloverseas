<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
      <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
      <a href="{{route('index')}}" class="sidebar-logo">
        <img src="{{asset('assets/img/Untitled-1.png')}}" alt="site logo" class="light-logo">
        
      </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu " id="sidebar-menu">
          <li class="dropdown">
            <a href="{{route('dashboard')}}" class="btn btn-primary-600 text-light-600 radius-8 px-20 py-11 mb-6" style="display: inline-block; width: 250px;"> <span>Dashboard</span></a>
            <div>
              <ul >
                <li style="margin-bottom: 5px;">
                    <a href="{{route('admin.gallery')}}" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11 me-3" style="display: inline-block; width: 250px;">Gallery</a>
                </li>
                <li style="margin-bottom: 5px;">
                    <a href="{{route('admin.news')}}" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11 me-3" style="display: inline-block; width: 250px;">News Blog</a>
                </li>
                <li style="margin-bottom: 5px;">
                    <a href="{{route('admin.service')}}" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11" style="display: inline-block; width: 250px;">Service</a>
                </li>
                
              </ul>
            </div>
          </li>
        </ul>
      </div>
      

    
  </aside>