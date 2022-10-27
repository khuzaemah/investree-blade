@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="container">
                <div class="row">
                    @foreach ($articles as $article)              
                    <div class="col-md-4 mb-3">
                        <div class="card">
                                <img src="/images/{{ $article->image }}" >
                                {{-- <img src="{{asset('storage/' . $article->image)}}" class="img-fluid text-center" alt="{{ $article->category->name }}" > --}}
                            <div class="card-body">
                                <h6 class="card-title">{{ $article->title }}</h6>
                                <small class="text-muted">
                                    <p>at {{$article->created_at->diffForHumans()}}
                                    </p>
                                </small>
                                <p class="card-text">{{ $article->content }}</p>
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>          
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
