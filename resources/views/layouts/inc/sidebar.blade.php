<nav style="font-weight: bold;" class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">الرئيسية</span>
            </a>
          </li>



          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-circle-outline menu-icon"></i>
            <span class="menu-title">الأصناف</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">إضافة صنف</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">عرض الاصناف</a></li>
            </ul>
          </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basi" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-circle menu-icon"></i>
              <span class="menu-title">المنتجات</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create')}}">إضافة منتج</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">عرض المنتجات</a></li>
              </ul>
            </div>
            </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#d-brand" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">الماركات</span>
              {{-- <i class="menu-arrow"></i> --}}
            </a>
            <div class="collapse" id="d-brand">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/brands/')}}">إضافة ماركة</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/brands/')}}">عرض الماركات</a></li>
              </ul>
         </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/colors') }}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">الألوان</span>
            </a>
        </li>

        <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/analy/tables')}}">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">المشتريات</span>
                    </a>
                </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('admin/analy/chart') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">رسومات تحليل  </span>
          </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#usr-btn" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-circle menu-icon"></i>
              <span class="menu-title">المستخدمين</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="usr-btn">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/user/index/'. Auth::user()->id .'/check')}}">عرض المتخدمين </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/user-create')}}">إنشاء مستخدم</a></li>
              </ul>
            </div>
            </li>
             {{-- <li class="nav-item">
                <a class="nav-link" href="{{url('admin/user/index/'. Auth::user()->id .'/check')}}">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">المستخدمين</span>
                </a>
            </li> --}}


          {{-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
            <i class="mdi mdi-view-carousel menu-icon"></i>
            <span class="menu-title">Home Slider</span>
            </a>
          </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}

        </ul>
      </nav>
