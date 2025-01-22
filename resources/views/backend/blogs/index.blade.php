@extends('backend.layouts.app')
@section('title')
    Blogs
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary add-btn">
                        Add Blog
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
        const blogs = @json($blogs);
        const editRouteTemplate = "{{ route('blogs.edit', ':id') }}";
        const destroyRouteTemplate = "{{ route('blogs.destroy', ':id') }}";
        if (document.getElementById("table-gridjs"))
            new gridjs.Grid({
                columns: [{
                    name: 'ID',
                    formatter: (function (cell) {
                        return gridjs.html('<span class="fw-semibold">' + cell + '</span>');
                    })
                },
                    "Title",
                    "Content", "Author",
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
                data: blogs.map(blog => [
                    blog.id,
                    blog.title,
                    blog.content,
                    blog.author
                ])
            }).render(document.getElementById("table-gridjs"));
    </script>
@endsection