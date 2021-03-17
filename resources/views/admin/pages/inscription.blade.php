@extends('admin.wrapper')
    @section('container')
                   <h6 class="mb-0 text-uppercase">Liste des inscrits <span class="badge badge-primary">{{ $inscription->count() }}</span></h6>
					<hr>
					<div class="row">
                        @foreach ($inscription as $inscrit )
                            <div class="col-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    @if($inscrit->sexe=='H')<img src="/svg/homme.jpg" class='img-fluid'>@else <img src="/svg/femme.jpg" class='img-fluid'> @endif
                                    <div class="card-body">
                                        <h2 class="card-title">{{ $inscrit->firstname }}  {{ $inscrit->lastname }}</h2>
                                        <hr>
                                        <p class="card-text">
                                            <p><b>Email : {{ $inscrit->email }}</p>
                                            <hr>
                                            <p>Numero de Téléphone :{{ $inscrit->phone }}</p>
                                            <hr>
                                            <p>Pays: {{ $inscrit->country }} </b></p>
                                            <hr>
                                        </p>
                                        <a href="{{ route('admin.userProfil',$inscrit->id) }}" class="btn btn-primary justify-content-center">Voir le profil de {{ $inscrit->firstname }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>
                    {{ $inscription->links() }}

    @stop
