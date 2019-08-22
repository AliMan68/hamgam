<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    @include('include.page-title')
    @include('include.bootstrap')
    @include('include.nav-style-js')
</head>
<body>
@include('include.navigation')
<div>
    <div class="pt-5 mt-3 ">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-5 mr-auto ml-auto bottom-line">
                    <h2 class="text-center  p-2 mt-5 text-dark" style="font-family: Vazir; font-size: 3rem ; text-align: center">ورود</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="signup-section">
    <div class="container" style=" min-height: 450px">
        <div class="row">
            <div class="col-12">
                <form class="login ml-auto mr-auto mt-3" align ="center">
                    <select class="browser-default custom-select">
                        <option selected>نوع کاربر</option>
                        <option value="1">دانشجو</option>
                        <option value="2">استاد</option>
                        <option value="2">صنایع</option>
                        <option value="3">مدیریت</option>
                        <option value="3">انجمن</option>
                    </select>
                    <input type="email" required class=" ml-auto mr-auto" placeholder="نام کاربری">
                    <input type="password" required class=" ml-auto mr-auto" placeholder="رمز عبور">
                        <p style="color: #721c24;text-align: right;font-family: Vazir;font-size: 0.8rem">.اطلاعات وارد شده صحیح نیست.مجددا تلاش کنید</p>
                    <a href="{{url('/admin/admin')}}" class="text-white">
                    <button class="custom-btn text-center m-0 "type="submit" >
                     <span>ورود</span>
                    </button></a>
                </form>
            </div>

        </div>

    </div>
</div>

@include('include.footer')
</body>

</html>