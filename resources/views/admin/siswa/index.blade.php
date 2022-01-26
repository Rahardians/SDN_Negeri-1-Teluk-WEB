@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Siswa Management</h3>
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
                        <th style="width: 30%">Alamat</th>
                        <th>Nama Ibu</th>
                        <th>Nama Ayah</th>
                        <th>Kelas</th>
                        <th>File KK</th>
                        <th>File Akta</th>
                        <th>File Foto</th>
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
                        <td>{{ $row->kelas }}</td>
                        <td><a href="{{ url('img/photo/' . $row->file_kk) }}" target="_blank">KK</a>
                        </td>
                        <td><a href="{{ url('img/photo/' . $row->file_akta_kelahiran) }}" target="_blank">Akta Lahir</a>
                        </td>
                        <td>
                            @if(!empty($row->file_pas_foto))
                            <a href="{{ url('img/photo/' . $row->file_pas_foto) }}" target="_blank">Pas Foto</a>
                            @else 
                            Kosong
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('adm.edituser',$row->id) }}" class=" btn btn-info btn-sm">Update</a>
                            <a href="" class=" btn btn-danger btn-sm">Delete</a>
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
