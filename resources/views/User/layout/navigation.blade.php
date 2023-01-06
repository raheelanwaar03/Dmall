<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User Dashboard</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dmall</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('User.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Product
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('User.AddToCart') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cart Products</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Orders:</h6>
                        <a class="collapse-item" href="{{ route('User.Order.Index') }}">All Orders</a>
                        <a class="collapse-item" href="{{ route('User.Order.compeleted') }}">Delivered Orders</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                function
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('User.Address.index') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Address</span>
                </a>
            </li>
            {{-- @if (purchasingCheck() >= referlinkLimit()) --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('User.WidthrawalReq.view') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Widthraw Balance</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('User.Widthrawal.Transcation.Details') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>All Transaction</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('User.Refer') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Referal Link</span></a>
            </li>
            {{-- @endif --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('User.AllRefer') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>All Refered Friends</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

