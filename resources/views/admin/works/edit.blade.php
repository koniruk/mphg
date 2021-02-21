@extends('admin.layouts.app')

@section('title','作品登録')

@section('content')
    <div class="card">
        <div class="card-header">作品登録</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('admin.work.new.post') }}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">ID</label>
                    <div class="col-md-9">
                        <p class="form-control-static">12</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input">作品名
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="text-input" placeholder="(例)高級モダンハウス">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="select1">ワールド
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <select class="form-control" id="select1" name="select1">
                            <option value="0">選択してください</option>
                            <option value="1">Zeromus</option>
                            <option value="2">Ifrit</option>
                            <option value="3">Ultima</option>
                            <option value="4">Bahamut</option>
                            <option value="5">Valfore</option>
                            <option value="6">Fenrir</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="select1">ロケーション
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <select class="form-control" id="select1" name="select1">
                            <option value="0">選択してください</option>
                            <option value="1">ゴブレットビュート</option>
                            <option value="2">ラベンダーベッド</option>
                            <option value="3">ミスト・ヴィレッジ</option>
                            <option value="4">シロガネ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">サイズ
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9 col-form-label">
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio1">Sサイズ</label>
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio2" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio2">Mサイズ</label>
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio3" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio3">Lサイズ</label>
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio4" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio4">アパルトメント</label>
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio5" type="radio" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio5">個室</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input">アクセス
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="text-input" placeholder="(例)拡張街12区31番地">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="date-input">作成日
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="date-input">公開終了日</label>
                    <div class="col-md-9">
                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="file-input">画像1
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9">
                        <input id="file-input" type="file" name="file-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">公開ステータス
                        <span class="badge badge-success">必須</span></label>
                    <div class="col-md-9 col-form-label">
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio6" type="radio" value="option2" name="inline-radios2">
                            <label class="form-check-label" for="inline-radio6">公開</label>
                        </div>
                        <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-radio7" type="radio" value="option2" name="inline-radios2">
                            <label class="form-check-label" for="inline-radio7">非公開</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit"> 送信</button>
        </div>
    </div>
@endsection
