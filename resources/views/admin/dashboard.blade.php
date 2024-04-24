<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
<meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
<link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
<title>Dashboard</title>

<link rel="stylesheet" href="{{asset('assets/cssbundle/daterangepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/luno-style.css')}}">

<script src="{{asset('assets/js/plugins.js')}}"></script>
</head>
<body class="layout-1" data-luno="theme-blue">

<div class="sidebar p-2 py-md-3 @@cardClass">
<div class="container-fluid">

<div class="title-text d-flex align-items-center mb-4 mt-1">
<h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">C</span><span>RM Admin</span></h4>
<div class="dropdown morphing scale-left">
<a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2 mt-2" data-bs-popper="none">
<li class="fw-bold px-2">Quick Actions</li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="../landing/index.html" aria-current="page">Landing page</a></li>
<li><a class="dropdown-item" href="../inventory/index.html">Inventory</a></li>
<li><a class="dropdown-item" href="../ecommerce/index.html">eCommerce</a></li>
<li><a class="dropdown-item" href="../hrms/index.html">HRMS</a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="../account-invoices.html">Invoices List</a></li>
<li><a class="dropdown-item" href="../account-create-invoices.html">Create Invoices</a></li>
</ul>
</div>
</div>

<div class="create-new py-3 mb-2">
<div class="d-flex">
<select class="form-select rounded-pill me-1">
<option selected>Select Project</option>
<option value="1">Luno University</option>
<option value="2">Book Manager</option>
<option value="3">Luno Sass App</option>
</select>
<button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
</div>
</div>

<div class="main-menu flex-grow-1">
<ul class="menu-list">
<li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li>
<li>
<a class="m-link active" href="index.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
<path class="fill-secondary" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
</svg>
<span class="ms-2">My Dashboard</span>
</a>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Applications" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
<path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
</svg>
<span class="ms-2">Applications</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-Applications">
<li><a class="ms-link" href="app-calendar.html">Calendar</a></li>
<li><a class="ms-link" href="app-calendar-tui.html">tui Calendar</a></li>
<li><a class="ms-link" href="app-email.html">Email App</a></li>
<li><a class="ms-link" href="app-chat.html">Chat app</a></li>
<li><a class="ms-link" href="app-campaigns.html">Campaigns</a></li>
<li><a class="ms-link" href="app-social.html">Social App</a></li>
<li><a class="ms-link" href="app-file-manager.html">File Manager</a></li>
<li><a class="ms-link" href="app-todo.html">Todo App</a></li>
<li><a class="ms-link" href="app-contacts.html">Contacts</a></li>
<li><a class="ms-link" href="app-tasks.html">Tasks</a></li>
<li><a class="ms-link" href="app-jkanban.html">Kanban Board</a></li>
<li><a class="ms-link" href="app-blog.html">Blog</a></li>
</ul>
</li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Account" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
<path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
</svg>
<span class="ms-2">Account</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-Account">
<li><a class="ms-link" href="account-settings.html">Settings</a></li>
<li><a class="ms-link" href="account-invoices.html">Invoice List</a></li>
<li><a class="ms-link" href="account-create-invoice.html">Create Invoices</a></li>
<li><a class="ms-link" href="account-billing.html">Billing</a></li>
</ul>
</li>
<li>
<a class="m-link" href="analytics.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M15.985 8.50001H8.20698L2.70698 14C3.82973 14.9906 5.20793 15.6461 6.68482 15.8922C8.1617 16.1383 9.678 15.9649 11.0613 15.3919C12.4445 14.8189 13.6392 13.8692 14.5095 12.6508C15.3797 11.4325 15.8916 9.99434 15.985 8.50001ZM1.99998 13.292C1.00944 12.1693 0.353862 10.7911 0.107801 9.31418C-0.138261 7.83729 0.0350724 6.32099 0.608086 4.93774C1.1811 3.55448 2.1308 2.35979 3.34916 1.48954C4.56752 0.619291 6.00565 0.108414 7.49998 0.0150146V7.79302L1.99998 13.293V13.292Z" />
<path class="fill-secondary" d="M8.5 7.50001V0.0150146C10.4452 0.136897 12.279 0.964622 13.6572 2.34279C15.0354 3.72097 15.8631 5.5548 15.985 7.50001H8.5Z" />
</svg>
<span class="ms-2">Analytics</span>
</a>
</li>
<li>
<a class="m-link" href="leads.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<g clip-path="url(#clip0_136_317)">
<path class="fill-secondary" d="M6.5 1C6.10218 1 5.72064 1.15804 5.43934 1.43934C5.15804 1.72064 5 2.10218 5 2.5V3H1.5C1.10218 3 0.720644 3.15804 0.43934 3.43934C0.158035 3.72064 0 4.10218 0 4.5L0 5.884L7.614 7.914C7.86693 7.98135 8.13307 7.98135 8.386 7.914L16 5.884V4.5C16 4.10218 15.842 3.72064 15.5607 3.43934C15.2794 3.15804 14.8978 3 14.5 3H11V2.5C11 2.10218 10.842 1.72064 10.5607 1.43934C10.2794 1.15804 9.89782 1 9.5 1H6.5ZM6.5 2H9.5C9.63261 2 9.75979 2.05268 9.85355 2.14645C9.94732 2.24021 10 2.36739 10 2.5V3H6V2.5C6 2.36739 6.05268 2.24021 6.14645 2.14645C6.24021 2.05268 6.36739 2 6.5 2Z" />
<path d="M0 13.5C0 13.8978 0.158035 14.2793 0.43934 14.5606C0.720644 14.8419 1.10218 15 1.5 15H14.5C14.8978 15 15.2794 14.8419 15.5607 14.5606C15.842 14.2793 16 13.8978 16 13.5V6.84998L8.129 8.94698C8.04448 8.96955 7.95552 8.96955 7.871 8.94698L0 6.84998V13.5Z" />
</svg>
<span class="ms-2">Leads</span>
</a>
</li>
<li>
<a class="m-link" href="customers.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M15 14C15 14 16 14 16 13C16 12 15 9 11 9C7 9 6 12 6 13C6 14 7 14 7 14H15ZM7.022 13C7.01461 12.999 7.00727 12.9976 7 12.996C7.001 12.732 7.167 11.966 7.76 11.276C8.312 10.629 9.282 10 11 10C12.717 10 13.687 10.63 14.24 11.276C14.833 11.966 14.998 12.733 15 12.996L14.992 12.998C14.9874 12.9988 14.9827 12.9995 14.978 13H7.022ZM11 7C11.5304 7 12.0391 6.78929 12.4142 6.41421C12.7893 6.03914 13 5.53043 13 5C13 4.46957 12.7893 3.96086 12.4142 3.58579C12.0391 3.21071 11.5304 3 11 3C10.4696 3 9.96086 3.21071 9.58579 3.58579C9.21071 3.96086 9 4.46957 9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7ZM14 5C14 5.39397 13.9224 5.78407 13.7716 6.14805C13.6209 6.51203 13.3999 6.84274 13.1213 7.12132C12.8427 7.3999 12.512 7.62087 12.1481 7.77164C11.7841 7.9224 11.394 8 11 8C10.606 8 10.2159 7.9224 9.85195 7.77164C9.48797 7.62087 9.15725 7.3999 8.87868 7.12132C8.6001 6.84274 8.37913 6.51203 8.22836 6.14805C8.0776 5.78407 8 5.39397 8 5C8 4.20435 8.31607 3.44129 8.87868 2.87868C9.44129 2.31607 10.2044 2 11 2C11.7956 2 12.5587 2.31607 13.1213 2.87868C13.6839 3.44129 14 4.20435 14 5Z" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.216 14C5.06776 13.6878 4.99382 13.3455 5 13C5 11.645 5.68 10.25 6.936 9.28C6.30909 9.08684 5.65595 8.99237 5 9C1 9 0 12 0 13C0 14 1 14 1 14H5.216Z" />
<path d="M4.5 8C5.16304 8 5.79893 7.73661 6.26777 7.26777C6.73661 6.79893 7 6.16304 7 5.5C7 4.83696 6.73661 4.20107 6.26777 3.73223C5.79893 3.26339 5.16304 3 4.5 3C3.83696 3 3.20107 3.26339 2.73223 3.73223C2.26339 4.20107 2 4.83696 2 5.5C2 6.16304 2.26339 6.79893 2.73223 7.26777C3.20107 7.73661 3.83696 8 4.5 8Z" />
</svg>
<span class="ms-2">Customers</span>
</a>
</li>
<li>
<a class="m-link" href="vendors.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M12.136 0.326024C12.3571 0.270728 12.5878 0.266523 12.8107 0.313728C13.0337 0.360933 13.2429 0.458308 13.4226 0.59846C13.6023 0.738612 13.7476 0.917858 13.8477 1.12259C13.9477 1.32732 13.9998 1.55215 14 1.78002V3.00002H14.5C14.8978 3.00002 15.2794 3.15806 15.5607 3.43936C15.842 3.72067 16 4.1022 16 4.50002V13.5C16 13.8978 15.842 14.2794 15.5607 14.5607C15.2794 14.842 14.8978 15 14.5 15H1.5C1.10218 15 0.720644 14.842 0.43934 14.5607C0.158035 14.2794 9.80916e-08 13.8978 9.80916e-08 13.5V4.50002C-0.000139461 4.11388 0.148642 3.74255 0.415377 3.46334C0.682113 3.18412 1.04625 3.01853 1.432 3.00102L12.136 0.326024ZM5.562 3.00002H13V1.78002C12.9998 1.70416 12.9824 1.62933 12.949 1.5612C12.9156 1.49307 12.8672 1.43343 12.8074 1.38679C12.7475 1.34016 12.6779 1.30775 12.6036 1.29202C12.5294 1.2763 12.4526 1.27767 12.379 1.29602L5.562 3.00002ZM1.5 4.00002C1.36739 4.00002 1.24021 4.0527 1.14645 4.14647C1.05268 4.24024 1 4.36742 1 4.50002V13.5C1 13.6326 1.05268 13.7598 1.14645 13.8536C1.24021 13.9473 1.36739 14 1.5 14H14.5C14.6326 14 14.7598 13.9473 14.8536 13.8536C14.9473 13.7598 15 13.6326 15 13.5V4.50002C15 4.36742 14.9473 4.24024 14.8536 4.14647C14.7598 4.0527 14.6326 4.00002 14.5 4.00002H1.5Z" />
<path d="M5.5 12C5.5 12 5 12 5 11.5C5 11 5.5 9.5 8 9.5C10.5 9.5 11 11 11 11.5C11 12 10.5 12 10.5 12H5.5ZM8 9C8.39782 9 8.77936 8.84196 9.06066 8.56066C9.34196 8.27936 9.5 7.89782 9.5 7.5C9.5 7.10218 9.34196 6.72064 9.06066 6.43934C8.77936 6.15804 8.39782 6 8 6C7.60218 6 7.22064 6.15804 6.93934 6.43934C6.65804 6.72064 6.5 7.10218 6.5 7.5C6.5 7.89782 6.65804 8.27936 6.93934 8.56066C7.22064 8.84196 7.60218 9 8 9Z" />
</svg>
<span class="ms-2">Vendors</span>
</a>
</li>
<li>
<a class="m-link" href="app-project.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M15.4986 3L15.4586 3.87C15.7225 4.25355 15.8435 4.71745 15.8006 5.181L15.1636 12.181C15.1185 12.6779 14.8892 13.14 14.5208 13.4766C14.1525 13.8131 13.6716 13.9998 13.1726 14H6.99863V13H13.1726C13.4221 12.9998 13.6625 12.9063 13.8466 12.7379C14.0307 12.5696 14.1452 12.3385 14.1676 12.09L14.8046 5.09C14.8171 4.95165 14.8007 4.81221 14.7563 4.68058C14.7119 4.54894 14.6406 4.42799 14.5469 4.32544C14.4532 4.22289 14.3392 4.14099 14.212 4.08496C14.0849 4.02893 13.9475 3.99999 13.8086 4H2.18863C2.04972 3.99999 1.91232 4.02893 1.78521 4.08496C1.6581 4.14099 1.54406 4.22289 1.45035 4.32544C1.35664 4.42799 1.28533 4.54894 1.24096 4.68058C1.19659 4.81221 1.18013 4.95165 1.19263 5.09L1.45863 8H0.453629L0.19763 5.181C0.172486 4.9043 0.205268 4.6254 0.293886 4.36208C0.382505 4.09876 0.525016 3.85678 0.712335 3.65159C0.899653 3.4464 1.12767 3.28248 1.38185 3.17029C1.63603 3.05811 1.91079 3.00011 2.18863 3H6.17063C6.70102 2.99989 7.20964 2.7891 7.58463 2.414L8.41263 1.586C8.78762 1.2109 9.29624 1.00011 9.82663 1H13.4986C14.0291 1 14.5378 1.21071 14.9128 1.58579C15.2879 1.96086 15.4986 2.46957 15.4986 3V3ZM9.82663 2C9.56144 2.00006 9.30712 2.10545 9.11963 2.293L8.41263 3H13.8086C14.0486 3 14.2786 3.042 14.4916 3.12L14.4986 2.98C14.4934 2.71826 14.3857 2.46902 14.1988 2.28579C14.0118 2.10255 13.7604 1.99995 13.4986 2H9.82663V2Z"></path>
 <path class="fill-secondary" d="M5 6H6V14H5V6Z"></path>
<path class="fill-secondary" d="M3 6H4V14H3V6Z"></path>
<path class="fill-secondary" d="M6 6H6.5C7.88071 6 9 7.11929 9 8.5C9 9.88071 7.88071 11 6.5 11H6V6Z"></path>
</svg>
<span class="ms-2">Projects</span>
</a>
</li>
<li>
<a class="m-link" href="activites.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M0 3H16V4H0V3Z" />
<path d="M9 1H14V6H9V1Z" />
<path d="M0 13H16V14H0V13Z" />
<path d="M9 11H14V16H9V11Z" />
<path class="fill-secondary" d="M0 8H16V9H0V8Z" />
<path class="fill-secondary" d="M2 6H7V11H2V6Z" />
</svg>
<span class="ms-2">Activites</span>
</a>
</li>
</ul>
<ul class="menu-list">
<li class="divider py-2 lh-sm"><span class="small">RESOURCES</span><br> <small class="text-muted">you need to know about LUNO</small></li>
<li class="collapsed">
<a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M5.33801 1.59C4.38559 1.85248 3.43965 2.1379 2.50101 2.446C2.41529 2.47376 2.3391 2.52504 2.28111 2.59399C2.22312 2.66295 2.18567 2.7468 2.17301 2.836C1.61901 6.993 2.89901 10.026 4.42601 12.024C5.07252 12.8784 5.84341 13.6311 6.71301 14.257C7.05901 14.501 7.36501 14.677 7.60601 14.79C7.72601 14.847 7.82401 14.885 7.89901 14.908C7.93181 14.9195 7.96562 14.9279 8.00001 14.933C8.03398 14.9275 8.06743 14.9191 8.10001 14.908C8.17601 14.885 8.27401 14.847 8.39401 14.79C8.63401 14.677 8.94101 14.5 9.28701 14.257C10.1566 13.6311 10.9275 12.8784 11.574 12.024C13.101 10.027 14.381 6.993 13.827 2.836C13.8145 2.74676 13.777 2.66285 13.719 2.59388C13.661 2.52491 13.5848 2.47366 13.499 2.446C12.848 2.233 11.749 1.886 10.662 1.591C9.55201 1.29 8.53101 1.067 8.00001 1.067C7.47001 1.067 6.44801 1.289 5.33801 1.59ZM5.07201 0.56C6.15701 0.265 7.31001 0 8.00001 0C8.69001 0 9.84301 0.265 10.928 0.56C12.038 0.86 13.157 1.215 13.815 1.43C14.0901 1.52085 14.334 1.68747 14.5187 1.9107C14.7034 2.13394 14.8213 2.40474 14.859 2.692C15.455 7.169 14.072 10.487 12.394 12.682C11.6824 13.621 10.834 14.4479 9.87701 15.135C9.5461 15.3728 9.19549 15.5819 8.82901 15.76C8.54901 15.892 8.24801 16 8.00001 16C7.75201 16 7.45201 15.892 7.17101 15.76C6.80452 15.5819 6.45391 15.3728 6.12301 15.135C5.16603 14.4478 4.31759 13.621 3.60601 12.682C1.92801 10.487 0.545005 7.169 1.14101 2.692C1.17869 2.40474 1.29665 2.13394 1.48132 1.9107C1.666 1.68747 1.9099 1.52085 2.18501 1.43C3.1402 1.11681 4.10281 0.826725 5.07201 0.56Z" />
<path class="fill-secondary" d="M8 5.38462C8.21217 5.38462 8.41566 5.46566 8.56569 5.60992C8.71571 5.75418 8.8 5.94983 8.8 6.15385V6.53846H7.2V6.15385C7.2 5.94983 7.28429 5.75418 7.43431 5.60992C7.58434 5.46566 7.78783 5.38462 8 5.38462ZM9.2 6.53846V6.15385C9.2 5.84783 9.07357 5.55434 8.84853 5.33795C8.62348 5.12157 8.31826 5 8 5C7.68174 5 7.37652 5.12157 7.15147 5.33795C6.92643 5.55434 6.8 5.84783 6.8 6.15385V6.53846C6.58783 6.53846 6.38434 6.61951 6.23431 6.76376C6.08429 6.90802 6 7.10368 6 7.30769V9.23077C6 9.43478 6.08429 9.63044 6.23431 9.7747C6.38434 9.91896 6.58783 10 6.8 10H9.2C9.41217 10 9.61566 9.91896 9.76569 9.7747C9.91571 9.63044 10 9.43478 10 9.23077V7.30769C10 7.10368 9.91571 6.90802 9.76569 6.76376C9.61566 6.61951 9.41217 6.53846 9.2 6.53846Z" />
</svg>
<span class="ms-2">Authentication</span>
<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse" id="menu-Authentication">
<li><a class="ms-link" href="../auth-404.html">404</a></li>
<li><a class="ms-link" href="../auth-403.html">403</a></li>
<li><a class="ms-link" href="../auth-500.html">500</a></li>
<li><a class="ms-link" href="../auth-signin.html">Sign in</a></li>
<li><a class="ms-link" href="../auth-signup.html">Sign up</a></li>
<li><a class="ms-link" href="../auth-password-reset.html">Password reset</a></li>
<li><a class="ms-link" href="../auth-two-step.html">2-Step Authentication</a></li>
<li><a class="ms-link" href="../auth-lockscreen.html">Lockscreen</a></li>
<li><a class="ms-link" href="../auth-maintenance.html">Maintenance</a></li>
</ul>
</li>
<li>
<a class="m-link" href="../docs/index.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
</svg>
<span class="ms-2">Documentation</span>
</a>
</li>
<li>
<a class="m-link" href="../docs/doc-changelog.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
</svg>
<span class="ms-2">Changelog</span>
<span id="Changelog"></span>
</a>
</li>
</ul>
</div>


<ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#ScheduleModal" title="My Schedule">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
<path class="fill-secondary" d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal" title="My notes">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="../auth-signin.html" title="sign-out">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M7.5 1v7h1V1h-1z" />
<path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
</svg>
</a>
</li>
</ul>
</div>
</div>

<div class="wrapper">

<header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
<div class="container-fluid">
<nav class="navbar">

<div class="d-flex">
<button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
<span class="hamburger-icon">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</span>
</button>
<button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
<span class="hamburger-icon">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</span>
</button>
<a href="../index.html" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
<svg height="22" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
<path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
<path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
<path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
</svg>
</a>
</div>

<div class="header-left flex-grow-1 d-none d-md-block">
<div class="main-search px-3 flex-fill">
<input class="form-control" type="text" placeholder="Enter your search key word">
<div class="card shadow rounded-4 search-result slidedown">
<div class="card-body">
<small class="text-uppercase text-muted">Recent searches</small>
<div class="d-flex flex-wrap align-items-start mt-2 mb-4">
<a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="#">HRMS Admin</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-secondary text-white" href="#">Hospital Admin</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-info text-white" href="../app-project.html">Project</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-dark text-white" href="../app-social.html">Social App</a>
<a class="small rounded py-1 px-2 m-1 fw-normal bg-danger text-white" href="#">University Admin</a>
</div>
<small class="text-uppercase text-muted">Suggestions</small>
<div class="card list-group list-group-flush list-group-custom mt-2">
<a class="list-group-item list-group-item-action text-truncate" href="..//docs/doc-helperclass.html">
<div class="fw-bold">Helper Class</div>
<small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href="..//docs/element-daterange.html">
<div class="fw-bold">Date Range Picker</div>
<small class="text-muted">There are many variations of passages of Lorem Ipsum available</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href="..//docs/element-imageinput.html">
<div class="fw-bold">Image Input</div>
<small class="text-muted">It is a long established fact that a reader will be distracted</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href="..//docs/plugin-table.html">
<div class="fw-bold">DataTables for jQuery</div>
<small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
</a>
<a class="list-group-item list-group-item-action text-truncate" href="..//docs/doc-setup.html">
<div class="fw-bold">Development Setup</div>
<small class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text.</small>
</a>
</div>
</div>
</div>
</div>
</div>

<ul class="header-right justify-content-end d-flex align-items-center mb-0">

<li>
<div class="dropdown morphing scale-left notifications">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<span class="d-none d-xl-block me-2">Notification</span>
<svg class="d-inline-block d-xl-none" viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M8 1.91802L7.203 2.07902C6.29896 2.26322 5.48633 2.75412 4.90265 3.46864C4.31897 4.18316 4.0001 5.07741 4 6.00002C4 6.62802 3.866 8.19702 3.541 9.74202C3.381 10.509 3.165 11.308 2.878 12H13.122C12.835 11.308 12.62 10.51 12.459 9.74202C12.134 8.19702 12 6.62802 12 6.00002C11.9997 5.07758 11.6807 4.18357 11.097 3.46926C10.5134 2.75494 9.70087 2.26419 8.797 2.08002L8 1.91802ZM14.22 12C14.443 12.447 14.701 12.801 15 13H1C1.299 12.801 1.557 12.447 1.78 12C2.68 10.2 3 6.88002 3 6.00002C3 3.58002 4.72 1.56002 7.005 1.09902C6.99104 0.959974 7.00638 0.819547 7.05003 0.686794C7.09368 0.554041 7.16467 0.43191 7.25842 0.328279C7.35217 0.224647 7.4666 0.141815 7.59433 0.085125C7.72206 0.028435 7.86026 -0.000854492 8 -0.000854492C8.13974 -0.000854492 8.27794 0.028435 8.40567 0.085125C8.5334 0.141815 8.64783 0.224647 8.74158 0.328279C8.83533 0.43191 8.90632 0.554041 8.94997 0.686794C8.99362 0.819547 9.00896 0.959974 8.995 1.09902C10.1253 1.32892 11.1414 1.94238 11.8712 2.83552C12.6011 3.72866 12.9999 4.84659 13 6.00002C13 6.88002 13.32 10.2 14.22 12Z" />
<path class="fill-secondary" d="M9.41421 15.4142C9.03914 15.7893 8.53043 16 8 16C7.46957 16 6.96086 15.7893 6.58579 15.4142C6.21071 15.0391 6 14.5304 6 14H10C10 14.5304 9.78929 15.0391 9.41421 15.4142Z" fill="black" />
</svg>
</a>
<div id="NotificationsDiv" class="dropdown-menu shadow rounded-4 border-0 p-0 m-0">
<div class="card w380">
<div class="card-header p-3">
<h6 class="card-title mb-0">Notifications Center</h6>
<span class="badge bg-danger text-light">14</span>
</div>
<ul class="nav nav-tabs tab-card d-flex text-center" role="tablist">
<li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#Noti-tab-Message" role="tab">Message</a></li>
<li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Events" role="tab">Events</a></li>
<li class="nav-item flex-fill"><a class="nav-link" data-bs-toggle="tab" href="#Noti-tab-Logs" role="tab">Logs</a></li>
</ul>
<div class="tab-content card-body custom_scroll">
<div class="tab-pane fade show active" id="Noti-tab-Message" role="tabpanel">
<ul class="list-unstyled list mb-0">
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar5.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Olive Tree</span> <small>13MIN</small></p>
<span>making it over 2000 years old</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar6.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Del Phineum</span> <small>1HR</small></p>
<span>There are many variations of passages</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar1.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Rose Bush</span> <small>2MIN</small></p>
<span>changed an issue from "In Progress" to <span class="badge bg-success">Review</span></span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail">PT</div>
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Pat Thettick</span> <small>13MIN</small></p>
<span>It is a long established fact that a reader will be distracted</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar3.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Eileen Dover</span> <small>1HR</small></p>
<span>There are many variations of passages</span>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar4.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Carmen Goh</span> <small>1DAY</small></p>
<span>Contrary to popular belief <span class="badge bg-danger">Code</span></span>
</div>
</a>
</li>
<li class="py-2">
<a href="javascript:void(0);" class="d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/xs/avatar7.jpg')}}" alt="">
<div class="flex-fill ms-3">
<p class="d-flex justify-content-between mb-0"><span>Karen Onnabit</span> <small>1DAY</small></p>
<span>The generated Lorem Ipsum</span>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane fade" id="Noti-tab-Events" role="tabpanel">
<ul class="list-unstyled list mb-0">
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
<small>11:30 AM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-pie-chart fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Website visits from Twitter is <strong class="text-danger">27% higher</strong> than last week.</p>
<small>04:00 PM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-info-circle fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0">Campaign <strong class="text-primary">Holiday Sale</strong> is nearly reach budget limit.</p>
<small>10:00 AM Today</small>
</div>
</a>
</li>
<li class="py-2 mb-1 border-bottom">
<a href="javascript:void(0);" class="d-flex">
<div class="avatar rounded-circle no-thumbnail"><i class="fa fa-warning fa-lg"></i></div>
<div class="flex-fill ms-3">
<p class="mb-0"><strong class="text-warning">Error</strong> on website analytics configurations</p>
<small>Yesterday</small>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane fade" id="Noti-tab-Logs" role="tabpanel">
<h4 class="color-400">No Logs right now!</h4>
</div>
</div>
<a href="#" class="btn btn-primary text-light rounded-0">View all notifications</a>
</div>
</div>
</div>
</li>

<li class="d-none d-xl-inline-block">
<a class="nav-link fullscreen" href="javascript:void(0);" onclick="toggleFullScreen(documentElement)">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.8279 10.172C5.73414 10.0783 5.60698 10.0256 5.4744 10.0256C5.34182 10.0256 5.21467 10.0783 5.1209 10.172L1.0249 14.268V11.5C1.0249 11.3674 0.972224 11.2402 0.878456 11.1464C0.784688 11.0527 0.657511 11 0.524902 11C0.392294 11 0.265117 11.0527 0.171349 11.1464C0.0775808 11.2402 0.0249023 11.3674 0.0249023 11.5V15.475C0.0249023 15.6076 0.0775808 15.7348 0.171349 15.8285C0.265117 15.9223 0.392294 15.975 0.524902 15.975H4.4999C4.63251 15.975 4.75969 15.9223 4.85346 15.8285C4.94722 15.7348 4.9999 15.6076 4.9999 15.475C4.9999 15.3424 4.94722 15.2152 4.85346 15.1214C4.75969 15.0277 4.63251 14.975 4.4999 14.975H1.7319L5.8279 10.879C5.92164 10.7852 5.9743 10.6581 5.9743 10.5255C5.9743 10.3929 5.92164 10.2658 5.8279 10.172ZM10.1719 10.172C10.2657 10.0783 10.3928 10.0256 10.5254 10.0256C10.658 10.0256 10.7851 10.0783 10.8789 10.172L14.9749 14.268V11.5C14.9749 11.3674 15.0276 11.2402 15.1213 11.1464C15.2151 11.0527 15.3423 11 15.4749 11C15.6075 11 15.7347 11.0527 15.8285 11.1464C15.9222 11.2402 15.9749 11.3674 15.9749 11.5V15.475C15.9749 15.6076 15.9222 15.7348 15.8285 15.8285C15.7347 15.9223 15.6075 15.975 15.4749 15.975H11.4999C11.3673 15.975 11.2401 15.9223 11.1463 15.8285C11.0526 15.7348 10.9999 15.6076 10.9999 15.475C10.9999 15.3424 11.0526 15.2152 11.1463 15.1214C11.2401 15.0277 11.3673 14.975 11.4999 14.975H14.2679L10.1719 10.879C10.0782 10.7852 10.0255 10.6581 10.0255 10.5255C10.0255 10.3929 10.0782 10.2658 10.1719 10.172ZM5.8279 5.82799C5.73414 5.92173 5.60698 5.97439 5.4744 5.97439C5.34182 5.97439 5.21467 5.92173 5.1209 5.82799L1.0249 1.73199V4.49999C1.0249 4.6326 0.972224 4.75978 0.878456 4.85355C0.784688 4.94732 0.657511 4.99999 0.524902 4.99999C0.392294 4.99999 0.265117 4.94732 0.171349 4.85355C0.0775808 4.75978 0.0249023 4.6326 0.0249023 4.49999V0.524994C0.0249023 0.392386 0.0775808 0.265209 0.171349 0.17144C0.265117 0.0776723 0.392294 0.0249939 0.524902 0.0249939H4.4999C4.63251 0.0249939 4.75969 0.0776723 4.85346 0.17144C4.94722 0.265209 4.9999 0.392386 4.9999 0.524994C4.9999 0.657602 4.94722 0.784779 4.85346 0.878547C4.75969 0.972315 4.63251 1.02499 4.4999 1.02499H1.7319L5.8279 5.12099C5.92164 5.21476 5.9743 5.34191 5.9743 5.47449C5.9743 5.60708 5.92164 5.73423 5.8279 5.82799Z" />
<path class="fill-secondary" d="M10.5253 5.97439C10.3927 5.97439 10.2655 5.92173 10.1718 5.82799C10.078 5.73423 10.0254 5.60708 10.0254 5.47449C10.0254 5.34191 10.078 5.21476 10.1718 5.12099L14.2678 1.02499H11.4998C11.3672 1.02499 11.24 0.972315 11.1462 0.878547C11.0525 0.784779 10.9998 0.657602 10.9998 0.524994C10.9998 0.392386 11.0525 0.265209 11.1462 0.17144C11.24 0.0776723 11.3672 0.0249939 11.4998 0.0249939H15.4748C15.6074 0.0249939 15.7346 0.0776723 15.8283 0.17144C15.9221 0.265209 15.9748 0.392386 15.9748 0.524994V4.49999C15.9748 4.6326 15.9221 4.75978 15.8283 4.85355C15.7346 4.94732 15.6074 4.99999 15.4748 4.99999C15.3422 4.99999 15.215 4.94732 15.1212 4.85355C15.0275 4.75978 14.9748 4.6326 14.9748 4.49999V1.73199L10.8788 5.82799C10.785 5.92173 10.6579 5.97439 10.5253 5.97439Z" />
</svg>
</a>
</li>

<li class="d-none d-xl-inline-block">
<div class="dropdown morphing scale-left Language mx-sm-2">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
<path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
</svg>
</a>
<div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
<div class="card">
<div class="list-group list-group-custom" style="width: 200px;">
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-gb me-2"></span>UK English</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-us me-2"></span>US English</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-de me-2"></span>Germany</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-in me-2"></span>Hindi</a>
<a href="#" class="list-group-item"><span class="flag-icon flag-icon-sa me-2"></span>Saudi Arabia</a>
</div>
</div>
</div>
</div>
</li>

<li class="d-none d-lg-inline-block">
<div class="dropdown morphing scale-left grid-menu mx-sm-2">
<a class="nav-link dropdown-toggle after-none" href="#" role="button" data-bs-toggle="dropdown">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10H5C5.26522 10 5.51957 10.1054 5.70711 10.2929C5.89464 10.4804 6 10.7348 6 11V14C6 14.2652 5.89464 14.5196 5.70711 14.7071C5.51957 14.8946 5.26522 15 5 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V11C1 10.7348 1.10536 10.4804 1.29289 10.2929C1.48043 10.1054 1.73478 10 2 10ZM11 1H14C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V5C15 5.26522 14.8946 5.51957 14.7071 5.70711C14.5196 5.89464 14.2652 6 14 6H11C10.7348 6 10.4804 5.89464 10.2929 5.70711C10.1054 5.51957 10 5.26522 10 5V2C10 1.73478 10.1054 1.48043 10.2929 1.29289C10.4804 1.10536 10.7348 1 11 1ZM11 10C10.7348 10 10.4804 10.1054 10.2929 10.2929C10.1054 10.4804 10 10.7348 10 11V14C10 14.2652 10.1054 14.5196 10.2929 14.7071C10.4804 14.8946 10.7348 15 11 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V11C15 10.7348 14.8946 10.4804 14.7071 10.2929C14.5196 10.1054 14.2652 10 14 10H11ZM11 0C10.4696 0 9.96086 0.210714 9.58579 0.585786C9.21071 0.960859 9 1.46957 9 2V5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H14C14.5304 7 15.0391 6.78929 15.4142 6.41421C15.7893 6.03914 16 5.53043 16 5V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L11 0ZM2 9C1.46957 9 0.960859 9.21071 0.585786 9.58579C0.210714 9.96086 0 10.4696 0 11L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H5C5.53043 16 6.03914 15.7893 6.41421 15.4142C6.78929 15.0391 7 14.5304 7 14V11C7 10.4696 6.78929 9.96086 6.41421 9.58579C6.03914 9.21071 5.53043 9 5 9H2ZM9 11C9 10.4696 9.21071 9.96086 9.58579 9.58579C9.96086 9.21071 10.4696 9 11 9H14C14.5304 9 15.0391 9.21071 15.4142 9.58579C15.7893 9.96086 16 10.4696 16 11V14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16H11C10.4696 16 9.96086 15.7893 9.58579 15.4142C9.21071 15.0391 9 14.5304 9 14V11Z" />
<path class="fill-secondary" d="M0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V5C0 5.53043 0.210714 6.03914 0.585786 6.41421C0.960859 6.78929 1.46957 7 2 7H5C5.53043 7 6.03914 6.78929 6.41421 6.41421C6.78929 6.03914 7 5.53043 7 5V2C7 1.46957 6.78929 0.960859 6.41421 0.585786C6.03914 0.210714 5.53043 0 5 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786Z" />
</svg>
</a>
<div class="dropdown-menu rounded-4 shadow border-0 p-0" data-bs-popper="none">
<div class="card">
<div class="row g-1 text-center p-3" style="width: 302px;">
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="../dashboard.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
</svg>
<p class="mb-0 color-600">Dashboard</p>
<small class="text-muted">View All</small>
</a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="../app.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
<path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
</svg>
<p class="mb-0 color-600">Application</p>
<small class="text-muted">View All</small>
</a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="../crafted-page.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 4.5V9H13V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2V9H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5ZM13 12H14V14C14 14.5304 13.7893 15.0391 13.4142 15.4142C13.0391 15.7893 12.5304 16 12 16H4C3.46957 16 2.96086 15.7893 2.58579 15.4142C2.21071 15.0391 2 14.5304 2 14V12H3V14C3 14.2652 3.10536 14.5196 3.29289 14.7071C3.48043 14.8946 3.73478 15 4 15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V12Z" />
<path class="fill-secondary" d="M0.146447 10.1464C0.240215 10.0527 0.367392 10 0.5 10H15.5C15.6326 10 15.7598 10.0527 15.8536 10.1464C15.9473 10.2402 16 10.3674 16 10.5C16 10.6326 15.9473 10.7598 15.8536 10.8536C15.7598 10.9473 15.6326 11 15.5 11H0.5C0.367392 11 0.240215 10.9473 0.146447 10.8536C0.0526784 10.7598 0 10.6326 0 10.5C0 10.3674 0.0526784 10.2402 0.146447 10.1464Z" fill="black" />
</svg>
<p class="mb-0 color-600">Pages</p>
<small class="text-muted">Crafted Pages</small>
</a>
</div>
<div class="col-6">
<a class="card p-3 color-600 lift align-items-center" href="../layouts.html" title="">
<svg viewBox="0 0 16 16" width="30px" class="mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
</svg>
<p class="mb-0 color-600">Layouts</p>
<small class="text-muted">Crafted Layout</small>
</a>
</div>
</div>
</div>
</div>
</div>
</li>

<li class="d-none d-sm-inline-block d-xl-none">
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
</svg>
</a>
</li>

<li class="d-none d-sm-inline-block d-xl-none">
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
</svg>
</a>
</li>

<li>
<a class="nav-link quick-light-dark" href="#">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
<path class="fill-secondary" d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
</svg>
</a>
</li>

<li>
<div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
<a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#" role="button" data-bs-toggle="dropdown">
<img class="avatar img-thumbnail rounded-circle shadow" src="{{asset('assets/img/profile_av.png')}}" alt="">
</a>
<div class="dropdown-menu border-0 rounded-4 shadow p-0">
<div class="card border-0 w240">
<div class="card-body border-bottom d-flex">
<img class="avatar rounded-circle" src="{{asset('assets/img/profile_av.png')}}" alt="">
<div class="flex-fill ms-3">
<h6 class="card-title mb-0">Allie Grater</h6>
<span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c6cbcbcec2c0d5c6d3c2d5e7cbd2c9c889c4c8ca">[email&#160;protected]</a></span>
</div>
</div>
<div class="list-group m-2 mb-3">
<a class="list-group-item list-group-item-action border-0" href="page-profile.html"><i class="w30 fa fa-user"></i>My Profile</a>
<a class="list-group-item list-group-item-action border-0" href="account-settings.html"><i class="w30 fa fa-gear"></i>Settings</a>
<a class="list-group-item list-group-item-action border-0" href="account-billing.html"><i class="w30 fa fa-credit-card"></i>Billing</a>
<a class="list-group-item list-group-item-action border-0" href="../page-teamsboard.html"><i class="w30 fa fa-users"></i>Manage Team</a>
<a class="list-group-item list-group-item-action border-0" href="../dashboard-enevt.html"><i class="w30 fa fa-calendar"></i>My Events</a>
<a class="list-group-item list-group-item-action border-0" href="../page-support-ticket.html"><i class="w30 fa fa-tag"></i>Support Ticket</a>
</div>
<a href="../auth-signin.html" class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
</div>
</div>
</div>
</li>

<li>
<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SettingsModal" title="Settings">
<svg viewBox="0 0 16 16" width="18px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path class="fill-secondary" d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
</svg>
</a>
</li>
</ul>
</nav>
</div>
</header>

<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
<div class="container-fluid">
<div class="row g-3 mb-3 align-items-center">
<div class="col">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a class="text-secondary" href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
</div>
</div>
<div class="row align-items-center">
<div class="col">
<h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Allie!</h1>
<small class="text-muted">You have 12 new messages and 7 new notifications.</small>
</div>
<div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">

<div class="input-group">
<input class="form-control" type="text" name="daterange">
<button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Send Report"><i class="fa fa-envelope"></i></button>
<button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Download Reports"><i class="fa fa-download"></i></button>
<button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
<button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/bundle/daterangepicker.bundle.js')}}"></script>

<script>
              // date range picker
              $(function() {
                $('input[name="daterange"]').daterangepicker({
                  opens: 'left'
                }, function(start, end, label) {
                  console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
              })
            </script>
</div>
</div>
</div>
</div>

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
<div class="container-fluid">
<div class="row row-cols-xxl-5 row-cols-xxl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 mb-3 row-deck">
<div class="col">
<div class="card">
<div class="card-body d-flex align-items-center">
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-address-book fa-lg"></i></div>
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
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-product-hunt fa-lg"></i></div>
<div class="flex-fill ms-3 text-truncate">
<div class="small text-uppercase">New Products</div>
<div><span class="h6 mb-0 fw-bold">18</span> <small class="text-danger">-17%</small></div>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card">
<div class="card-body d-flex align-items-center">
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-briefcase fa-lg"></i></div>
<div class="flex-fill ms-3 text-truncate">
<div class="small text-uppercase">New Leads</div>
<div><span class="h6 mb-0 fw-bold">89</span> <small class="text-success">+8%</small></div>
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
<div><span class="h6 mb-0 fw-bold">$8,925</span> <small class="text-danger">-3%</small></div>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card">
<div class="card-body d-flex align-items-center">
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-file-text fa-lg"></i></div>
<div class="flex-fill ms-3 text-truncate">
<div class="small text-uppercase">Contracts closed</div>
<div><span class="h6 mb-0 fw-bold">25</span> <small class="text-danger">-12%</small></div>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card">
<div class="card-body d-flex align-items-center">
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-user-plus fa-lg"></i></div>
<div class="flex-fill ms-3 text-truncate">
<div class="small text-uppercase">Active Client</div>
<div><span class="h6 mb-0 fw-bold">11</span> <small class="text-danger">-4%</small></div>
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
<div><span class="h6 mb-0 fw-bold">23</span> <small class="text-success">+7%</small></div>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card">
<div class="card-body d-flex align-items-center">
<div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-user-secret fa-lg"></i></div>
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
<div><span class="h6 mb-0 fw-bold">$2,908</span> <small class="text-danger">-6%</small></div>
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
<div><span class="h6 mb-0 fw-bold">$4,580</span> <small class="text-danger">-10%</small></div>
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
<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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
<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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
<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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
<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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
<div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="d-flex justify-content-between">
<span>Design iOS app</span>
<span>76K</span>
</div>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-warning" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="d-flex justify-content-between">
<span>Internet configuration</span>
<span>52K</span>
</div>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="d-flex justify-content-between">
<span>Angular Admin</span>
<span>46K</span>
</div>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-primary" role="progressbar" style="width: 46%;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<div class="d-flex justify-content-between">
<span>Web Solution</span>
<span>34K</span>
</div>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-info" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
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
<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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

<footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
<div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
<p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
<a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
<svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
<path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
<path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
<path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
</svg>
</a>
<ul class="nav col-md-4 justify-content-center justify-content-lg-end">
<li class="nav-item"><a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="nav-link px-2 text-muted">Portfolio</a></li>
<li class="nav-item"><a href="https://themeforest.net/licenses/standard" target="_blank" class="nav-link px-2 text-muted">licenses</a></li>
<li class="nav-item"><a href="https://help.market.envato.com/hc/en-us" target="_blank" class="nav-link px-2 text-muted">Support</a></li>
<li class="nav-item"><a href="https://themeforest.net/licenses/faq" target="_blank" class="nav-link px-2 text-muted">FAQs</a></li>
</ul>
</div>
</footer>
</div>

<div class="modal fade" id="CreateNew" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content rounded-0">
<div class="modal-header">
<h5 class="modal-title">Setup new project</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="progress bg-transparent" style="height: 3px;">
<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
</div>
<div class="modal-body custom_scroll">
<ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
<li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane fade show active" id="step1">
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Type</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>

<div class="c_radio d-flex flex-md-wrap">
<label class="m-1 w-100" for="Personal">
<input type="radio" name="plan" id="Personal" checked />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Personal Project</span>
<span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
</span>
</span>
</span>
</label>
<label class="m-1 w-100" for="Team">
<input type="radio" name="plan" id="Team" />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
<path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
<path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Team Project</span>
<span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
</span>
</span>
</span>
</label>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Details</h6>
<p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
<div class="form-floating mb-2">
<select class="form-select">
<option selected>Open this select menu</option>
<option value="1">Lucid</option>
<option value="2">LUNO</option>
<option value="3">Luno</option>
</select>
<label>Choose a Customer *</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Project name">
<label>Project name *</label>
</div>
<div class="form-floating mb-2">
<textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
<label>Add project details</label>
</div>
<div class="form-floating mb-2">
<input type="date" class="form-control">
<label>Enter release Date *</label>
</div>
<div class="d-flex justify-content-between">
<div class="text-muted">Allow Notifications *</div>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
<label class="form-check-label" for="allow_phone">Phone</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_email" value="option2">
<label class="form-check-label" for="allow_email">Email</label>
</div>
</div>
</div>
</div>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
</div>
</div>
<div class="tab-pane fade" id="step2">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Build a Team</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
<div class="form-floating mb-4">
<input type="text" class="form-control" placeholder="Invite Teammates">
<label>Invite Teammates</label>
</div>
<h6 class="card-title mb-1">Team Members</h6>
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" id="list-group6" checked="">
<label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
</div>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar1.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Angular Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar2.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Joge Lucky</div>
<small class="text-muted">ReactJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar3.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">NodeJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar4.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Sr. Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar5.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar6.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Front-End Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar7.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">QA</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{asset('assets/img/xs/avatar8.jpg')}}" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Laravel Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
</div>
</div>
<div class="tab-pane fade" id="step3">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Upload Files</h6>
<div class="mb-4">
<label class="form-label small">Upload up to 10 files</label>
<input class="form-control" type="file" multiple>
</div>
<span>Already Uploaded File</span>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Annual Sales Report 2018-19</p>
<small class="text-muted">.pdf, 5.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Complete Product Sheet</p>
<small class="text-muted">.xls, 2.1 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Marketing Guidelines</p>
<small class="text-muted">.doc, 2.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Brand Photography</p>
<small class="text-muted">.zip, 30.5 MB</small>
</div>
</div>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
</div>
</div>
<div class="tab-pane fade" id="step4">
<div class="card text-center">
<div class="card-body">
<h4 class="card-title mb-1">Project Created!</h4>
<span class="text-muted">If you need more info, please check how to create project</span>
</div>
<div class="card-body">
<button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
<button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
</div>
<div class="card-body">
<img class="img-fluid" src="{{asset('assets/img/project-team.svg')}}" alt="" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="MynotesModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header px-4">
<h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="bg-light px-4 py-3">
<ul class="nav nav-pills nav-fill" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
</li>
</ul>
</div>
<div class="modal-body px-4 custom_scroll">
<div class="tab-content p-0">
<div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-primary position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 January 2021</span>
<p class="lead">Give Review for design</p>
<span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-success position-absolute"></div>
<div class="card-body">
<span class="text-muted">17 January 2022</span>
<p class="lead">Give salary to employee</p>
<span>The generated Lorem Ipsum is therefore always free from repetition</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-info position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 Fabruary 2020</span>
<p class="lead">Launch new template</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
 </div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Note Title">
<label>Note Title</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control datepicker" placeholder="Select Date">
<label>Select Date</label>
</div>
<div class="form-floating mb-2">
<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
<option selected>Open this select menu</option>
<option value="1">Business</option>
<option value="2">Social</option>
</select>
<label>Works with selects</label>
</div>
<div class="form-floating mb-4">
<textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
<label>Leave a comment here</label>
</div>
<button type="button" class="btn btn-primary lift">Save note</button>
<button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="ScheduleModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-secondary rounded-0">
<h5 class="modal-title text-light">Schedule</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body custom_scroll">
<div class="ps-2">

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Danny at Colby's</div>
<small class="text-muted">Today - 11:32am</small>
</div>
</div>

<div class="timeline-item ti-info p-3">
<div class="timeline-icon">
<img class="avatar sm rounded-circle" src="../assets/img/xs/avatar1.jpg" alt="">
</div>
<div class="timeline-content ms-3">
<div>Meeting with Alice</div>
<small class="text-muted">Today - 12:50pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-comment"></i>
</div>
<div class="timeline-content ms-3">
<div>Answer Annie's message</div>
<small class="text-muted">Today - 01:35pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Send new campaign</div>
<small class="text-muted">Today - 02:40pm</small>
</div>
</div>

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-smile-o"></i>
</div>
<div class="timeline-content ms-3">
<div>Project review</div>
<small class="text-muted">Today - 03:15pm</small>
</div>
</div>

<div class="timeline-item ti-warning p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Trisha Jackson</div>
<small class="text-muted">Today - 05:40pm</small>
</div>
</div>

<div class="timeline-item ti-success p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-leaf"></i>
</div>
<div class="timeline-content ms-3">
<div>Write proposal for Don</div>
<small class="text-muted">Today - 06:30pm</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="RecentChat" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="d-flex align-items-start">
<div class="nav flex-column nav-pills p-3 h-100">
<a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
 <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar3.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar4.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar5.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar6.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar7.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar8.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar9.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar10.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar5.jpg" alt="avatar">
</a>
</div>
<div class="tab-content shadow-sm">
<div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="../assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-left">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="../assets/img/gallery/3.jpg" alt="">
<img class="w120 img-thumbnail" src="../assets/img/gallery/4.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-left">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="../assets/img/gallery/1.jpg" alt="">
<img class="w120 img-thumbnail" src="../assets/img/gallery/2.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
 <div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="../assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
<button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
<label>Primary Color</label>
</li>
<li>
<button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
<label>Secondary Color</label>
</li>
<li>
<button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
<label>Site Background</label>
</li>
<li>
<button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Widget Background</label>
</li>
<li>
<button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Border Color</label>
</li>
</ul>
</div>
<div class="col-5">
<ul class="list-unstyled mb-0">
<li>
<button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
<label>Chart Color 1</label>
</li>
<li>
<button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
<label>Chart Color 2</label>
</li>
<li>
<button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
<label>Chart Color 3</label>
</li>
<li>
<button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
<label>Chart Color 4</label>
</li>
<li>
<button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
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
<img class="img-fluid" src="../assets/img/dark-version.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1 theme-dark" for="theme-dark">
<input type="checkbox" id="theme-dark" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/dark-theme.svg" alt="Theme Dark Mode" />
</span>
</label>
<label class="m-1 theme-high-contrast" for="theme-high-contrast">
<input type="checkbox" id="theme-high-contrast" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/high-version.svg" alt="High Contrast" />
</span>
</label>
<label class="m-1 theme-rtl" for="theme-rtl">
<input type="checkbox" id="theme-rtl" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/rtl-version.svg" alt="RTL Mode!" />
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
<img class="img-fluid" src="../assets/img/font-opensans.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-quicksand">
<input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/font-quicksand.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-nunito">
<input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/font-nunito.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-raleway">
<input type="radio" name="font" id="font-raleway" value="font-raleway" />
<span class="card p-2">
<img class="img-fluid" src="../assets/img/font-raleway.svg" alt="Dark Mode" />
</span>
</label>
</div>
</div>

<div class="m-1 p-3 bg-body rounded-4 mb-4">
<p>Dynamic Font Settings</p>
<div class="mb-2">
<label class="form-label small text-muted mb-0">Enter font URL</label>
<input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
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
<li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="../assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
<li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="../assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
<li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="../assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
<li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="../assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
<li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="../assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
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
<a class="btn lift  btn-outline-secondary" href="../marketing/index.html">Marketing page</a>
<a class="btn lift  btn-outline-secondary" href="../onepgae-uikit/onepage.html">Landing page</a>
<a class="btn lift  btn-outline-secondary" href="../onepgae-uikit/index.html">One page Ui Kit Elements</a>
</div>
</div>
<div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
<button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
<button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<script src="../assets/js/theme.js"></script>

<script src="../assets/js/bundle/apexcharts.bundle.js"></script>

<script src="../assets/js/bundle/apexcharts.bundle.js"></script>
<script>
    $(function() {
      // Outbound Calls & Contact Rate per weekday
      var options = {
        series: [{
          name: 'Outbound Calls',
          type: 'column',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
        }, {
          name: 'Contact Rate',
          type: 'line',
          data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
        colors: ['var(--chart-color1)', 'var(--chart-color5)'],
        chart: {
          height: 320,
          type: 'line',
          toolbar: {
            show: false,
          },
        },
        stroke: {
          width: [0, 4]
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [1]
        },
        labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
        xaxis: {
          type: 'datetime'
        },
        yaxis: [{
          title: {
            text: 'Outbound Calls',
          },
        }, {
          opposite: true,
          title: {
            text: 'Contact Rate'
          }
        }]
      };
      var chart = new ApexCharts(document.querySelector("#apex-OutboundCalls"), options);
      chart.render();
      // Sales Statistics
      var options = {
        series: [{
          name: 'Revenue',
          data: [13, 23, 20, 8, 13, 27, 33, 12, 67, 22, 43, 21, 49, 13, 23]
        }, {
          name: 'Cost',
          data: [44, 55, 41, 67, 22, 43, 21, 49, 13, 23, 20, 8, 13, 27, 33]
        }],
        chart: {
          type: 'bar',
          height: 240,
          stacked: true,
          //stackType: '100%',
          toolbar: {
            show: false,
          },
        },
        colors: ['var(--chart-color1)', 'var(--chart-color5)'],
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        xaxis: {
          categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ],
        },
        fill: {
          opacity: 1
        },
        dataLabels: {
          enabled: false,
        },
        legend: {
          position: 'bottom',
        },
        tooltip: {
          y: [{
            title: {
              formatter: function(val) {
                return val + " (K)"
              }
            }
          }, {
            title: {
              formatter: function(val) {
                return val + " (K)"
              }
            }
          }]
        },
      };
      var chart = new ApexCharts(document.querySelector("#apex-SalesStatistics"), options);
      chart.render();
      // Top Selling Plans
      var options = {
        series: [32, 56, 12],
        chart: {
          type: 'donut',
          width: 340,
          toolbar: {
            show: false,
          },
        },
        responsive: [{
          breakpoint: 1200,
          options: {
            chart: {
              width: 260
            },
            legend: {
              position: 'bottom'
            }
          }
        }],
        labels: ['Plan 1', 'Plan 2', 'Plan 3'],
        colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
        dataLabels: {
          enabled: false
        },
        legend: {
          position: 'bottom', // top, bottom
          enabled: false
        }
      };
      var chart = new ApexCharts(document.querySelector("#apex-TopSellingPlans"), options);
      chart.render();
    })
  </script>
</body>
</html>
