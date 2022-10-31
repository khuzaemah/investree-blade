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
                            @if ($article->image)
                            <div class="text-center">
                                <img src="/images/{{ $article->image }}" width="230px">
                            </div>
                            @else                
                                <img src="https://via.placeholder.com/200/0000FF/808080?Text=Article" class="car d-img-top" alt="Article" >
                            @endif 
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
