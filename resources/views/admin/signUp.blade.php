<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword"
        content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
    <link rel="icon" href="{{asset('./assets/img/favicon.ico')}}" type="image/x-icon">
    <title>Sign Up</title>


    <link rel="stylesheet" href="{{{ asset('./assets/css/luno-style.css') }}}">

    <script src="{{asset('./assets/js/plugins.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <style>
        .image-change-wrapper {
            width: 100%;
            border-radius: 8px;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 16px 0;
        }

        .image-change-wrapper label {
            color: #000000;
            font-size: 14px;
        }

        .image-change-wrapper .img-wrap {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 1px solid #eee;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-change-wrapper .img-wrap img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
                object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }
        .image-change-wrapper .upload input {
            display: none;
        }

        .image-change-wrapper .upload .plus {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fc6240;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .image-change-wrapper .upload .plus i {
            font-size: 14px;
            color: #ffffff;
        }

        .filepond-multiple {
            width: 100%;
        }
    </style>
</head>

<body id="layout-1" data-luno="theme-blue">

    <div class="wrapper">


        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center">
                        <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">

                            <form class="row g-3" action="{{route('admin.register')}}" method="POST">
                                @csrf
                                <div class="col-12 text-center mb-2">
                                    <h1>Create account</h1>
                                    <span>Free access to our dashboard.</span>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>
                                                <strong>{{ $error }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{session::get('error')}}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="input-field image-change-wrapper">
                                    <div class="img-wrap">
                                        <img id="uploadedImage" src="{{asset('assets/img/user.png')}}" alt="user">
                                    </div>
                                    <div class="d-flex w-100 pe-5 ps-5 justify-content-between align-items-center">
                                        <label for="img">Profile Image</label>
                                        <label class="upload">
                                            <div class="plus">
                                                <i class="fa-regular fa-plus"></i>
                                            </div>
                                            <input type="file" name="image" id="img-upload" accept="image/*">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Full name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="UserName"
                                        name="name" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control form-control-lg"
                                        placeholder="name@example.com" name="email" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="phone..."
                                        name="phone" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg"
                                        placeholder="8+ characters required" name="password" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Confirm password</label>
                                    <input type="password" class="form-control form-control-lg"
                                        placeholder="8+ characters required" name="password_confirmation" required>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase">SIGN
                                        UP</button>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span class="text-muted">Already have an account? <a
                                            href="{{route('login_form')}}">Sign in here</a></span>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
        <script>
            $(function() {
        $('#password').password()
      })
        </script>
    </div>

    <div class="modal fade" id="SettingsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
            <div class="modal-content">
                <div class="px-xl-4 modal-header">
                    <h5 class="modal-title">Theme Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="px-xl-4 modal-body custom_scroll">

                    <div class="card fieldset border border-primary p-3 setting-theme mb-4">
                        <span class="fieldset-tile text-primary bg-card">Color Settings</span>
                        <ul class="list-unstyled d-flex choose-skin mb-0">
                            <li data-theme="black">
                                <div class="black"></div>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                            <li data-theme="dynamic">
                                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
                            </li>
                        </ul>

                        <div class="card fieldset border border-primary p-3 dt-setting mt-4">
                            <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
                            <div class="row g-3">
                                <div class="col-7">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="primaryColorPicker"
                                                class="btn bg-primary avatar xs me-2"></button>
                                            <label>Primary Color</label>
                                        </li>
                                        <li>
                                            <button id="secondaryColorPicker"
                                                class="btn bg-secondary avatar xs me-2"></button>
                                            <label>Secondary Color</label>
                                        </li>
                                        <li>
                                            <button id="BodyColorPicker"
                                                class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                                            <label>Site Background</label>
                                        </li>
                                        <li>
                                            <button id="CardColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Widget Background</label>
                                        </li>
                                        <li>
                                            <button id="BorderColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Border Color</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="chartColorPicker1"
                                                class="btn chart-color1 avatar xs me-2"></button>
                                            <label>Chart Color 1</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker2"
                                                class="btn chart-color2 avatar xs me-2"></button>
                                            <label>Chart Color 2</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker3"
                                                class="btn chart-color3 avatar xs me-2"></button>
                                            <label>Chart Color 3</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker4"
                                                class="btn chart-color4 avatar xs me-2"></button>
                                            <label>Chart Color 4</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker5"
                                                class="btn chart-color5 avatar xs me-2"></button>
                                            <label>Chart Color 5</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card fieldset border setting-mode mb-4">
                        <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                        <div class="c_radio d-flex text-center">
                            <label class="m-1 theme-switch" for="theme-switch">
                                <input type="checkbox" id="theme-switch" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/dark-version.svg')}}"
                                        alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-dark" for="theme-dark">
                                <input type="checkbox" id="theme-dark" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/dark-theme.svg')}}"
                                        alt="Theme Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                                <input type="checkbox" id="theme-high-contrast" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/high-version.svg')}}"
                                        alt="High Contrast" />
                                </span>
                            </label>
                            <label class="m-1 theme-rtl" for="theme-rtl">
                                <input type="checkbox" id="theme-rtl" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/rtl-version.svg')}}"
                                        alt="RTL Mode!" />
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="card fieldset border setting-font">
                        <span class="fieldset-tile bg-card">Google Font Settings</span>
                        <div class="c_radio d-flex text-center font_setting">
                            <label class="m-1" for="font-opensans">
                                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/font-opensans.svg')}}"
                                        alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-quicksand">
                                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/font-quicksand.svg')}}"
                                        alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-nunito">
                                <input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/font-nunito.svg')}}"
                                        alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-raleway">
                                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="{{asset('./assets/img/font-raleway.svg')}}"
                                        alt="Dark Mode" />
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="m-1 p-3 bg-body rounded-4 mb-4">
                        <p>Dynamic Font Settings</p>
                        <div class="mb-2">
                            <label class="form-label small text-muted mb-0">Enter font URL</label>
                            <input id="font_url" type="text" class="form-control"
                                placeholder="http://fonts.cdnfonts.com/css/vonfont">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-0">Enter font family name</label>
                            <input id="font_family" type="text" class="form-control" placeholder="vonfont">
                        </div>
                        <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
                        <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
                    </div>

                    <div class="setting-more mb-4">
                        <h6 class="card-title">More Setting</h6>
                        <ul class="list-group list-group-flush list-group-custom fs-6">

                            <li class="list-group-item">
                                <div class="form-check form-switch h-menu-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="h_menu">
                                    <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                                    <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch pageheader-dark-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                                    <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch radius-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="BorderRadius">
                                    <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch sidebar-v2 mb-1">
                                    <input class="form-check-input" type="checkbox" id="sidebar_v2">
                                    <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch sidebardark-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="SidebarDark">
                                    <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                                </div>
                            </li>

                            <li class="list-group-item setting-img">
                                <div class="form-check form-switch imagebg-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="CheckImage">
                                    <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                                </div>
                                <div class="bg-images">
                                    <ul class="list-unstyled d-flex">
                                        <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img"
                                                id="img-1" href="#"><img
                                                    src="{{asset('')}}./assets/img/sidebar-bg/sidebar-1.jpg"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2"
                                                href="#"><img src="{{asset('./assets/img/sidebar-bg/sidebar-2.jpg')}}"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3"
                                                href="#"><img src="{{asset('./assets/img/sidebar-bg/sidebar-3.jpg')}}"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4"
                                                href="#"><img src="{{asset('./assets/img/sidebar-bg/sidebar-4.jpg')}}"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5"
                                                href="#"><img src="{{asset('./assets/img/sidebar-bg/sidebar-5.jpg')}}"
                                                    alt="" /></a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch fluid-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                                    <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch shadow-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="card_shadow">
                                    <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <a class="btn lift  btn-outline-secondary" href="./marketing/index.html">Marketing page</a>
                        <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/onepage.html">Landing page</a>
                        <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/index.html">One page Ui Kit
                            Elements</a>
                    </div>
                </div>
                <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
                    <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                    <button type="button" class="btn flex-fill btn-white border lift"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('./assets/js/theme.js')}}"></script>
    <script>
        let inputImg = document.getElementById("img-upload");
        let uploadedImage = document.getElementById("uploadedImage");
        inputImg.addEventListener("change", () => {
            if (inputImg.files && inputImg.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(inputImg.files[0]);
            }
        });
    </script>

</body>

</html>