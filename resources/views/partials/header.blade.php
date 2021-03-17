 <header id="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="logo">
                            <a class="d-flex" href="{{ route('home.path') }}" title="Payyed - HTML Template"><img src="{{ asset('assets/images/logo.png') }}" width="121" height="33" alt="Payyed" /></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>

                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    @if(!Route::is('contact.path'))
                                        <li><a href="#why-choose-us">Pourquoi nous choisir ?</a></li>
                                        <li><a href="#solutions-for-anyone">Une solution pour tous</a></li>
                                        <li><a href="#how-it-works">Comment ça marche</a></li>
                                    @endif
                                    <li><a href="{{ route('contact.path') }}">Nos contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header-column justify-content-end">
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                @if(!auth()->check())
                                <li><a href="{{ route('login') }}">S'identifier</a> </li>
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary" href="{{ route('register') }}">S'inscrire</a></li>
                                @else
                                 <li><a href="{{ route('login') }}">Logout</a> </li>
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary" href="{{ route('user.account') }}">Compte</a></li>

                                @endif
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>