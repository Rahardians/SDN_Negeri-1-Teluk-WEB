@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Guru dan Karyawan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.storegurudankaryawan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="defaultSelect">Content</label>
                            <textarea class="form-control" name="content" value="<?= old('pesan') ?>" name="pesan" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label style="mb-3" for="exampleFormControlFile1">Input Gambar</label>
                            <input type="file" name="image[]" multiple="multiple" class="form-control-file mt-2" id="exampleFormControlFile1">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <a href="{{ route('adm.gurudankaryawan') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
