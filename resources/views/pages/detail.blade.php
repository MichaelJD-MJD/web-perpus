@extends('layouts.app')

@section('title')
    Detail
@endsection

@section('content')
    <!-- Content -->
    <div class="col-10 pt-3 mb-2">
        <div class="container detail-container">
          <div class="row">
            <!-- foto -->
            <div
              class="col-lg-4 col-md-12 col-sm-12 mt-2 d-flex align-center justify-content-center"
            >
              <div class="container foto-container p-3 mb-2 shadow">
                <div
                  class="row mb-2 justify-content-center align-items-center"
                >
                  <img src="{{ Storage::url($book->cover) }}" alt="" class="foto-banner" />
                </div>
                <div class="row mb-2">
                  <a
                    href=""
                    class="btn btn-foto {{ $book->stok > 0 ? '' : 'disabled' }}"
                    data-bs-toggle="modal"
                    data-bs-target="#konfirmasi"
                    >Pinjam</a
                  >
                </div>
                <div class="row mb-2">
                  <a href="{{ route('favorite-add', $book->id) }}" class="btn btn-foto">Tambah ke Favorit</a>
                </div>
                <div
                  class="modal fade"
                  id="konfirmasi"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5">Konfirmasi</h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin meminjam buku ini?</p>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Batal
                        </button>
                        <a href="{{ route('sukses', $book->id) }}" class="btn btn-primary">
                          Pinjam
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- deskripsi -->
            <div class="col-lg-8 col-md-12 col-sm-12 mt-2">
              <div class="container deskripsi-container">
                <div class="row">
                  <div class="col-3 box">
                    <div class="mt-1 p-1">
                      <i class="bi bi-check-circle"></i>
                      <span class="ms-2">{{ $book->stok > 0 ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                    </div>
                  </div>
                  <div class="col-3 box">
                    <div class="mt-1 p-1">
                      <i class="bi bi-book"></i>
                      <span class="ms-2">{{ $book->category->genre }}</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <h3>{{ $book->judul }}</h3>
                    <p class="sinopsis">
                      {{ $book->sinopsis }}
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <table class="table table-information">
                      <thead>
                        <tr>
                          <th colspan="2">Informasi Buku</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Pengarang</td>
                          <td>{{ $book->pengarang }}</td>
                        </tr>
                        <tr>
                          <td>Penerbit</td>
                          <td>{{ $book->penerbit }}</td>
                        </tr>
                        <tr>
                          <td>Tahun Terbit</td>
                          <td>{{ $book->tahun_terbit }}</td>
                        </tr>
                        <tr>
                          <td>Tempat Terbit</td>
                          <td>{{ $book->tempat_terbit }}</td>
                        </tr>
                        <tr>
                          <td>Bahasa</td>
                          <td>{{ $book->bahasa }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection