<!--begin::Aside-->
<div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('admin') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("Dashboard")}}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('news.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("News")}}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('teams.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("Team")}}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('clients.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("Clients")}}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('products.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("Products")}}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("Categories")}}</span>
                    </a>
                </li> <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">{{__("User")}}</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->