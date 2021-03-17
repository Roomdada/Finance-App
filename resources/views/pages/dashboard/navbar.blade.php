  <aside class="col-lg-3">
                        <!-- Profile Details =============================== -->
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <div class="profile-thumb mt-3 mb-4"> <img height="100px" width="100px" class="rounded-circle" src="{{ asset('avatar.png') }}" alt="">
                              
                            </div>
                            <p class="text-muted opacity-8 mb-2">Code parrainage: {{auth()->user()->code_parrain}}</p>
                            <p class="text-3 font-weight-500 mb-2">{{auth()->user()->fitstname .' '.auth()->user()->lastname}}</p>
                            <p class="mb-2"><a href="profile.html" class="text-5 text-light" data-toggle="tooltip" title="Editer votre Profile"><i class="fas fa-edit"></i></a></p>
                        </div>
                        <!-- Profile Details End -->

                        <!-- Available Balance =============================== -->
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                            <h3 class="text-9 font-weight-400">295K FCFA</h3>
                            <p class="mb-2 text-muted opacity-8">Solde Disponible</p>
                            <hr class="mx-n3">
                            <div class="d-flex">
                                <a href="{{ route('user.requests','retrait') }}" class="btn-link mr-auto">Retrait</a>
                                <a href="{{ route('user.requests','depot') }}" class="btn-link ml-auto">Depôt</a>
                            </div>
                        </div>
                        <!-- Available Balance End -->


                    </aside>