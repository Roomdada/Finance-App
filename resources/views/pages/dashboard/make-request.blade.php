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
                        <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                            <h3 class="text-5 font-weight-400 mb-3 mb-sm-4">{{$type== 'depot' ? 'Insvestisement' : 'Retrait' }}</h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">
                            <!-- Send Money Form ============================ -->
                            @if(session()->has('message'))
                              <div class="alert alert-success">
                                  {{session()->get('message')}}
                              </div>
                            @endif
                            @if($type == 'depot')
                               @livewire('depot')
                             @else
                               @livewire('retrait')
                            </form>
                            @endif
                            <!-- Send Money Form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop