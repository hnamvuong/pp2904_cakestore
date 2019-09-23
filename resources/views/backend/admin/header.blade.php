<header id="m_header" class="m-grid__item    m-header "  m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand m-brand--mobile">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="index.html" class="m-brand__logo-wrapper">
                            <img alt="" src="{{ asset('assets/demo/demo9/media/img/logo/logo.png') }}"/>
                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_toggle_mobile" class="m-brand__icon m-brand__toggler m-brand__toggler--left">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon">
                            <i class="flaticon-more"></i>
                        </a>
                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--middle m-stack__item--fit">
                        <!-- BEGIN: Aside Left Toggle -->
                        <a href="javascript:;" id="m_aside_left_toggle" class="m-aside-left-toggler m-aside-left-toggler--left m_aside_left_toggler">
                            <span></span>
                        </a>
                        <!-- END: Aside Left Toggle -->
                    </div>
                    <div class="m-stack__item m-stack__item--fluid">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Dashboard</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item "  aria-haspopup="true"><a  href="products" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">{{ trans('admin.manage_products') }}</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span>  </span></span></a></li>
                                            <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">{{ trans('admin.manage_users') }}</span></a>
                                            </li>
                                            <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">{{ trans('admin.customer_feedbacks') }}</span></a>
                                            </li>
                                            <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">{{ trans('admin.register_member') }}</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                    <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">{{ trans('admin.reports') }}</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:300px">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <div class="m-menu__subnav">
                                            <ul class="m-menu__content">
                                                <li class="m-menu__item">
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">{{ trans('admin.product_reports')}}</span></a></li>
                                                        <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">{{ trans('admin.user_reports')}}</span></a></li>
                                                        <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">{{ trans('admin.finance_reports')}}</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                    <a  href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-stopwatch"></i><span class="m-menu__link-text">{{ trans('admin.orders') }}</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu" style="width:300px;" >
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <div class="m-menu__subnav">
                                            <ul class="m-menu__content">
                                                <li class="m-menu__item">
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="{{ action('Admin\OrdersController@index') }}" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">{{ trans('admin.manage_orders') }}</span></a></li>
                                                        <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true"><a  href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">{{ trans('admin.order_reports') }}</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END: Horizontal Menu -->
                    </div>
                </div>
            </div>
            <div class="m-stack__item m-stack__item--middle m-stack__item--center">
                <!-- BEGIN: Brand -->
                <a href="{{route('trang-chu')}}" class="m-brand m-brand--desktop">
                    <img style="width: 150px; height: 50px" alt="" src="{{ asset('source/assets/dest/images/logo-cake.png') }}"/>
                </a>
                <!-- END: Brand -->         
            </div>
            <div class="m-stack__item m-stack__item--right">
                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="
                            m-nav__item m-nav__item--focus m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light m-list-search m-list-search--skin-light"
                            m-dropdown-toggle="click" m-dropdown-persistent="1" id="m_quicksearch" m-quicksearch-mode="dropdown">
                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-search-1"></i></span></span>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                <div class="m-dropdown__inner ">
                                    <div class="m-dropdown__header">
                                        <form  class="m-list-search__form">
                                            <div class="m-list-search__form-wrapper">
                                                <span class="m-list-search__form-input-wrapper">
                                                    <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
                                                </span>
                                                <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                    <i class="la la-remove"></i>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                                            <div class="m-dropdown__content">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="m-nav__item m-nav__item--accent m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                            <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-music-2"></i></span></span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item--danger m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-share"></i></span></span>
                            </a>
                        </li>
                        <li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                <span class="m-topbar__username m--hidden-mobile">{{Auth::user()->name}}</span>
                                <span class="m-topbar__userpic">
                                    <img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                </span>
                                <span class="m-nav__link-icon m-topbar__usericon  m--hide">
                                    <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                                </span>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__header m--align-center">
                                        <div class="m-card-user m-card-user--skin-light">
                                            <div class="m-card-user__pic">
                                                <img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless" alt=""/>
                                            </div>
                                            <div class="m-card-user__details">
                                                <span class="m-card-user__name m--font-weight-500">{{Auth::user()->name}}</span>
                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">{{Auth::user()->email}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav m-nav--skin-light">
                                                <li class="m-nav__section m--hide">
                                                    <span class="m-nav__section-text">Section</span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="profile.html" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                        <span class="m-nav__link-title">
                                                            <span class="m-nav__link-wrap">
                                                                <span class="m-nav__link-text">Change Password</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="profile.html" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Reset Password</span>
                                                    </a>
                                                </li>                                              
                                                <li class="m-nav__item">
                                                    <form method="post" action="{{ action('Auth\LoginController@logout') }}">
                                                        @csrf
                                                        <button class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" style="position: relative;left: 100px; top: 10px;">{{ trans('auth.logout') }}</button>
                                                    </form>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="m_quick_sidebar_toggle" class="m-nav__item m-nav__item--info m-nav__item--qs">
                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                <span class="m-nav__link-icon m-nav__link-icon-alt"><span class="m-nav__link-icon-wrapper"><i class="flaticon-grid-menu"></i></span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Topbar -->            
        </div>
    </div>
</div>
</header>
