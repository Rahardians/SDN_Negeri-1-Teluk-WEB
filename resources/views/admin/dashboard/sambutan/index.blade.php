@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Sambutan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('adm.addsambutan') }}" class="btn btn-primary">Tambah</a>
            <br>
            <br>
            <table class="table-hover dataTable" style="width: 100%" cellpadding="4" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->content }}</td>

                        @if (!empty($row->img))
                        <td>
                            @foreach (json_decode($row->img) as $image)
                            <a href="{{ url('img/photo/' . $image) }}"><img
                                    src="{{ url('img/photo/' . $image) }}" width="150px"
                                    alt="{{ $image }}"></a>
                            @endforeach
                        </td>
                        @else
                        <td>Tidak ada Gambar</td>
                        @endif

                        <td>
                            @if($row->active == 1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Nonactive</span>
                            @endif
                        </td>

                        <td>  <a href="" class="btn btn-primary btn-sm" >Detail</a>
                            <a href="{{ route('adm.editsambutan',$row->id) }}" class=" btn btn-info btn-sm">Update</a>
                            <a href="{{ route('adm.deletesambutan',$row->id) }}" class=" btn btn-danger btn-sm">Delete</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#basic-datatables').DataTable({});

            });
        </script>
    @endpush
@endsection
