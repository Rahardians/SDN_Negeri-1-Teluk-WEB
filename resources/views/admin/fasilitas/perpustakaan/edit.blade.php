@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Fasilitas Perpustakaan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.updateperpustakaan',$perpustakaan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                            <input type="hidden" name="id" value="{{ $perpustakaan->id }}">
                            <input type="text" name="title" class="form-control" value="{{ $perpustakaan->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="defaultSelect">Content</label>
                            <textarea class="form-control" name="content" value="<?= old('pesan') ?>" name="pesan" id="exampleFormControlTextarea1" rows="5">{{ $perpustakaan->content }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label style="mb-3" for="exampleFormControlFile1">Input Gambar</label>
                            <input type="hidden" name="gambar" value="{{ $perpustakaan->img }}">
                            <input type="file" name="image[]" multiple="multiple" class="form-control-file mt-2" id="exampleFormControlFile1">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Ubah Data</button>
                            <a href="{{ route('adm.perpustakaan') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
