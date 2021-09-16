<!-- main wrapper start -->
<div class="pa-main-wrapper">
<!-- main header start -->
<div class="pa-main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="pa-logo">
                    <a href="{{route('frontend.index')}}"><img  src="{{asset('assets/frontend/images/logo.png')}}" alt="image" class="img-fluid logo-img"/></a>
                </div>
            </div>
            <div class="col-md-9 col-6">
                <div class="pa-nav-bar">
                    <div class="pa-menu">
                        <ul>
                            <li class="@yield('home')"><a  href="{{route('frontend.index')}}">হোম</a>
                            </li>
                            <li  class="@yield('about')"><a href="{{route('frontend.about')}}">আমাদের সম্পর্কে</a></li>
                            <li class="pa-menu-child @yield('category')"><a href="#">আমাদের পণ্য &nbsp;<i class="fa fa-angle-down"></i></a>
                                <ul class="pa-submenu">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('frontend.category',$category->id)}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="@yield('research')"><a  href="{{route('frontend.research')}}">গবেষনা ও উদ্ভাবন</a></li>
                            <li><a href="#contact">যোগাযোগ করুন</a></li>
                        </ul>
                    </div>
                    <div class="pa-head-icon">
                        <ul>
                            <li>
                                <a href="#"><i class="flaticon-facebook pa-nav-icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-instagram pa-nav-icon"></i></a>
                            </li>
                        </ul>
                        <div class="pa-toggle-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main header end -->
