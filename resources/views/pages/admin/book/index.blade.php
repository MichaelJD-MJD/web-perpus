@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h3>Book List</h3>
                <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Bahasa</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td>
                                        <img src="{{ Storage::url($book->cover) }}" alt="" width="150px"
                                            class="img-thumbnail img-cover">
                                    </td>
                                    <td>{{ $book->judul }}</td>
                                    <td>{{ $book->category->genre }}</td>
                                    <td>{{ $book->pengarang }}</td>
                                    <td>{{ $book->penerbit }}</td>
                                    <td>{{ $book->tahun_terbit }}</td>
                                    <td>{{ $book->bahasa }}</td>
                                    <td>{{ $book->stok }}</td>
                                    <td>
                                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-info mb-2">
                                            <i class="fa fa-pen"></i>
                                            Update</a>
                                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">
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
