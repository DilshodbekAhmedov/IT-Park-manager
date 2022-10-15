<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--<base href="./">--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>line CMS</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/admin/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/admin/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/admin/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/admin/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/admin/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Main styles for this application-->
    <link href="/admin/css/style.css" rel="stylesheet">
    {{--<link href="/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">--}}
    <link href="/admin/vendors/@coreui/icons/css/free.min.css" rel="stylesheet">
    <link href="/admin/vendors/font-awesome/css/all.css" rel="stylesheet">
    <link href="/admin/vendors/toastr/toastr.min.css" rel="stylesheet">
    <link href="/admin/vendors/datetimepicker/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <link href="/admin/css/custom.css" rel="stylesheet">
    <style>
        .c-icon {
            vertical-align: middle;
        }
    </style>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=b8172c9f-f037-4b34-9cc8-8d4222b12614&lang=en_US" type="text/javascript">
    </script>

</head>
<body class="c-app">
@include('sidebar.sidebar')
<div class="c-wrapper c-fixed-components">
    @include('header.header')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    @yield('content')
                </div>
            </div>
        </main>
        <footer class="c-footer">
            {{--<div class="ml-auto">Powered by&nbsp;<a href="https://webline.uz" target="_blank">Webline</a></div>--}}
        </footer>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<!--[if IE]><!-->
<script src="/admin/vendors/@coreui/icons/js/svgxuse.min.js"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->
{{--<script src="/admin/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>--}}
<script src="/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="/admin/vendors/jquery/jquery-3.5.0.min.js"></script>
<script src="/admin/vendors/toastr/toastr.min.js"></script>
<script src="/admin/vendors/datetimepicker/moment-with-locales.min.js"></script>
<script src="/admin/vendors/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
<script src="/admin/vendors/ckeditor/bundle.js"></script>
<script src="/admin/vendors/ckeditor/translations/{{ app()->getLocale() }}.js"></script>
<script src="/admin/vendors/jquery-input-mask/jquery.inputmask.min.js"></script>
{{--<script src="/admin/js/main.js"></script>--}}
<script>
    @if (count($errors) > 0)
    toastr.error("{!! implode('<br/>', $errors->all()) !!}");
    @endif
    @if (session()->has('message'))
    toastr.success("{{ session('message') }}");
    @endif
    $('*[data-action=delete]').click(function (e) {
        return confirm('@lang("all.are_you_sure")');
    });
    $('.phone').inputmask("+\\9\\98 99 999 99 99", {"clearIncomplete": true});
    $('.mask-inn').inputmask("999999999", {"clearIncomplete": true});
    $('.mask-mfo').inputmask("99999", {"clearIncomplete": true});
    $('.mask-rs').inputmask("9999 9999 9999 9999 9999", {"clearIncomplete": true});
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('js')
@stack('scripts')
</body>
</html>
