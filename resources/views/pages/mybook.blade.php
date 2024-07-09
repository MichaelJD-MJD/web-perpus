@extends('layouts.app')

@section('title')
    My Book
@endsection

@section('content')
    <!-- Content -->
    <div class="col-10 pt-3 mb-3">
        <div class="container mybook-container p-3">
            <div class="row">
                <h3>Pinjamanku</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-pinjam text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Title</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr class="pinjam-row">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="td-image">
                                        <img src="{{ Storage::url($item->book->cover) }}" class="pinjam-image"
                                            alt="">
                                    </td>
                                    <td>{{ $item->book->judul }}</td>
                                    <td>{{ $item->book->pengarang }}</td>
                                    <td>{{ $item->book->penerbit }}</td>
                                    <td>
                                        <p>{{ $item->status }}</p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row">
                <h3>Histori</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-pinjam text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Denda</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items2 as $item)
                                <tr class="pinjam-row">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->book->judul }}</td>
                                    <td>{{ $item->tanggal_pinjam }}</td>
                                    <td>{{ $item->return->tanggal_pengembalian }}</td>
                                    <td>{{ $item->return->denda }}</td>
                                    <td>
                                        <p>{{ $item->status }}</p>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                              <td colspan="6" class="text-center">
                                  Data Kosong
                              </td>
                          </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
