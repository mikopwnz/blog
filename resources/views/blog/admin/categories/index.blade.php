@extends('layouts.app')

@section('content')

    <div class="container">
        @include('blog.admin.posts.includes.result_messages')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggler navbar-light bg-dark">
                    <a class="btn btn-primary" href="{{route('blog.admin.categories.create')}}">Добавить</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Категория</th>
                                <th>Родитель</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{route('blog.admin.categories.edit', $item->id)}}">{{$item->title}}</a>
                                    </td>
                                    <td>{{ $item->parentTitle }}
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
