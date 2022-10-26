@extends('articles.layout')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Laravel 9 CRUD Article</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> 
                    Add Article
                </a>
            </div>
        </div>
    </div>

    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-top: 20px;">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $article->image }}" width="100px"></td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('articles.show', $article->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $articles->links() !!}

@endsection
