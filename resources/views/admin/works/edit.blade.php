@extends('admin.layouts.app')

@section('title','作品登録')
@section('content')
    <div class="card">
        {{Form::open(['url' => route('admin.work.register'), 'file' => true, 'class' => 'form-horizontal'])}}
        {{Form::token()}}
        <div class="card-header">作品登録</div>
        <div class="card-body">
            @if (!is_null($work))
            <div class="form-group row">
                <label class="col-md-3 col-form-label">ID</label>
                <div class="col-md-9">
                    <p class="form-control-static">{{ $work->id }}</p>
                </div>
            </div>
            @endif
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select_world">作品名
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9">
                    {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => '(例)高級モダンハウス'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select_world">ワールド
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9">
                    {{Form::select('world', $worlds, is_null($work) ? '' : $work->world, ['class' => 'form-control','id' => 'select_world'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="select_location">ロケーション
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9">
                    {{Form::select('location', $locations, is_null($work) ? '' : $work->location, ['class' => 'form-control','id' => 'select_location'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">サイズ
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9 col-form-label">
                    @foreach( $sizes as $key => $value )
                    <div class="form-check form-check-inline mr-1">
                        {{Form::radio('size', $key, true, ['class'=>'form-check-input'])}}
                        <label class="form-check-label" for="radio_size_".{{ $key }}>{{ $value }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">アクセス
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9">
                    {{Form::text('access', null, ['class' => 'form-control', 'placeholder' => '(例)拡張街12区31番地'])}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="file-input">画像
                    <span class="badge badge-custom">必須</span></label>
                <div id="image-box1" class="col-md-9">
                    <div id="image-box__container" class="item-num-0">
                        <div class="input-area">
                            {{Form::file('item[images_attributes][][image_url]', ['id'=>'img-file'])}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">公開ステータス
                    <span class="badge badge-custom">必須</span></label>
                <div class="col-md-9 col-form-label">
                    @foreach( $public_status as $key => $value )
                        <div class="form-check form-check-inline mr-1">
                            {{Form::radio('public_status', $key, true, ['class'=>'form-check-input','id'=>'radio_public_status_'.$key])}}
                            <label class="form-check-label" for="radio_size">{{ $value }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-outline-custom" type="submit">送信</button>
        </div>
        {{Form::close()}}
    </div>
@endsection
