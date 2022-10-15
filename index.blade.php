@extends('layouts.default')
@section('content')
    <!-- /.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">@lang('all.settings')</h5>
                </div>
                <div class="card-body" id="app">
                    <settings-editor
                        csrf="{{ csrf_token() }}"
                        data_url="{{ route('admin.settings.data') }}"
                        store_url="{{ route('admin.settings.store') }}">
                    </settings-editor>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row-->
@endsection
@section('js')
    <link href="/admin/css/app.css" rel="stylesheet">
    <script src="/admin/js/app.js"></script>
@endsection
