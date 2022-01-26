@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Kontak</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.storekontak') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="defaultSelect">Alamat</label>
                            <textarea class="form-control" name="alamat" value="<?= old('pesan') ?>" name="pesan" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="defaultSelect">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="defaultSelect">Hp</label>
                            <input type="text" name="hp" class="form-control">
                        </div>
                       
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <a href="{{ route('adm.kontak') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
