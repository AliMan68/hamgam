<nav id="adminNavbar" class="navbar navbar-expand-md navbar-dark navbar-custom">
    <div class="container-fluid mt-5">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbarContent"
                aria-controls="adminNavbarContent" aria-expanded="false"
                aria-label="">
            <i class="fa  fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse " id="adminNavbarContent" style="background: linear-gradient(to right, #8d0c35, #eb185c) !important;">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto " style="direction: rtl !important;">
                <li class="dropdown nav-item mx-2">
                    <a id="adminNavSite" class="nav-link dropdown-toggle " href="" id="navbarSite" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-globe mt-1"></i>
                        مدیریت سایت
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarSite">
                        <a class="dropdown-item" href="#">اخبار</a>
                        <a class="dropdown-item" href="#">دوره ها</a>
                        <a class="dropdown-item" href="#">اسلایدر سایت</a>
                        <a class="dropdown-item" href="#">قوانین سایت</a>
                        <a class="dropdown-item" href="#">مسئولین مرکز</a>
                        <a class="dropdown-item" href="#">ارتباط با ما</a>
                        <a class="dropdown-item" href="#">تغییر رمز عبور</a>
                    </div>
                </li>
                <li class="dropdown nav-item mt-1 mx-2">
                    <a id="adminNavProfessors" class="nav-link" href="#" role="button"   aria-expanded="false">
                        <i class="fa fa-chalkboard-teacher mt-1"></i>
                        مدیریت اساتید
                    </a>
                </li>
                <li  class="dropdown nav-item mt-1 mx-2">
                    <a id="adminNavUsers" class="nav-link" href="#" role="button" >
                        <i class="fa fa-users-class mt-1"></i>
                        مدیریت دانشجویان
                    </a>
                </li>
                <li class="navbar-ticket nav-item  mx-2">
                    <a id="adminNavTickets" class="nav-link navbar-ticket-a" href="#" id="navbarTicket" role="button">
                        <i class="fa fa-ticket mt-1"></i>
                        مدیریت پیام ها
                        <span class="new-ticket"></span>
                    </a>
                </li>
                {{--<li  class="dropdown nav-item mx-2 btn-primary">--}}
                    {{--<a id="adminNavUsers" class="nav-link" href="#" role="button" >--}}
                        {{--<i class=""></i>--}}
                        {{--ایجاد فایل پشتیبان و دانلود--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
    </div>
</nav>