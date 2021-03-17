@extends('admin.wrapper')
@section('container')

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Demande de {{ $type }}</h4>
        </div>
        <hr/>
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Montant</th>
                        <th>Pack</th>
                        <th>Moyen de paiement</th>
                        <th>Email</th>
                        <th>Montant à récevoir</th>
                        <th>Jours de demande</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informationTransaction as $transaction )
                            <tr>
                                <td>{{ $transaction->user->firstname }}</td>
                                <td>{{ $transaction->user->lastname }}</td>
                                <td>{{$transaction->pack->money*550}} XOF</td>
                                <td>{{ $transaction->pack->name }}</td>
                                <td>{{ $transaction->payement }}</td>
                                <td>{{ $transaction->user->email }}</td>
                                <td>{{ $transaction->pack->money_r*550 }} XOF</td>
                                <td>{{ $transaction->created_at->diffForHumans() }}</td>
                                <td>
                                     <a class="btn btn-outline-primary" href="{{ route('admin.Confirm',$transaction->id)}}"> Confirmer</a>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>





@stop
