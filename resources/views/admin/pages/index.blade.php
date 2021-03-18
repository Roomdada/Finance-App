@extends('admin.wrapper')
@section('container')
<div class="row">
    <div class="col-12 col-lg-4">
        <div class="card radius-15 overflow-hidden">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class="mb-0 font-weight-bold">Les inscrits</p>
                        <h2 class="mb-0">{{ $inscrit->count() }}</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                        <p class="mb-0 font-14 text-primary">
                        </p>
                    </div>
                </div>
            </div>
            <div id="chart1"></div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card radius-15 overflow-hidden">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class="mb-0 font-weight-bold">Demande d'inscription</p>
                        <h2 class="mb-0">{{ $demande->count() }}</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                        <p class="mb-0 font-14 text-success">
                        </p>
                    </div>
                </div>
            </div>
            <div id="chart2"></div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card radius-15 overflow-hidden">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class="mb-0 font-weight-bold">Demande de retrait</p>
                        <h2 class="mb-0">{{ $retrait->count()}}</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                        <p class="mb-0 font-14 text-danger">
                        </p>
                    </div>
                </div>
            </div>
            <div id="chart3"></div>
        </div>
    </div>
</div>
<!--end row-->
<div class="row">
    <div class="col-12 col-lg-12 col-xl-12">
        <div class="card-deck flex-column flex-lg-row">
            <div class="card radius-15 bg-white">
                <div class="card-body text-center">
                    <div class="table-responsive">
                         <h5>Activités Récentes</h5>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Monyen de paiment</th>
                                    <th>Date de demande</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse ($transaction as $transact )
                                      <tr>
                                        <td>
                                            @if($transact->type==1)  dépot @else retrait @endif
                                        </td>
                                        <td>
                                            {{ $transact->payement }}
                                        </td>
                                        <td>
                                             {{ $transact->created_at }}
                                        </td>
                                        <td>
                                            @if($transact->ok==0)
                                              <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            @else
                                                <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            @endif
                                        </td>
                                      </tr>
                                    @empty
                                      <div class="alert alert-info">Aucune activités</div>
                                    @endforelse
                                  {{ $transaction->links() }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


</div>


@endsection
