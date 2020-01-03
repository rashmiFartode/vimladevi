    <script src="{{ asset('authAssets/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('authAssets/js/custom.min.js') }} "></script>
    <script src="{{ asset('authAssets/js/settings.js') }} "></script>
    <script src="{{ asset('authAssets/js/gleek.js') }} "></script>
    <script src="{{ asset('authAssets/js/styleSwitcher.js') }} "></script>
    <script src="{{ asset('authAssets/js/toastr.min.js') }} "></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        @if(session('status'))
        toastr.success("{{ session('status') }}");
        @endif

        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif

        @if (session('warning'))
        toastr.success("{{ session('warning') }}");
        @endif
    </script>
