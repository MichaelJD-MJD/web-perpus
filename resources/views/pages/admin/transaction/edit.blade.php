@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h3>Update Status Transaksi</h3>
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
                <form action="{{ route('transaction.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="{{ $transaction->status }}">Tidak Diubah</option>
                            <option value="Sedang Dipinjam">Sedang Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                            <option value="Tidak Dikembalikan">Tidak Dikembalikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
