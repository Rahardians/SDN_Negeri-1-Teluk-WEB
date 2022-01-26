@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Pendaftaran Management</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            <br>
            <br>
            <table class="table-hover dataTable" style="width: 100%" cellpadding="4" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th style="width: 30%">Alamat</th>
                        <th>Nama Ibu</th>
                        <th>Nama Ayah</th>
                        <th>File KK</th>
                        <th>File Akta</th>
                        <th>Tgl Daftar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->nama_ibu }}</td>
                        <td>{{ $row->nama_ayah }}</td>
                        <td><a href="{{ url('img/photo/' . $row->file_kk) }}" target="_blank">KK</a>
                            </td>
                        <td><a href="{{ url('img/photo/' . $row->file_akta_kelahiran) }}" target="_blank">Akta Lahir</a>
                            </td>
                        <td>{{ date('d-m-Y H:i', strtotime($row->created_at)); }}</td>
                        <td>
                            <a href="{{ route('adm.terimapendaftaran',$row->id) }}" class=" btn btn-success btn-sm">Terima</a>
                            <a href="{{ route('adm.tolakpendaftaran',$row->id) }}" class=" btn btn-danger btn-sm">Tolak</a>
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
