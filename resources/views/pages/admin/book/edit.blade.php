@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h3>Update Buku</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul"
                            required value="{{ $book->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-control" name="genre" id="genre" required>
                            <option value="{{ $book->category->id }}">Tidak Diubah</option>
                            @foreach ($genre as $item)
                                <option value="{{ $item->id }}">{{ $item->genre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="pengarang"
                            required value="{{ $book->pengarang }}">
                    </div>
                    <div class="form-group">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="penerbit"
                            required value="{{ $book->penerbit }}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_terbit" class="form-label">Tempat Terbit</label>
                        <input type="text" class="form-control" id="tempat_terbit" name="tempat_terbit"
                            placeholder="tempat_terbit" required value="{{ $book->tempat_terbit }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit"
                            placeholder="tahun_terbit" required value="{{ $book->tahun_terbit }}">
                    </div>
                    <div class="form-group">
                        <label for="bahasa" class="form-label">Bahasa</label>
                        <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="bahasa"
                            required value="{{ $book->bahasa }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman"
                            placeholder="jumlah_halaman" required value="{{ $book->jumlah_halaman }}">
                    </div>
                    <div class="form-group">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control" required>{{ $book->sinopsis }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="stok" required
                            value="{{ $book->stok }}">
                    </div>
                    <div class="form-group">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="check" name="check">
                        <label for="check" class="form-check-label">Centang jika tidak mengganti cover</label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
