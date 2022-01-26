@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Pengaturan Pendaftaran</h3>
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
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.storekontak') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-inline">
                            <label for="inlineinput" class="col-md-2 col-form-label">Status Pendaftaran</label>
                            <div class="">
                                @if($data->active == 1)
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">Nonactive</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            @if($data->active == 1)
                            <a href="{{ route('adm.updatepengaturanpendaftaran',$data->id) }}" class="col-md-3 col-form-label btn btn-danger">Nonaktifkan</a>
                            @else 
                            <a href="{{ route('adm.updatepengaturanpendaftaran',$data->id) }}" class="col-md-3 col-form-label btn btn-success">Aktifkan</a>
                            @endif
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
