@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>User Management</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('adm.adduser') }}" class="btn btn-primary">Tambah</a>
            <br>
            <br>
            <table class="table-hover dataTable" style="width: 100%" cellpadding="4" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role Id</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->role_id }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <a href="{{ route('adm.edituser',$row->id) }}" class=" btn btn-info btn-sm">Update</a>
                            @if($data->count()>=2))<a href="{{ route('adm.deleteuser',$row->id) }}" class=" btn btn-danger btn-sm">Delete</a>@endif
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
