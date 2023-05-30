@extends('partial/main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                @if ($data->isNotEmpty())
                    @if ($data->first()->categoryId == 1)
                        Quick Reads
                    @elseif ($data->first()->categoryId == 2)
                        Medium Reads
                    @elseif ($data->first()->categoryId == 3)
                        Long Reads
                    @else
                        Long Reads
                    @endif
                @endif
            </div>
        </div>

        <div class="row" style="border: 2px solid #000;">
            <div class="row">
                @foreach($data as $book)
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $book->postCover }}" class="card-img-top" alt="Post Cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <a href="#" class="btn btn-primary">Read More</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
