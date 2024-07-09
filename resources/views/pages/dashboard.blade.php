@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Content -->
    <div class="col-10 pt-3 mb-3">
        <div class="container book-container p-3">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <h3 class="content-popular">POPULAR</h3>
                    <a href="{{ route('category') }}" class="d-inline btn-view-all text-decoration-none">View All
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-sm-3">
                        <div class="card book-card" data-id="{{ $item->id }}">
                            <img src="{{ Storage::url($item->cover) }}" alt="" class="card-img-top book-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->pengarang }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container book-container p-3">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <h3 class="content-popular">YOU MAY LIKE</h3>
                    <a href="{{ route('category') }}" class="d-inline btn-view-all text-decoration-none">View All
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($items2 as $item2)
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-sm-3">
                        <div class="card book-card" data-id="{{ $item2->id }}">
                            <img src="{{ Storage::url($item2->cover) }}" alt="" class="card-img-top book-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item2->judul }}</h5>
                                <p class="card-text">{{ $item2->pengarang }}</p>
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