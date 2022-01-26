@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Kontak</h3>
        </div>
        <div class="card-body">
        <a href="{{ route('adm.addkontak') }}" class="btn btn-primary">Tambah</a>
            <br>
            <br>
            <table class="table-hover dataTable" style="width: 100%" cellpadding="4" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Hp</th>
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
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->hp }}</td>
                        <td>
                            @if($row->active == 1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Nonactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ route('adm.editkontak',$row->id) }}" class=" btn btn-info btn-sm">Update</a>
                            <a href="{{ route('adm.deletekontak',$row->id) }}" class=" btn btn-danger btn-sm">Delete</a>
                        </td>
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
