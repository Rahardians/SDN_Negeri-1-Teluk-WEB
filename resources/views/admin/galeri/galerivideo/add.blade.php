@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Galeri Video</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.postgalerivideo') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="defaultSelect">Content</label>
                            <textarea class="form-control" name="content" name="pesan" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <a href="{{ route('adm.ruanglab') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
