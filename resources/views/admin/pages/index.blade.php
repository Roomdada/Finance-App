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
            <div class="card radius-15 bg-info">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-time'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">2m 28s</h4>
                    <p class="mb-0 text-white">Avg. Time on Site</p>
                </div>
            </div>
            <div class="card radius-15 bg-wall">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">4.68</h4>
                    <p class="mb-0 text-white">Pages/Session</p>
                </div>
            </div>
            <div class="card radius-15 bg-rose">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bulb'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
                    <p class="mb-0 text-white">New Sessions</p>
                </div>
            </div>
        </div>
        <div class="card-deck flex-column flex-lg-row">
            <div class="card radius-15 bg-danger">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-line-chart'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">23.4%</h4>
                    <p class="mb-0 text-white">Bounce Rate</p>
                </div>
            </div>
            <div class="card radius-15 bg-primary">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-group'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">4,286</h4>
                    <p class="mb-0 text-white">New Users</p>
                </div>
            </div>
            <div class="card radius-15 bg-success">
                <div class="card-body text-center">
                    <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
                    <p class="mb-0 text-white">Downloads</p>
                </div>
            </div>
        </div>
    </div>

</div>


</div>


@endsection
