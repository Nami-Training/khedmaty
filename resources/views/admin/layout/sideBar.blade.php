<div class="sidebar p-2 py-md-3 @cardClass">
    <div class="container-fluid">

        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt"></span>
                <span>{{$setting->website_name}}</span>
            </h4>
            <div class="dropdown morphing scale-right">
                <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i
                        class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2 mt-2" data-bs-popper="none">
                    <li class="fw-bold px-2">روابط سريعة </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="https://khidmty.com/en/admin/settings" aria-current="page">
                            settings</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </div>
        </div>





        <div class="main-menu flex-grow-1">
            <ul class="menu-list">
                <li class="divider py-2 lh-sm"><span class="small">Dashboard</span><br> <small class="text-muted">
                        Developed & Designed By NAMI</small></li>
                <li>
                    <a class="m-link active" href="{{route('admin.dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                            </path>
                            <path class="fill-secondary" fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                            </path>
                        </svg>
                        <span class="ms-2"> Home </span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="https://khidmty.com/en/dashboard/admins">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-secondary"
                                d="M15 14C15 14 16 14 16 13C16 12 15 9 11 9C7 9 6 12 6 13C6 14 7 14 7 14H15ZM7.022 13C7.01461 12.999 7.00727 12.9976 7 12.996C7.001 12.732 7.167 11.966 7.76 11.276C8.312 10.629 9.282 10 11 10C12.717 10 13.687 10.63 14.24 11.276C14.833 11.966 14.998 12.733 15 12.996L14.992 12.998C14.9874 12.9988 14.9827 12.9995 14.978 13H7.022ZM11 7C11.5304 7 12.0391 6.78929 12.4142 6.41421C12.7893 6.03914 13 5.53043 13 5C13 4.46957 12.7893 3.96086 12.4142 3.58579C12.0391 3.21071 11.5304 3 11 3C10.4696 3 9.96086 3.21071 9.58579 3.58579C9.21071 3.96086 9 4.46957 9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7ZM14 5C14 5.39397 13.9224 5.78407 13.7716 6.14805C13.6209 6.51203 13.3999 6.84274 13.1213 7.12132C12.8427 7.3999 12.512 7.62087 12.1481 7.77164C11.7841 7.9224 11.394 8 11 8C10.606 8 10.2159 7.9224 9.85195 7.77164C9.48797 7.62087 9.15725 7.3999 8.87868 7.12132C8.6001 6.84274 8.37913 6.51203 8.22836 6.14805C8.0776 5.78407 8 5.39397 8 5C8 4.20435 8.31607 3.44129 8.87868 2.87868C9.44129 2.31607 10.2044 2 11 2C11.7956 2 12.5587 2.31607 13.1213 2.87868C13.6839 3.44129 14 4.20435 14 5Z">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.216 14C5.06776 13.6878 4.99382 13.3455 5 13C5 11.645 5.68 10.25 6.936 9.28C6.30909 9.08684 5.65595 8.99237 5 9C1 9 0 12 0 13C0 14 1 14 1 14H5.216Z">
                            </path>
                            <path
                                d="M4.5 8C5.16304 8 5.79893 7.73661 6.26777 7.26777C6.73661 6.79893 7 6.16304 7 5.5C7 4.83696 6.73661 4.20107 6.26777 3.73223C5.79893 3.26339 5.16304 3 4.5 3C3.83696 3 3.20107 3.26339 2.73223 3.73223C2.26339 4.20107 2 4.83696 2 5.5C2 6.16304 2.26339 6.79893 2.73223 7.26777C3.20107 7.73661 3.83696 8 4.5 8Z">
                            </path>
                        </svg>
                        <span class="ms-2"> Users</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('sliders.index')}}">
                        <i class="fa fa-flag"></i>
                        <span class="ms-2"> banners </span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('storeCategoies.index')}}">
                        <i class="fa fa-store"></i>
                        <span class="ms-2"> stores categories</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('departments.index')}}">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <span class="ms-2"> departments</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('categories.index')}}">
                        <i class="fa-solid fa-table-cells-large"></i>
                        <span class="ms-2">categories</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('brands.index')}}">
                        <i class="fa fa-building"></i>
                        <span class="ms-2"> brands</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('cars.index')}}">
                        <i class="fa-solid fa-car-side"></i>
                        <span class="ms-2"> cars</span>
                    </a>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#my_dashboard2" href="#">
                        <i class="fa  fa-list-ul"></i>
                        <span class="ms-2"> stores </span>
                        <span class="arrow fa fa-angle-left ms-auto text-end"></span>
                    </a>
                    <ul class="sub-menu collapse
                                    " id="my_dashboard2">
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/stores">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> stores</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/store/more-saved">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> more saved stores</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/store/more-sales">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> more sales stores</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/withdrawal-requests">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> withdrawal requests</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/store/wallets">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> wallets</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="m-link " href="https://khidmty.com/en/admin/clients">
                        <i class="fa fa-image"></i>
                        <span class="ms-2"> clients</span>
                    </a>
                </li>

                <li>
                    <a class="m-link " href="https://khidmty.com/en/admin/client/best-client">
                        <i class="fa fa-image"></i>
                        <span class="ms-2"> best clients</span>
                    </a>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#my_dashboard1" href="#">
                        <i class="fa  fa-list-ul"></i>
                        <span class="ms-2"> products </span>
                        <span class="arrow fa fa-angle-left ms-auto text-end"></span>
                    </a>
                    <ul class="sub-menu collapse
                                    " id="my_dashboard1">
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/products">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> products</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/product/more-sold">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> more sold products</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/product/more-rated">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> more rated products</span>
                            </a>
                        </li>
                        <li>
                            <a class="m-link " href="https://khidmty.com/en/admin/product/offers">
                                <i class="fa fa-image"></i>
                                <span class="ms-2"> offers</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="m-link " href="https://khidmty.com/en/admin/orders">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="ms-2"> orders</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="{{route('faqs.index')}}">
                        <i class="fa-solid fa-question"></i>
                        <span class="ms-2"> FAQs</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="https://khidmty.com/en/admin/testimonials">
                        <i class="fa-regular fa-message"></i>
                        <span class="ms-2"> Client opinions</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="https://khidmty.com/en/admin/blogs">
                        <i class="fa-brands fa-blogger-b"></i>
                        <span class="ms-2"> blogs</span>
                    </a>
                </li>


                <li>
                    <a class="m-link " href="{{route('setting.index')}}">
                        <i class="fa fa-bars"></i>
                        <span class="ms-2"> settings</span>
                    </a>
                </li>

            </ul>
        </div>


        <ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="https://khidmty.com/en/admin/settings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                        </path>
                        <path class="fill-secondary"
                            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="https://khidmty.com/en/dashboard/logout"
                    title="sign-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"></path>
                        <path class="fill-secondary"
                            d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>