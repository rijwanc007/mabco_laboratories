{{--Js Link Start--}}
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/SmoothScroll.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
<script src="{{asset('assets/backend/js/toastr.min.js')}}"></script>
{{--Js Link End--}}
<script>
    toastr.options = {"debug": false, "positionClass": "toast-top-right", "onclick": null, "fadeIn": 300, "fadeOut": 1000, "timeOut": 5000, "extendedTimeOut": 1000};
    @if(Session::has('success'))toastr.success("{{Session::get('success')}}");@endif
    @if(Session::has('error'))toastr.error("{{Session::get('error')}}");@endif
</script>
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $('[data-toggle="tooltip"]').tooltip();--}}
{{--        $('[data-title="tooltip"]').tooltip();--}}
{{--    });--}}
{{--</script>--}}
