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
<div class="content mt-5">
    <div class="container ">
        <div class="row mt-5 pt-4 " >
            <div class="col-md-3 col-sm-12 mt-5">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column mt-4" style="box-shadow: 0px 0px 15px rgba(10, 10, 10, 0.6);border-radius: 5px">
                        <h5 class="text-dark p-3" style="font-family: Vazir;text-align: right">آخرین دوره ها</h5>
                        <ul style="direction: rtl;  font-family: Vazir;overflow: auto; height: 400px;" class="">
                            <li>
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <a href="" style="text-decoration: none" class="">
                                        <p class="text-dark text-right mb-2 pr-2 link-hover">دوره اموزش Swift </p>
                                    </a>
                                </div>
                            </li>
                            <div style="height: 1px;background-color: #eb185c;margin: 2px 10px"></div>
                            <li>
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <a href="" style="text-decoration: none" class="">
                                        <p class="text-dark text-right mb-2 pr-2 link-hover">دوره اموزش Swift </p>
                                    </a>
                                </div>
                            </li>
                            <div style="height: 1px;background-color: #eb185c;margin: 2px 10px"></div>
                            <li>
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <a href="" style="text-decoration: none" class="">
                                        <p class="text-dark text-right mb-2 pr-2 link-hover">دوره اموزش Swift </p>
                                    </a>
                                </div>
                            </li>
                            <div style="height: 1px;background-color: #eb185c;margin: 2px 10px"></div>
                            <li>
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <a href="" style="text-decoration: none" class="">
                                        <p class="text-dark text-right mb-2 pr-2 link-hover">دوره اموزش Swift </p>
                                    </a>
                                </div>
                            </li>
                            <div style="height: 1px;background-color: #eb185c;margin: 2px 10px"></div>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-8 " style="">
                <div class="d-flex flex-row justify-content-center">
                    <img src="{{url('img/job.jpg')}}" alt="" style=" max-width: 650px;max-height: 300px " class="">
                </div>

                <p class="my-2 text-right p-3 ">
                    سامانه همگام به منظور برقراری ارتباط فعال و سازنده مابین دانشجویان، اساتید و صنایع در شهریور ماه 1398 راه اندازی شد. یکی از مهمترین اهداف این سامانه را می توان مدیریت متمرکز کارآموزان در طول دوره کارآموزی به منظور ارتباط فعال صنعت و دانشگاه جهت شناسایی و حل مسائل موجود در صنایع بیان نمود. دانشگاه صنعتی امیرکبیر مفتخر است که با امید به خدا، تعهد اساتید، توجه صنایع و تلاش کارآموزان، مهندسین کارآزموده ای برای این مرزوبوم تربیت نماید.
                </p>
                <p class="my-2 text-right p-1 ">
                    نام استاد : بیل گیتس
                </p>
                <p class="my-2 text-right p-1 ">
                     زمان : هر هفته شنبه ها
                </p>
                <p class="my-2 text-right p-1 ">
                    پیش نیاز : ریاضی 1 و فیزیک 3
                </p>
                <p class="my-2 text-right p-1 ">
                     جنسیت : مشترک
                </p>
                <div class="d-flex flex-row-reverse flex-wrap">
                    <a href="">
                        <button class="custom-btn text-center m-4 "type="submit" style="max-width: 130px">
                            <span> ثبت نام</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('include.footer')
<script  src= {{asset('/js/num-animation.js')}}></script>
</body>
</html>