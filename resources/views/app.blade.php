<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     @if(\Auth::check())
        <script>
            window.user = {!! json_encode(\Auth::user()) !!}
        </script>
     @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="stylesheet" href="{{asset("assets/css/style.bundle.css")}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">--}}
{{--    <link href="{{asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />--}}
{{--    <!--end::Page Vendors Styles-->--}}
{{--    <!--begin::Global Theme Styles(used by all pages)-->--}}
{{--    <link href="{{asset("assets/plugins/global/plugins.bundle.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset("assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset("assets/css/style.bundle.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />--}}
{{--    <!--end::Global Theme Styles-->--}}
{{--    <!--begin::Layout Themes(used by all pages)-->--}}
    <link href="{{asset("assets/css/themes/layout/header/base/light.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/themes/layout/header/menu/light.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/themes/layout/brand/dark.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/themes/layout/aside/dark.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />

{{--    <!--end::Layout Themes-->--}}
    <link rel="shortcut icon" href="{{asset("assets/media/logos/favicon.ico")}}" />

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

    @routes
</head>

<body class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-fixed subheader-enabled subheader-solid aside-enabled aside-fixed">
@inertia
</body>
<script src="{{ mix('/js/app.js') }}" defer></script>
{{--<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>--}}
{{--<!--begin::Global Config(global config for global JS scripts)-->--}}
{{--<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>--}}
{{--<!--end::Global Config-->--}}
{{--<!--begin::Global Theme Bundle(used by all pages)-->--}}
{{--<script src="{{asset("assets/plugins/global/plugins.bundle.js?v=7.0.5")}}"></script>--}}
{{--<script src="{{asset("assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5")}}"></script>--}}
{{--<script src="{{asset("assets/js/scripts.bundle.js?v=7.0.5")}}"></script>--}}
{{--<!--end::Global Theme Bundle-->--}}
{{--<!--begin::Page Vendors(used by this page)-->--}}
{{--<script src="{{asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5")}}"></script>--}}
{{--<!--end::Page Vendors-->--}}
{{--<!--begin::Page Scripts(used by this page)-->--}}
{{--<script src="{{asset("assets/js/pages/widgets.js?v=7.0.5")}}"></script>--}}

</html>
