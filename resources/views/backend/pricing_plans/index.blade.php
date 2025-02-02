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
        const editRouteTemplate = "{{ route('pricing-plans.edit', ':id') }}";
        const destroyRouteTemplate = "{{ route('pricing-plans.destroy', ':id') }}";
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
                        formatter: (_, row) => {
                            const editUrl = editRouteTemplate.replace(':id', row.cells[0].data);
                            const destroyUrl = destroyRouteTemplate.replace(':id', row.cells[0].data);
                            return gridjs.html(
                                `<div class='d-flex'>
                            <a href='${editUrl}' class='btn btn-green me-3'>Edit</a>
                            <a href='${destroyUrl}' class='btn btn-danger me-3'>Delete</a>
                        </div>`
                            );
                        }
                    },
                ],
                pagination: {
                    limit: 15
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