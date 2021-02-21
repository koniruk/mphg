@extends('admin.layouts.app')

@section('title','作品一覧')
@section('content')
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i> 作品一覧</div>
        <div class="card-body">
            <table class="table table-responsive-sm">
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
                <tr>
                    <td>1</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">高級モダンハウス</a></td>
                    <td>Ifrit</td>
                    <td>シロガネ</td>
                    <td>Mサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-success">公開</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">理想の家</a></td>
                    <td>Ultima</td>
                    <td>ミスト・ヴィレッジ</td>
                    <td>Sサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-secondary">非公開</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">和モダン</a></td>
                    <td>Zeromus</td>
                    <td>ミスト・ヴィレッジ</td>
                    <td>Sサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-success">公開</span></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">高級モダンハウス</a></td>
                    <td>Ifrit</td>
                    <td>シロガネ</td>
                    <td>Mサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-success">公開</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">理想の家</a></td>
                    <td>Ultima</td>
                    <td>ミスト・ヴィレッジ</td>
                    <td>Sサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-secondary">非公開</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="{{ route('admin.work.edit.get',1) }}">和モダン</a></td>
                    <td>Zeromus</td>
                    <td>ミスト・ヴィレッジ</td>
                    <td>Sサイズ</td>
                    <td>2021/01/12</td>
                    <td><span class="badge badge-success">公開</span></td>
                </tr>
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
