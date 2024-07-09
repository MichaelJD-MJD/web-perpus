@extends('layouts.app')

@section('title')
    Category
@endsection

@section('content')
    <!-- Content -->
    <div class="col-10 pt-3 mb-2">
        <div class="container category-container p-3">
            <!-- list-kategori -->
            <div class="row">
                <div class="col-12">
                    <h3>Category</h3>
                    <div class="btn-group d-flex flex-wrap kategori-list" role="group" aria-label="categories">
                        <button type="button" class="btn kategori-item">
                            <a href="{{ route('category-search', 'all') }}" class="{{ $selectedCategory == 'all' ? 'active' : '' }}">All Category</a>
                        </button>
                        @foreach ($categories as $category)
                            <button type="button" class="btn kategori-item">
                                <a href="{{ route('category-search', $category->id) }}" class="{{ $selectedCategory == $category->id ? 'active' : '' }}">{{ $category->genre }}</a>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- buku -->
            <div class="row mt-2">
                @foreach ($books as $book)
                <div class="col-lg-2 col-md-4 col-sm-6 mb-sm-3">
                    <div class="card book-card" data-id="{{ $book->id }}">
                        <img src="{{ Storage::url($book->cover) }}" alt="" class="card-img-top book-image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->judul }}</h5>
                            <p class="card-text">{{ $book->pengarang }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let cards = document.querySelectorAll(".book-card");
            cards.forEach(function(card) {
                card.onclick = function() {
                  let id = this.dataset.id;
                    window.location.href = "{{ url('detail') }}/" + id;
                }
            })
        });
    </script>
@endpush
