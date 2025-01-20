@extends('backend.layouts.app')
@section('title')
    Pricing Plans
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <a href="{{ route('pricing-plans.create') }}" class="btn btn-primary add-btn">
                        Add Plan
                        </a>
                        <div class="py-3">
                            <div id="table-gridjs"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card body -->
    </div> <!-- end row -->
@endsection
@section('js')
    <script>
        const pricingPlans = @json($pricingPlans);
        if (document.getElementById("table-gridjs"))
            new gridjs.Grid({
                columns: [{
                    name: 'ID',
                    formatter: (function (cell) {
                        return gridjs.html('<span class="fw-semibold">' + cell + '</span>');
                    })
                },
                    "Name",
                    "Price", "Duration", "Description",
                    {
                        name: 'Actions',
                        width: '120px',
                        formatter: (function (cell) {
                            return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>" + "Details" + "</a>");
                        })
                    },
                ],
                pagination: {
                    limit: 5
                },
                sort: true,
                search: true,
                data: pricingPlans.map(plan => [
                    plan.id,
                    plan.name,
                    plan.price,
                    plan.duration,
                    plan.description
                ])
            }).render(document.getElementById("table-gridjs"));
    </script>
@endsection