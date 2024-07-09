@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between">
                <h3>Transaction List</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Status</th>
                                <th scope="col">Denda</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $transaction)
                                <tr>
                                    <th scope="row">{{ $transaction->id }}</th>
                                    <td>{{ $transaction->user->name }}</td>
                                    <td>{{ $transaction->book->judul }}</td>
                                    <td>{{ $transaction->tanggal_pinjam }}</td>
                                    <td>{{ $transaction->return->tanggal_pengembalian ?? '-' }}</td>
                                    <td>{{ $transaction->status }}</td>
                                    <td>{{ $transaction->return->denda ?? '0' }}</td>
                                    <td>
                                        <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-info mb-2">
                                            <i class="fa fa-pen"></i>
                                            Update</a>
                                        <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST">
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
