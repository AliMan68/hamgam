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
    <link rel="stylesheet" href={{asset('css/pagination.css')}}>
</head>


<body>
@include('include.navigation')
<div>
    <div class="pt-5 mt-5 ">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-5 mr-auto ml-auto bottom-line">
                    <h2 class="text-center  p-2 mt-5 text-dark" style="font-family: Vazir; font-size: 1.8rem ; text-align: center"> مشاغل مرتبط با رشته تحصیلی </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="filter-section mt-2">
    <div class="container  mt-4">
        <div class="d-flex flex-row-reverse flex-wrap align-content-center ">
            <div class="flex-item text-dark">
                <h6>: فیلتر براساس  </h6>
            </div>


            <div class="flex-item text-dark  mr-5 ">
                <p>: رشته تحصیلی  </p>
            </div>
            <div class="flex-item text-dark">
                <select class="browser-default custom-select " id="faculties">
                    <option selected>همه رشته ها</option>
                    <option value="1">ادبیات</option>
                    <option value="2">ریاضی</option>
                    <option value="3">کامپیوتر</option>
                    <option value="3">برق</option>
                </select>
            </div>
            <div class="flex-item text-dark  mr-5 ">
                <a href="{{url('/content')}}">
                    <button class="custom-btn text-center m-0 "type="submit" >
                        <span>جستجو</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="jobs">
    <div class="container bg-light">
        <div class="row pt-5 m-auto">
            <div class="col-md-4 col-lg-4 pb-3">
                <div class="card card-custom2 bg-white border-white border-0">
                    <div class="card-custom-img2" style="background-image: url('/img/programing.jpg');"></div>
                       <div class="card-body" style="overflow-y: auto">
                           <h5 class="card-title">برنامه نویسی</h5>
                           <p style="padding-top: 0px">سامانه همگام به منظور برقراری ارتباط فعال و سازنده مین دانشجویان، اساتید و صنایع در شهریور ماه 1398 راه اندازی شد.
                           </p>
                       </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pb-3">
                <div class="card card-custom2 bg-white border-white border-0">
                    <div class="card-custom-img2" style="background-image: url('/img/programing.jpg');"></div>
                    <div class="card-body" style="overflow-y: auto">
                        <h5 class="card-title">برنامه نویسی</h5>
                        <p style="padding-top: 0px">سامانه همگام به منظور برقراری ارتباط فعال و سازنده مین دانشجویان، اساتید و صنایع در شهریور ماه 1398 راه اندازی شد.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pb-3">
                <div class="card card-custom2 bg-white border-white border-0">
                    <div class="card-custom-img2" style="background-image: url('/img/programing.jpg');"></div>
                    <div class="card-body" style="overflow-y: auto">
                        <h5 class="card-title">برنامه نویسی</h5>
                        <p style="padding-top: 0px">سامانه همگام به منظور برقراری ارتباط فعال و سازنده مین دانشجویان، اساتید و صنایع در شهریور ماه 1398 راه اندازی شد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pagination-section">
    <div class="container my-3 ">
        <div class="row ">
            <div class="col-8 " align="center">
                <div class="pagination ">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('include.footer')

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
{{--@include('include.javascript')--}}
<script src="{{asset('js/pagination.js')}}"></script>
</body>

</html>