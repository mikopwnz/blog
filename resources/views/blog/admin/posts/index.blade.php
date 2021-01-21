@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggler navbar-light bg-dark">
                    <a class="btn btn-primary" href="{{route('blog.admin.posts.create')}}">Написать</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Автор</th>
                                <th>Категория</th>
                                <th>Заголовок</th>
                                <th>Дата публикации</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $post)
                                <tr @if (!$post->is_published) style="cursor: pointer; background-color: #a0a0a0" @endif
                                style="cursor: pointer"
                                    onclick="document.location='{{route('blog.admin.posts.edit', $post->id)}}'">
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        @if($post->published_at)
                                            {{\Carbon\Carbon::parse($post->published_at)->format('d.M H:i:s')}}
                                        @else
                                            Not Published
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($paginator->total() > $paginator->count())
        <div class="container">
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @php /** @var Illuminate\Pagination\Paginator $paginator */ @endphp
                            {{ $paginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
