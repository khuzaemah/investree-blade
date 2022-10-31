@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Show Article</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;text-align: center;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong><br>
                {{ $article->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Content:</strong><br>
                {{ $article->content }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Image:</strong><br>
                @if ($article->image)                   
                        <img src="/images/{{ $article->image }}" width="200px">
                    @else                
                        <img src="https://via.placeholder.com/200/0000FF/808080?Text=Article" class="car d-img-top" alt="Article" >
                    @endif
            </div>
        </div>
    </div>
@endsection
