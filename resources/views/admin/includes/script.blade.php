<!-- Core JS files -->
<script src="{{ asset('limitless/global_assets/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('limitless/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/buttons/spin.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/buttons/ladda.min.js')}}"></script>
{{-- <script src="{{ asset('limitless/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script> --}}
{{-- <script src="{{ asset('limitless/global_assets/js/demo_pages/dashboard.js') }}"></script> --}}
<script src="{{ asset('limitless/layout_1/LTR/default/full/assets/js/app.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/components_buttons.js')}}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>


{{-- <script src="{{ asset('limitless/global_assets/js/demo_pages/datatables_basic.js')}}"></script> --}}
<!-- /theme JS files -->

<!-- Theme JS files -->

<!-- /theme JS files -->
{{-- 
<script src="{{ asset('limitless/global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/extra_sweetalert.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
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