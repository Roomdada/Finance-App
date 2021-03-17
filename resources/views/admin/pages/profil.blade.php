@extends('admin.wrapper')

@section('container')

<div class="user-profile-page">
    <div class="card radius-15">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-7 border-right">
                    <div class="d-md-flex align-items-center">
                        <div class="mb-md-0 mb-3">
                           @if($user->sexe=='H') <img src="/svg/homme.jpg" class="rounded-circle shadow" width="130" height="130" alt="" /> @else <img src="/svg/femme.jpg" class="rounded-circle shadow" width="130" height="130" alt="" />  @endif
                        </div>
                        <div class="ml-md-4 flex-grow-1">
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="mb-0">{{ $user->firstname }}  {{ $user->lastname }}</h4>
                                <p class="mb-0 ml-auto">$44/hr</p>
                            </div>
                            <button type="button" class="btn btn-primary">Supprimer le compte</button>
                            <button type="button" class="btn btn-outline-secondary ml-2">Valider le compte</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <table class="table table-sm table-borderless mt-md-0 mt-3">
                        <tbody>
                            <tr>
                                <th>Status du compte:</th>
                                <td>
                                    @if($user->validation_2==1) <span class="badge badge-success">compte valide</span> @else <span class="badge badge-danger">compte invalide</span>  @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Email : </th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Numero de telephone :</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>Pays</th>
                                <td>{{ $user->country }}</td>
                            </tr>
                            <tr>
                                <th>
                                    Lien de parrainage
                                </th>
                                <td>
                                    <input type="text" value="{{ route('register.parrainage',$user->code_parrain) }}" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end row-->
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="Experience">
                    <div class="card shadow-none border mb-0 radius-15">
                        <div class="card-body">
                            <div class="d-sm-flex align-items-center mb-3">
                                <h4 class="mb-0">Investissement</h4>
                            </div>
                            <hr>
                            @foreach ($user->transaction as $trasaction )
                                <div class="media">
                                    <div class="media-body ml-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <h5 class="mb-0">Graphic Designer</h5>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5 class="text-muted mb-0"><i class='bx bx-time'></i> Feb-2017-Dec-2017</h5>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5 class="text-muted mb-0"><i class='bx bxs-map'></i> New York, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Biography">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-none border mb-0">
                                <div class="card-body">
                                    <h5 class="mb-3">Websites</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="mb-0"><i class='bx bx-globe'></i> Website: <a href="javascript:;">svetlananyukova.com</a>
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="mb-0"><i class='bx bxl-blogger'></i> Blog: <a href="javascript:;">blog.svetlananyukova.com</a>
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="mb-0"><i class='bx bx-images'></i> Portfolio: <a href="javascript:;">svetlananyukova.com/portfolio</a>
                                        </p>
                                    </li>
                                </ul>
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

@stop
