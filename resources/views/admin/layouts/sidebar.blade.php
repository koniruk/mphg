<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('admin/assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('admin/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('admin/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> ダッシュボード</a></li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> 作品管理</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> 作品一覧</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> 作品登録</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> カテゴリ管理</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> タグ管理</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> 新着情報管理</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> 新着情報一覧</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> 新着情報登録</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> お問い合わせ管理</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> お問い合わせ一覧</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> お問い合わせ登録</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> テンプレート管理</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> メール管理</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> テンプレート管理</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> 設定</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> ワールド管理</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> ロケーション管理</a></li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span> ハウスサイズ管理</a></li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
