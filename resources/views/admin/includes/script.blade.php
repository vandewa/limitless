<!-- Core JS files -->
<script src="{{ asset('limitless/global_assets/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('limitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/extensions/jquery_ui/touch.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/buttons/spin.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/buttons/ladda.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
<script src="{{ asset ('limitless/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script
    src="{{ asset ('limitless/global_assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>

<script src="{{ asset('limitless/layout_1/LTR/default/full/assets/js/app.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/components_buttons.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
{{--
<script src="{{ asset('limitless/global_assets/js/demo_pages/datatables_basic.js')}}"></script> --}}
{{--
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/form_select2.js')}}"></script> --}}


<!-- /theme JS files -->

<!-- Theme JS files -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).on('click', '.delete-data-table-certificate', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.certificate').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table-pelatihan', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.pelatihan').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table-serti', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.serti').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table-pajak', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.pajak').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table-omzet', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.omzet').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table-produksi', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.produksi').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });

    $(document).on('click', '.delete-data-table', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('.tabelku').DataTable().ajax.reload();
                        // if (typeof table2) {
                        //     table2.ajax.reload();
                        // }
                    }
                })
            }
        })
    });
</script>
<script type="text/javascript">
    function sweetAlert() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data.',
            'success'
        )
    }
    @if (session('tambah'))
        sweetAlert();
    @endif

    function sweetAlert2() {
        Swal.fire(
            'Good job!',
            'Berhasil mengedit data.',
            'success'
        )
    }
    @if (session('edit'))
        sweetAlert2();
    @endif

    function sweetAlert3() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data biaya produksi.',
            'success'
        )
    }
    @if (session('biaya'))
        sweetAlert3();
    @endif

    function sweetAlert4() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data omzet.',
            'success'
        )
    }
    @if (session('omzet'))
        sweetAlert4();
    @endif

    function sweetAlert5() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data pajak.',
            'success'
        )
    }
    @if (session('pajak'))
        sweetAlert4();
    @endif

    function sweetAlert5() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data pajak.',
            'success'
        )
    }
    @if (session('pelatihan'))
        sweetAlert4();
    @endif

    function sweetAlert5() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data pajak.',
            'success'
        )
    }
    @if (session('serti'))
        sweetAlert4();
    @endif

    function sweetAlert5() {
        Swal.fire(
            'Good job!',
            'Berhasil menambahkan data pajak.',
            'success'
        )
    }
    @if (session('serti2'))
        sweetAlert4();
    @endif
</script>
<script>
    $('.daterange-single').daterangepicker({
        singleDatePicker: true
    });

    // Select with search
    $('.select-search').select2();

    // Fixed width. Multiple selects
    $('.select-fixed-multiple').select2({
        minimumResultsForSearch: Infinity,
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>