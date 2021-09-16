<script src="{{asset('assets/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/backend/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/backend/js/misc.js')}}"></script>
<script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
<script src="{{asset('assets/backend/js/todolist.js')}}"></script>
<script src="{{asset('assets/backend/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/backend/js/custom.js')}}"></script>
<script src="{{asset('assets/backend/js/chart.js')}}"></script>
<script src="{{asset('assets/backend/js/file-upload.js')}}"></script>
<script src="{{asset('assets/backend/js/bootstrap-select.min.js')}}"></script>
<script>
    toastr.options = {"debug": false, "positionClass": "toast-top-right", "onclick": null, "fadeIn": 300, "fadeOut": 1000, "timeOut": 5000, "extendedTimeOut": 1000};
    @if(Session::has('success'))toastr.success("{{Session::get('success')}}");@endif
    @if(Session::has('error'))toastr.error("{{Session::get('error')}}");@endif
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-title="tooltip"]').tooltip();
    });
</script>
