<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets/backend/images/user/' . Auth::user()->image)}}" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                    <span class="text-secondary text-small">{{'Admin'}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">User's</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="user-basic">
                <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file-document-box menu-icon"></i>
            </a>
            <div class="collapse" id="category-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('type.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('type.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-package menu-icon"></i>
            </a>
            <div class="collapse" id="product-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('product-back.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('product-back.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#review-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Reviews</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-pencil menu-icon"></i>
            </a>
            <div class="collapse" id="review-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('review.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('review.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Contacts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-message menu-icon"></i>
            </a>
            <div class="collapse" id="contact-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('contact.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subscriber-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Subscribers</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-youtube-subscription menu-icon"></i>
            </a>
            <div class="collapse" id="subscriber-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('subscriber.index')}}">Index</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
