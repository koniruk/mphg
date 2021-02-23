@extends('admin.layouts.app')

@section('title','作品一覧')
@section('content')
    @if (session('flash_message'))
        <div class="alert alert-success flash_message" role="alert">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">作品一覧</div>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-3">
                    <input class="form-control" id="text-input" type="text" name="text-input" placeholder="">
                </div>
                <a class="btn btn-outline-custom" href="#">作品検索</a>
            </div>
            <label>14件中/14件を表示</label>
            <table class="table table-responsive-sm table-hover table-outline">
                <thead>
                <tr>
                    <th><a href="#">ID</a></th>
                    <th><a href="#">作品名</a></th>
                    <th><a href="#">ワールド</a></th>
                    <th><a href="#">ロケーション</a></th>
                    <th><a href="#">サイズ</a></th>
                    <th><a href="#">作成日</a></th>
                    <th><a href="#">ステータス</a></th>
                </tr>
                </thead>
                <tbody>
                @foreach( $works as $work )
                    <tr>
                        <td>{{ $work->id }}</td>
                        <td><a href="{{ route('admin.work.edit', $work->id) }}">{{ $work->name }}</a></td>
                        <td>{{ $work->world->name }}</td>
                        <td>{{ $work->location->name }}</td>
                        <td>{{ $work->size->name }}</td>
                        <td>{{ $work->created_at }}</td>
                        <td>{{ $work->public_status->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
@endsection
