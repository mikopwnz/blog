@extends('layouts.app')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="content">
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Created at</td>
                    </tr>
                    </tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
