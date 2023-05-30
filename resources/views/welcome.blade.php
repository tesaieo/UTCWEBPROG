@extends('partial/main')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2>Highlight</h2>
        </div>
    </div>

    <div class="row" style="border: 2px solid #000;">
        <div class="col-sm-6">
            @if ($highlight->isNotEmpty())
                <img src="{{ $highlight[0]->postCover }}" alt="Highlight Post Cover" style="width: 400px; height: 400px; border: 2px solid #000;">
            @endif
        </div>
        <div class="col-sm-6">
            <h3 style="border-bottom: 2px solid #000;">IT REALLY COUNT</h3>
            @if ($highlight->isNotEmpty())
                <p>Jumlah Views: {{ $highlight[0]->views }}</p>
                <h4>{{ $highlight[0]->title }}</h4>
                <p>{{ $highlight[0]->description }}</p>
                <a href="{{ route('detail', $highlight[0]->postId) }}" class="btn btn-primary">Read More</a>
            @endif
        </div>
    </div>
    <br>
    <br>
    <!-- Latest Review -->
    <div class="container" style="border: 2px solid #000;">
        <div class="row">
            <div class="col-sm">
                <h2>Latest Book Review</h2>
            </div>
        </div>

        <div class="row">
            @foreach($latest as $review)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $review->postCover }}" class="card-img-top" alt="Post Cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->title }}</h5>
                        <p class="card-text">{{ $review->description }}</p>
                        <a href="{{ route('detail', $review->postId) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <!-- Book Series Review -->
    <div class="container" style="border: 2px solid #000;">
        <div class="row">
            <div class="col-sm">
                <h2>Book Series Review</h2>
            </div>
        </div>

        <div class="row">
            @foreach($bookSeries as $book)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $book->postCover }}" class="card-img-top" alt="Post Cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <a href="{{ route('detail', $book->postId) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-sm">
                {{ $bookSeries->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
