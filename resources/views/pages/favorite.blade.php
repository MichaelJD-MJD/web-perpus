@extends('layouts.app')

@section('title')
    Favorite
@endsection

@section('content')
    <!-- Content -->
    <div class="col-10 pt-3 mb-3">
        <div class="container favorite-container p-3">
            <div class="row">
                <h3>My Favorite</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-favorite">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Title</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr class="favorite-row">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="td-image">
                                        <img src="{{ Storage::url($item->book->cover) }}" class="favorite-image" alt="">
                                    </td>
                                    <td>{{ $item->book->judul }}</td>
                                    <td>{{ $item->book->pengarang }}</td>
                                    <td>{{ $item->book->penerbit }}</td>
                                    <td>
                                      <form action="{{ route('favorite_destroy',$item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                      </form>
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
