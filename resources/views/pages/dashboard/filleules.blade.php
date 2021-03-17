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

                                @foreach($filleules as $user)
                                    <div class="transaction-item px-4 py-3">
                                        <div class="row align-items-center flex-row">
                                            <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                            <div class="col col-sm-7"> <span class="d-block text-4">{{$user->firstname}} {{$user->lastname}}</span></div>
                                            <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-{{$user->validation_admin ? 'success' : 'warning'}}" data-toggle="tooltip" data-original-title="{{$user->validation_admin ? 'validé' : "En attente"}}"><i class="fas fa-ellipsis-h"></i></span> </div>
                                            <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                                        </div>
                                    </div>
                                @endforeach

                               

                            
                            </div>
                            <!-- Godson List End -->

                            <!-- Pagination ============================================= -->
                            <ul class="pagination justify-content-center mt-4 mb-0">
                               {{$filleules->links()}}
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