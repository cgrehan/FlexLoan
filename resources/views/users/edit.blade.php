@extends("layouts.app_main")
<link href="{{asset("assets/css/pages/wizard/wizard-1.css?v=7.0.5")}}" rel="stylesheet" type="text/css" />
@section("content")
<loan-user :user_detail="{{json_encode($user)}}"></loan-user>
@endsection

@section("scripts")
    <script src="{{asset("assets/js/pages/custom/wizard/wizard-1.js?v=7.0.5")}}"></script>
{{--    <script>--}}
{{--        $(function (){--}}
{{--            if($('.is_employed').is(':checked')){--}}
{{--                $('.employed').show();--}}
{{--            }else {--}}
{{--                $('.employed').hide();--}}
{{--            }--}}
{{--        })--}}
{{--      $(".is_employed").on('click',function(){--}}
{{--          if($(this).is(':checked')){--}}
{{--              $('.employed').show();--}}
{{--          }else{--}}
{{--              $('.employed').hide();--}}
{{--          }--}}
{{--      })--}}
{{--    </script>--}}
@endsection
