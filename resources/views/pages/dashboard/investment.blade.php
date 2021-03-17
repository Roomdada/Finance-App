@extends('layouts.dash')
@section('content')
<div id="content" class="py-4">
            <div class="container">
                <div class="row">

                    <!-- Left Panel ============================================= -->
                     @include('pages.dashboard.navbar')
                   
                    <!-- Left Panel End -->

                    <!-- Middle Panel ============================================= -->
                    <div class="col-lg-9">
                        <h2 class="font-weight-400 mb-3">Filleuls</h2>



                        <!-- All Transactions ============================================= -->
                        <div class="bg-white shadow-sm rounded py-4 mb-4">
                            <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-4">Toutes les filleuls</h3>
                            <!-- Title =============================== -->
                            <div class="transaction-title py-2 px-4">
                                <div class="row">
                                    <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                                    <div class="col col-sm-7">Nom complet du filleul</div>
                                    <div class="col-auto col-sm-3 d-none d-sm-block text-center">Status du compte</div>
                                    <div class="col-3 col-sm-1 text-right">Apport</div>
                                </div>
                            </div>
                            <!-- Title End -->

                            <!-- Godson List =============================== -->
                            <div class="transaction-list">
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-toggle="tooltip" data-original-title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">04</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $106</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-toggle="tooltip" data-original-title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">John Doe</span></div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Godson List End -->

                            <!-- Pagination ============================================= -->
                            <ul class="pagination justify-content-center mt-4 mb-0">
                                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"> <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a> </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
                            </ul>
                            <!-- Paginations end -->

                        </div>
                        <!-- All Transactions End -->
                    </div>
                    <!-- Middle End -->
                </div>
            </div>
        </div>
@stop