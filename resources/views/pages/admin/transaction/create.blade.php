@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h3>Tambah Buku</h3>
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
                <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-control" name="genre" id="genre" required>
                            <option value="romance">Romance</option>
                            <option value="fiction">Fiction</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="mystery">Mystery</option>
                            <option value="thriller">Thriller</option>
                            <option value="horror">Horror</option>
                            <option value="drama">Drama</option>
                            <option value="adventure">Adventure</option>
                            <option value="action">Action</option>
                            <option value="sci-fi">Sci-fi</option>
                            <option value="non-fiction">Non-fiction</option>
                            <option value="self-improvement">Self improvement</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="pengarang" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_terbit" class="form-label">Tempat Terbit</label>
                        <input type="text" class="form-control" id="tempat_terbit" name="tempat_terbit" placeholder="tempat_terbit" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="tahun_terbit" required>
                    </div>
                    <div class="form-group">
                        <label for="bahasa" class="form-label">Bahasa</label>
                        <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="bahasa" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" placeholder="jumlah_halaman" required>
                    </div>
                    <div class="form-group">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="stok" required>
                    </div>
                    <div class="form-group">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
