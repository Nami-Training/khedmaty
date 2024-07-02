@extends('admin.layout.master')

@section('title' , 'Dashboard')

@section('content')

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body" style="min-height: calc(100vh - 196px);">

                <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
                    <div class="container-fluid">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-xl-3 g-2 mb-3">
                            <div class="col-lg-12">
                                <div class="card py-3 bg-primary-gradient text-light">
                                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                        <img class="w240" src="{{asset('assets/img/empty-cart.png')}}"
                                            alt="">
                                        <div
                                            class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                            <h4 class="px-xl-4 px-3 fw-bold">Daily Activity</h4>

                                            <div
                                                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                <div class="py-2 px-xl-4 px-3">
                                                    <h5 class="mb-1">Number of Registered Today</h5>
                                                    <div>0</div>
                                                </div>
                                                <div class="py-2 px-xl-4 px-3">
                                                    <h5 class="mb-1">Number of Visitors Today</h5>
                                                    <div>5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col ">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-cart-arrow-down "></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">stores</div>
                                                <div><a href="{{route('stores.index')}}" class="h4">9</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">clients</div>
                                                <div><a href="{{route('clients.index')}}" class="h4">
                                                        39</a> <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">orders</div>
                                                <div><a href="{{route('orders.index')}}" class="h4">13</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-cart-arrow-down"></i>
                                                <i class="fa fa-car-tilt"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">categories</div>
                                                <div><a href="{{route('categories.index')}}" class="h4">5</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col ">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-cart-arrow-down"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">departments</div>
                                                <div><a href="{{route('departments.index')}}" class="h4">4</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-product-hunt"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">products</div>
                                                <div><a href="{{route('products.index')}}" class="h4">7</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-user-md"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">services</div>
                                                <div><a href="https://khidmty.com/en/admin/features" class="h4">0</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">total sales</div>
                                                <div><a href="{{route('orders.index')}}" class="h4">4079</a>
                                                    <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted">stores_total_money</div>
                                                <div><a href="https://khidmty.com/en/admin/store/wallets"
                                                        class="h4">2703</a> <small class="text-muted"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="flex-fill ms-3 ">
                                                <div class="text-muted">Number of Registered Today</div>
                                                <div><span class="h4">0</span> <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col">
                                    <div class="card card_box">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar lg-4 rounded-circle no-thumbnail">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <div class="text-muted"> Number of Visitors Today</div>
                                                <div><span class="h4">5</span> <small class="text-muted"></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3 row-deck">

                            <div class="col-xxl-3 col-xl- col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">Registered in the App</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-registered" style="min-height: 167.7px;">
                                            <div id="apexcharts3d6hlgck"
                                                class="apexcharts-canvas apexcharts3d6hlgck apexcharts-theme-light"
                                                style="width: 234px; height: 167.7px;"><svg id="SvgjsSvg1127"
                                                    width="234" height="167.7" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="234" height="167.7">
                                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="inset: auto 0px 1px; position: absolute; max-height: 100px;">
                                                            <div class="apexcharts-legend-series" rel="1"
                                                                seriesname="اندرويد" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="1"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color1) !important; color: var(--chart-color1); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                                    data:default-text="%D8%A7%D9%86%D8%AF%D8%B1%D9%88%D9%8A%D8%AF"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">اندرويد</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="2"
                                                                seriesname="ios" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="2"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color2) !important; color: var(--chart-color2); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                                    data:default-text="ios" data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">ios</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="3"
                                                                seriesname="ويب" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="3"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color5) !important; color: var(--chart-color5); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                                    data:default-text="%D9%88%D9%8A%D8%A8"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">ويب</span>
                                                            </div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                                border-style: solid;
                                                            }

                                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g id="SvgjsG1129" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(12, 0)">
                                                        <defs id="SvgjsDefs1128">
                                                            <clipPath id="gridRectMask3d6hlgck">
                                                                <rect id="SvgjsRect1131" width="218" height="139" x="-3"
                                                                    y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask3d6hlgck"></clipPath>
                                                            <clipPath id="nonForecastMask3d6hlgck"></clipPath>
                                                            <clipPath id="gridRectMarkerMask3d6hlgck">
                                                                <rect id="SvgjsRect1132" width="216" height="141" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1133" class="apexcharts-pie">
                                                            <g id="SvgjsG1134" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle1135" r="39.5390243902439"
                                                                    cx="106" cy="68.5" fill="transparent"></circle>
                                                                <g id="SvgjsG1136" class="apexcharts-slices">
                                                                    <g id="SvgjsG1137"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="اندرويد" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1138"
                                                                            d="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 129.3292682926829 L 106 108.0390243902439 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            fill="var(--chart-color1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0" j="0" data:angle="180"
                                                                            data:startAngle="0" data:strokeWidth="2"
                                                                            data:value="10"
                                                                            data:pathOrig="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 129.3292682926829 L 106 108.0390243902439 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1139"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="ios" rel="2" data:realIndex="1">
                                                                        <path id="SvgjsPath1140"
                                                                            d="M 106 129.3292682926829 A 60.829268292682926 60.829268292682926 0 0 1 70.24545318981882 19.288088195826376 L 82.75954457338224 36.512257327287145 A 39.5390243902439 39.5390243902439 0 0 0 106 108.0390243902439 L 106 129.3292682926829 z"
                                                                            fill="var(--chart-color2)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0" j="1" data:angle="144"
                                                                            data:startAngle="180" data:strokeWidth="2"
                                                                            data:value="8"
                                                                            data:pathOrig="M 106 129.3292682926829 A 60.829268292682926 60.829268292682926 0 0 1 70.24545318981882 19.288088195826376 L 82.75954457338224 36.512257327287145 A 39.5390243902439 39.5390243902439 0 0 0 106 108.0390243902439 L 106 129.3292682926829 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1141"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="ويب" rel="3" data:realIndex="2">
                                                                        <path id="SvgjsPath1142"
                                                                            d="M 70.24545318981882 19.288088195826376 A 60.829268292682926 60.829268292682926 0 0 1 105.98938328992102 7.670732633799808 L 105.99309913844867 28.96097621196987 A 39.5390243902439 39.5390243902439 0 0 0 82.75954457338224 36.512257327287145 L 70.24545318981882 19.288088195826376 z"
                                                                            fill="var(--chart-color5)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                            index="0" j="2" data:angle="36"
                                                                            data:startAngle="324" data:strokeWidth="2"
                                                                            data:value="2"
                                                                            data:pathOrig="M 70.24545318981882 19.288088195826376 A 60.829268292682926 60.829268292682926 0 0 1 105.98938328992102 7.670732633799808 L 105.99309913844867 28.96097621196987 A 39.5390243902439 39.5390243902439 0 0 0 82.75954457338224 36.512257327287145 L 70.24545318981882 19.288088195826376 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1143" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)"><text
                                                                    id="SvgjsText1144"
                                                                    font-family="Helvetica, Arial, sans-serif" x="106"
                                                                    y="58.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="16px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">الاجمالي</text><text
                                                                    id="SvgjsText1145"
                                                                    font-family="Helvetica, Arial, sans-serif" x="106"
                                                                    y="94.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="20px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">49</text>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1146" x1="0" y1="0" x2="212" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1147" x1="0" y1="0" x2="212" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1130" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color1);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color2);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color5);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl- col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">Visitors in the App</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-visits" style="min-height: 167.7px;">
                                            <div id="apexchartsrul7i03ki"
                                                class="apexcharts-canvas apexchartsrul7i03ki apexcharts-theme-light"
                                                style="width: 234px; height: 167.7px;"><svg id="SvgjsSvg1148"
                                                    width="234" height="167.7" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="234" height="167.7">
                                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="inset: auto 0px 1px; position: absolute; max-height: 100px;">
                                                            <div class="apexcharts-legend-series" rel="1"
                                                                seriesname="اندرويد" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="1"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color1) !important; color: var(--chart-color1); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                                    data:default-text="%D8%A7%D9%86%D8%AF%D8%B1%D9%88%D9%8A%D8%AF"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">اندرويد</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="2"
                                                                seriesname="ios" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="2"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color6) !important; color: var(--chart-color6); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                                    data:default-text="ios" data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">ios</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="3"
                                                                seriesname="ويب" data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="3"
                                                                    data:collapsed="false"
                                                                    style="background: var(--chart-color5) !important; color: var(--chart-color5); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                                    data:default-text="%D9%88%D9%8A%D8%A8"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">ويب</span>
                                                            </div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                                border-style: solid;
                                                            }

                                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g id="SvgjsG1150" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(12, 0)">
                                                        <defs id="SvgjsDefs1149">
                                                            <clipPath id="gridRectMaskrul7i03ki">
                                                                <rect id="SvgjsRect1152" width="218" height="139" x="-3"
                                                                    y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskrul7i03ki"></clipPath>
                                                            <clipPath id="nonForecastMaskrul7i03ki"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskrul7i03ki">
                                                                <rect id="SvgjsRect1153" width="216" height="141" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1154" class="apexcharts-pie">
                                                            <g id="SvgjsG1155" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle1156" r="39.5390243902439"
                                                                    cx="106" cy="68.5" fill="transparent"></circle>
                                                                <g id="SvgjsG1157" class="apexcharts-slices">
                                                                    <g id="SvgjsG1158"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="اندرويد" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1159"
                                                                            d="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 7.670731707317074 L 106 28.960975609756098 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            fill="var(--chart-color1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0" j="0" data:angle="0"
                                                                            data:startAngle="0" data:strokeWidth="2"
                                                                            data:value="0"
                                                                            data:pathOrig="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 7.670731707317074 L 106 28.960975609756098 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1160"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="ios" rel="2" data:realIndex="1">
                                                                        <path id="SvgjsPath1161"
                                                                            d="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 7.670731707317074 L 106 28.960975609756098 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            fill="var(--chart-color6)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0" j="1" data:angle="0"
                                                                            data:startAngle="0" data:strokeWidth="2"
                                                                            data:value="0"
                                                                            data:pathOrig="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 0 1 106 7.670731707317074 L 106 28.960975609756098 A 39.5390243902439 39.5390243902439 0 0 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG1162"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="ويب" rel="3" data:realIndex="2">
                                                                        <path id="SvgjsPath1163"
                                                                            d="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 1 1 105.98938328992102 7.670732633799808 L 105.99309913844867 28.96097621196987 A 39.5390243902439 39.5390243902439 0 1 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            fill="var(--chart-color5)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                            index="0" j="2" data:angle="360"
                                                                            data:startAngle="0" data:strokeWidth="2"
                                                                            data:value="685"
                                                                            data:pathOrig="M 106 7.670731707317074 A 60.829268292682926 60.829268292682926 0 1 1 105.98938328992102 7.670732633799808 L 105.99309913844867 28.96097621196987 A 39.5390243902439 39.5390243902439 0 1 0 106 28.960975609756098 L 106 7.670731707317074 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1164" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)"><text
                                                                    id="SvgjsText1165"
                                                                    font-family="Helvetica, Arial, sans-serif" x="106"
                                                                    y="58.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="16px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">الاجمالي</text><text
                                                                    id="SvgjsText1166"
                                                                    font-family="Helvetica, Arial, sans-serif" x="106"
                                                                    y="94.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="20px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">685</text>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1167" x1="0" y1="0" x2="212" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1168" x1="0" y1="0" x2="212" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1151" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color1);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color6);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--chart-color5);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-titlem-0">Order Statistics in the Month</h6>
                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-Product-Report" style="min-height: 315px;">
                                            <div id="apexcharts4buj41hk"
                                                class="apexcharts-canvas apexcharts4buj41hk apexcharts-theme-light"
                                                style="width: 834px; height: 300px;"><svg id="SvgjsSvg1170" width="834"
                                                    height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1172" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(46.484375, 50)">
                                                        <defs id="SvgjsDefs1171">
                                                            <clipPath id="gridRectMask4buj41hk">
                                                                <rect id="SvgjsRect1179" width="780.5078125"
                                                                    height="214.348" x="-3" y="-1" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask4buj41hk"></clipPath>
                                                            <clipPath id="nonForecastMask4buj41hk"></clipPath>
                                                            <clipPath id="gridRectMarkerMask4buj41hk">
                                                                <rect id="SvgjsRect1180" width="778.5078125"
                                                                    height="216.348" x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1185" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1186" stop-opacity="0.6"
                                                                    stop-color="rgba(255,213,93,0.6)" offset="0"></stop>
                                                                <stop id="SvgjsStop1187" stop-opacity="0.8"
                                                                    stop-color="rgba(255,234,174,0.8)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1188" stop-opacity="0.8"
                                                                    stop-color="rgba(255,234,174,0.8)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine1178" x1="774.0078125" y1="0"
                                                            x2="774.0078125" y2="212.348" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="774.0078125" y="0"
                                                            width="1" height="212.348" fill="#b1b9c4" filter="none"
                                                            fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1191" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1192" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1194"
                                                                    font-family="Helvetica, Arial, sans-serif" x="0"
                                                                    y="241.348" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1195">December</tspan>
                                                                    <title>December</title>
                                                                </text><text id="SvgjsText1197"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="193.626953125" y="241.348" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1198">January</tspan>
                                                                    <title>January</title>
                                                                </text><text id="SvgjsText1200"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="387.25390625" y="241.348" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1201">February</tspan>
                                                                    <title>February</title>
                                                                </text><text id="SvgjsText1203"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="580.880859375" y="241.348" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1204">March</tspan>
                                                                    <title>March</title>
                                                                </text><text id="SvgjsText1206"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="774.5078125" y="241.348" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1207">April</tspan>
                                                                    <title>April</title>
                                                                </text></g>
                                                            <line id="SvgjsLine1208" x1="0" y1="213.348"
                                                                x2="774.5078125" y2="213.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1231" class="apexcharts-grid">
                                                            <g id="SvgjsG1232" class="apexcharts-gridlines-horizontal">
                                                            </g>
                                                            <g id="SvgjsG1233" class="apexcharts-gridlines-vertical">
                                                            </g>
                                                            <line id="SvgjsLine1234" x1="0" y1="213.348" x2="0"
                                                                y2="219.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                                            </line>
                                                            <line id="SvgjsLine1235" x1="193.626953125" y1="213.348"
                                                                x2="193.626953125" y2="219.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1236" x1="387.25390625" y1="213.348"
                                                                x2="387.25390625" y2="219.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1237" x1="580.880859375" y1="213.348"
                                                                x2="580.880859375" y2="219.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1238" x1="774.5078125" y1="213.348"
                                                                x2="774.5078125" y2="219.348" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine1240" x1="0" y1="212.348"
                                                                x2="774.5078125" y2="212.348" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1239" x1="0" y1="1" x2="0" y2="212.348"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1181"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1182" class="apexcharts-series"
                                                                seriesName="MonthlyxTotals" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1189"
                                                                    d="M 0 212.348L 0 41.903338666666684C 67.76943359375 41.903338666666684 125.85751953125 195.36016 193.626953125 195.36016C 261.39638671875 195.36016 319.48447265625 173.41753333333335 387.25390625 173.41753333333335C 455.02333984375 173.41753333333335 513.11142578125 203.85408 580.880859375 203.85408C 648.65029296875 203.85408 706.73837890625 158.48239066666667 774.5078125 158.48239066666667C 774.5078125 158.48239066666667 774.5078125 158.48239066666667 774.5078125 212.348M 774.5078125 158.48239066666667z"
                                                                    fill="url(#SvgjsLinearGradient1185)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0" clip-path="url(#gridRectMask4buj41hk)"
                                                                    pathTo="M 0 212.348L 0 41.903338666666684C 67.76943359375 41.903338666666684 125.85751953125 195.36016 193.626953125 195.36016C 261.39638671875 195.36016 319.48447265625 173.41753333333335 387.25390625 173.41753333333335C 455.02333984375 173.41753333333335 513.11142578125 203.85408 580.880859375 203.85408C 648.65029296875 203.85408 706.73837890625 158.48239066666667 774.5078125 158.48239066666667C 774.5078125 158.48239066666667 774.5078125 158.48239066666667 774.5078125 212.348M 774.5078125 158.48239066666667z"
                                                                    pathFrom="M -1 212.348L -1 212.348L 193.626953125 212.348L 387.25390625 212.348L 580.880859375 212.348L 774.5078125 212.348">
                                                                </path>
                                                                <path id="SvgjsPath1190"
                                                                    d="M 0 41.903338666666684C 67.76943359375 41.903338666666684 125.85751953125 195.36016 193.626953125 195.36016C 261.39638671875 195.36016 319.48447265625 173.41753333333335 387.25390625 173.41753333333335C 455.02333984375 173.41753333333335 513.11142578125 203.85408 580.880859375 203.85408C 648.65029296875 203.85408 706.73837890625 158.48239066666667 774.5078125 158.48239066666667"
                                                                    fill="none" fill-opacity="1" stroke="#ffd55d"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask4buj41hk)"
                                                                    pathTo="M 0 41.903338666666684C 67.76943359375 41.903338666666684 125.85751953125 195.36016 193.626953125 195.36016C 261.39638671875 195.36016 319.48447265625 173.41753333333335 387.25390625 173.41753333333335C 455.02333984375 173.41753333333335 513.11142578125 203.85408 580.880859375 203.85408C 648.65029296875 203.85408 706.73837890625 158.48239066666667 774.5078125 158.48239066666667"
                                                                    pathFrom="M -1 212.348L -1 212.348L 193.626953125 212.348L 387.25390625 212.348L 580.880859375 212.348L 774.5078125 212.348">
                                                                </path>
                                                                <g id="SvgjsG1183"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1246" r="0"
                                                                            cx="774.5078125" cy="158.48239066666667"
                                                                            class="apexcharts-marker wo7etq89c no-pointer-events"
                                                                            stroke="#ffffff" fill="#ffd55d"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1184" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1241" x1="0" y1="0" x2="774.5078125" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1242" x1="0" y1="0" x2="774.5078125" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1243" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1244" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1245" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect1247" width="0" height="0" x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect1248" width="0" height="0" x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect1177" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1209" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(28.484375, 0)">
                                                        <g id="SvgjsG1210" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText1212"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="51.5" text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1213">3000</tspan>
                                                                <title>3000</title>
                                                            </text><text id="SvgjsText1215"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="93.9696" text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1216">2400</tspan>
                                                                <title>2400</title>
                                                            </text><text id="SvgjsText1218"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="136.4392" text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1219">1800</tspan>
                                                                <title>1800</title>
                                                            </text><text id="SvgjsText1221"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="178.90879999999999" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1222">1200</tspan>
                                                                <title>1200</title>
                                                            </text><text id="SvgjsText1224"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="221.3784" text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1225">600</tspan>
                                                                <title>600</title>
                                                            </text><text id="SvgjsText1227"
                                                                font-family="Helvetica, Arial, sans-serif" x="20"
                                                                y="263.848" text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1228">0</tspan>
                                                                <title>0</title>
                                                            </text></g>
                                                        <g id="SvgjsG1229" class="apexcharts-yaxis-title"><text
                                                                id="SvgjsText1230"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="15.51025390625" y="156.174" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="900" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-title-text "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-90 -19.1513671875 152.1739959716797)">Total
                                                                Amount</text></g>
                                                    </g>
                                                    <g id="SvgjsG1173" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                                    style="left: 668.805px; top: 161.482px;">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        April</div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 1; display: flex;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 213, 93);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Monthly
                                                                    Totals: </span><span
                                                                    class="apexcharts-tooltip-text-y-value">761</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                    style="left: 797.484px; top: 264.348px;">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 22.0156px;">
                                                        April</div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">products more sold products</h6>
                                    </div>
                                    <div class="card-body">
                                        <table id="" class="table table-bordered table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>price</th>
                                                    <th>type</th>
                                                    <th>image</th>
                                                    <th>rate</th>
                                                    <th>amount</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pair of Toyota Aurion Black Cover Headlights 2009-2011</td>
                                                    <td>100</td>
                                                    <td>0</td>
                                                    <td><img src="https://khidmty.com/storage/images/admins/products/mNSAOyemKi1701002992.jpg "
                                                            alt="image" width="70 px"></td>
                                                    <td>
                                                        <a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/rates?product_id=1">
                                                            <i class="fa fa-show"></i>0
                                                        </a>
                                                    </td>
                                                    <td><a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/orders?product_id=1">
                                                            <i class="fa fa-show"></i>orders
                                                        </a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Engine Dynamo</td>
                                                    <td>661</td>
                                                    <td>1</td>
                                                    <td><img src="https://khidmty.com/storage/images/admins/products/K20ShvuJwE1701003331.png "
                                                            alt="image" width="70 px"></td>
                                                    <td>
                                                        <a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/rates?product_id=2">
                                                            <i class="fa fa-show"></i>2
                                                        </a>
                                                    </td>
                                                    <td><a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/orders?product_id=2">
                                                            <i class="fa fa-show"></i>orders
                                                        </a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LORATUS FLOOR LAMP WITH LED LIGHT BULB, SOLID ASH &amp; ACRYLIC
                                                    </td>
                                                    <td>120</td>
                                                    <td>0</td>
                                                    <td><img src="https://khidmty.com/storage/images/admins/products/PEsLhWBhuO1703080905.jpeg "
                                                            alt="image" width="70 px"></td>
                                                    <td>
                                                        <a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/rates?product_id=20">
                                                            <i class="fa fa-show"></i>0
                                                        </a>
                                                    </td>
                                                    <td><a type="button" class="btn btn-primary"
                                                            href="https://khidmty.com/en/admin/orders?product_id=20">
                                                            <i class="fa fa-show"></i>orders
                                                        </a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">stores more sold products</h6>
                                    </div>
                                    <div class="card-body">
                                        <table id="" class="table table-bordered table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>image</th>
                                                    <th>show</th>
                                                    <th>total sales</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>الوعلان للتجارة</td>
                                                    <td>store@khidmty.com</td>
                                                    <td>512359821</td>
                                                    <td><img src="https://khidmty.com/storage/images/admins/users/WOgW4bexyl1701002789.png "
                                                            alt="image" width="70 px"></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger update-status"
                                                            data-id="1">غير مفعل </button>
                                                    </td>
                                                    <td>
                                                        3719
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>متجر السعاده</td>
                                                    <td>myemail@email.com</td>
                                                    <td>512000000</td>
                                                    <td><img src="https://khidmty.com/storage/images/admins/users/Z44DscSovn1703080729.jpeg "
                                                            alt="image" width="70 px"></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger update-status"
                                                            data-id="43">غير مفعل </button>
                                                    </td>
                                                    <td>
                                                        360
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div
            class="row row-cols-xxl-5 row-cols-xxl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 mb-3 row-deck">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i
                                class="fa fa-address-book fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">New Customers</div>
                            <div><span class="h6 mb-0 fw-bold">925</span> <small class="text-success">+34%</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i
                                class="fa fa-product-hunt fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">New Products</div>
                            <div><span class="h6 mb-0 fw-bold">18</span> <small class="text-danger">-17%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-briefcase fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">New Leads</div>
                            <div><span class="h6 mb-0 fw-bold">89</span> <small class="text-success">+8%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-dollar fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Today's Profit</div>
                            <div><span class="h6 mb-0 fw-bold">$8,925</span> <small class="text-danger">-3%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-file-text fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Contracts closed</div>
                            <div><span class="h6 mb-0 fw-bold">25</span> <small class="text-danger">-12%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-user-plus fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Active Client</div>
                            <div><span class="h6 mb-0 fw-bold">11</span> <small class="text-danger">-4%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-copy fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Running Projects</div>
                            <div><span class="h6 mb-0 fw-bold">23</span> <small class="text-success">+7%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-user-secret fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Active Admin</div>
                            <div><span class="h6 mb-0 fw-bold">3</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-money fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Total Expenses</div>
                            <div><span class="h6 mb-0 fw-bold">$2,908</span> <small class="text-danger">-6%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-money fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small text-uppercase">Avg Contract Value</div>
                            <div><span class="h6 mb-0 fw-bold">$4,580</span> <small class="text-danger">-10%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-5 row-deck">
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Sales Statistics</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                    class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card p-3">
                                    <div class="fw-bold"><span class="h4 mb-0">11.54k USD</span></div>
                                    <div class="text-muted small">Revenue</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card p-3">
                                    <div class="fw-bold"><span class="h4 mb-0">5.87k USD</span></div>
                                    <div class="text-muted small">Cost</div>
                                </div>
                            </div>
                        </div>
                        <div id="apex-SalesStatistics" class="ac-line-transparent"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Outbound Calls & Contact Rate per weekday</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                    class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="apex-OutboundCalls" class="ac-line-transparent"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Top Selling Plans</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                    class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div id="apex-TopSellingPlans"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Running Project</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                    class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="text-muted d-block">Yearly Income</span>
                            <h4>$22,652.35</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-3 mt-3">
                                <div class="d-flex justify-content-between">
                                    <span>Database configuration</span>
                                    <span>89K</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 89%;"
                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Design iOS app</span>
                                    <span>76K</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 76%;"
                                        aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Internet configuration</span>
                                    <span>52K</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 52%;"
                                        aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Angular Admin</span>
                                    <span>46K</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 46%;"
                                        aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <span>Web Solution</span>
                                    <span>34K</span>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 34%;"
                                        aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">Work Deadlines</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                    class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-bordered align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <td>Design task for App</td>
                                        <td>22 May 2021</td>
                                    </tr>
                                    <tr>
                                        <td>Angular login page</td>
                                        <td>22 May 2021</td>
                                    </tr>
                                    <tr>
                                        <td>React Video tools</td>
                                        <td>11 May 2021</td>
                                    </tr>
                                    <tr>
                                        <td>Figma Design</td>
                                        <td>9 June 2021</td>
                                    </tr>
                                    <tr>
                                        <td>Logo vector design</td>
                                        <td>13 June 2021</td>
                                    </tr>
                                    <tr>
                                        <td>iOs and Android App</td>
                                        <td>18 June 2021</td>
                                    </tr>
                                    <tr>
                                        <td>Login page figma design</td>
                                        <td>25 June 2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <style>
        .quote-imgs-thumbs {
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            margin: 1.5rem 0;
            padding: 0.75rem;
        }

        .quote-imgs-thumbs--hidden {
            display: none;
        }

        .img-preview-thumb {
            background: #fff;
            border: 1px solid #777;
            border-radius: 0.25rem;
            box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
            margin-right: 1rem;
            max-width: 140px;
            padding: 0.25rem;
        }
    </style>
    <style>
        .contentPreviewImg {
            position: relative;
        }

        .card_box:hover {
            background-color: var(--primary-color);
            transition: .3s ease-in-out;

        }

        .card_box:hover .text-muted {
            color: white !important;
            transition: .3s ease-in-out;

        }

        .card_box:hover .no-thumbnail {
            background-color: white !important;
            transition: .3s ease-in-out;

        }

        .card_box:hover .h4 {
            color: white !important;
            transition: .3s ease-in-out;

        }

        .contentPreviewImg .quote-imgs-thumbs {
            background: #fff;
            border-radius: 0.25rem;
            margin: 1.5rem 0;
            padding: 0.75rem;
            -webkit-box-shadow: 0px 0px 10px 0px #c2c2c2bf;
            box-shadow: 0px 0px 10px 0px #c2c2c2bf;
            border-radius: 15px;
            min-height: 108px;
            padding-top: 60px;
        }

        .contentPreviewImg .quote-imgs-thumbs--hidden {
            display: none;
        }

        .contentPreviewImg .xSpan {
            color: #fff;
            position: absolute;
            top: -57px;
            right: 22px;
            cursor: pointer;
            background: #000;
            width: 25px;
            height: 25px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 14px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0;
            border-radius: 50%;
        }

        .contentPreviewImg .xSpan:hover {
            -webkit-transition: .2s ease-in;
            transition: .2s ease-in;
            -webkit-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
            color: red;
        }

        .contentPreviewImg .inputfile+label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }

        .contentPreviewImg .inputfile:focus+label,
        .contentPreviewImg .inputfile+label:hover {
            background-color: #00a0c4;
        }

        .contentPreviewImg .img-preview-thumb {
            background: #fff;
            border-radius: 0.25rem;
            margin-right: 1rem;
            max-width: 140px;
        }

        .contentPreviewImg [type="file"] {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            white-space: nowrap;
            width: 1px;
        }

        .contentPreviewImg [type="file"]+label {
            background-color: #00ae40;
            border-radius: 4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            padding-left: 2rem 4rem;
            -webkit-transition: .3s ease;
            transition: .3s ease;
            position: absolute;
            top: 50px;
            left: 30px;
        }

        .contentPreviewImg [type="file"]:focus+label,
        .contentPreviewImg [type="file"]+label:hover {
            background-color: #0093c9;
        }

        .contentPreviewImg [type="file"]:focus+label {
            outline: none;
        }

        .contentPreviewImg img {
            width: 150px;
            height: 150px;
            margin: 8px;
            -webkit-box-shadow: 0px 0px 10px 0px #c2c2c2bf;
            box-shadow: 0px 0px 10px 0px #c2c2c2bf;
            border-radius: 8px;
        }

        .contentPreviewImg label {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .contentPreviewImg label span {
            padding: 10px 15px 10px 10px;
        }

        .contentPreviewImg label i {
            font-size: 30px !important;
            padding: 5px 10px;
        }

        .remove_and_update {
            display: none !important;
        }

        .remove_and_update2 {
            display: none !important;
        }


        /*# sourceMappingURL=style.css.map */
    </style>
@endpush
