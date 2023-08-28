<!DOCTYPE html>
<html lang="en">

<head>
    <title>Phòng Trọ Thành Vinh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/awesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/toast/toastr.min.css">
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/myjs.js"></script>
    <link rel="stylesheet" href="assets/selectize.default.css" data-theme="default">
    <script src="assets/js/fileinput/fileinput.js" type="text/javascript"></script>
    <script src="assets/js/fileinput/vi.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/fileinput.css">
    <script src="assets/pgwslider/pgwslider.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/pgwslider/pgwslider.min.css">
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
    This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/sortable.min.js"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/purify.min.js"
        type="text/javascript"></script>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/bootstrap/bootstrap-select.min.js"></script>
    <style>
        img.logo {
            width: 70px;
            margin-right: 150px;
        }


        .navbar-nav>li>a {
            padding-top: 25px;
            padding-bottom: 15px;
        }

        /* Thêm màu khi di chuột qua liên kết trong navbar */
        .navbar-nav>li>a:hover {
            color: #00294d !important;
            /* Màu chữ khi hover */
            background-color: transparent !important;
            font-weight: 750;
            /* Nền khi hover */
            text-decoration: none !important;
            /* Gạch chân khi hover */
        }

        a.btn-dangtin {
            margin-top: 20px;
        }

        .btn-dangtin:hover {
            margin-top: 20px;
            background-color: #054a87 !important;
        }

        .fab,
        .text-white {
            color: white;
        }

        footer {
            font-size: 14px;
            padding-top: 10px;
            background-position: center bottom;
            /* background: url(images/back.jpg) center bottom; */
            color: #fff;
            height: 100px;
            background-size: cover;
            background: #000950;
            bottom: 0;
            /* position: fixed; */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="" style="height: auto;"><img class="logo"
                        src="images/dd.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="/">Trang chủ</a></li>
                    @foreach ($categories as $category)
                        <li><a href="category/{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                @if (Auth::user())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn-dangtin" style="background-color: #000950" href="user/dangtin"><i class="fas fa-edit"
                                    ></i> Đăng tin</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Xin chào!
                                {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="user/profile">Thông tin chi tiết</a></li>
                                <li><a href="user/dangtin">Đăng tin</a></li>
                                <li><a href="user/logout">Đăng xuất</a></li>
                                @if (Auth::user()->right == 1)
                                    <li><a href="/admin">Đến trang quản trị</a></li>
                                @endif
                            </ul>
                        </li>

                    </ul>
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn-dangtin" href="user/dangtin"><i class="fas fa-edit"></i> Đăng tin</a></li>
                        <li><a href="user/login"><i class="fas fa-user-circle"></i> Đăng Nhập</a></li>
                        <li><a href="user/register"><i class="fas fa-sign-in-alt"></i> Đăng Kí</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')
    <div class="gap"></div>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">StayNetRentals.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    {{-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-footer">
                        <a href="/" title="Cổng thông tin số 1 về Dự án Bất động sản - Homedy.com">
                            <img class="logo-footer" src="images/dd.png">
                        </a>
                        <div style="padding-top: 10px;">
                            <p>Đồng hành cùng sinh viên Đại học Vinh tìm kiếm phòng trọ</p>
                            <p>Sinh viên thực hiện: Hoàng Văn Công - 57K2 - CNTT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer> --}}

    <script type="text/javascript" src="assets/toast/toastr.min.js"></script>
</body>

</html>
