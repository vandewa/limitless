<!-- Core JS files -->
<script src="{{ asset('limitless/global_assets/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('limitless/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

<script src="{{ asset('limitless/layout_1/LTR/default/full/assets/js/app.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/dashboard.js') }}"></script>
<!-- /theme JS files -->
<script src="{{ asset('limitless/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/datatables_advanced.js') }}"></script>

<script src="{{ asset('limitless/global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
<script src="{{ asset('limitless/global_assets/js/demo_pages/extra_sweetalert.js') }}"></script>
<script type="text/javascript">
    // btn hapus
    $(document).on('click', '.delete-data-table', function (a) {
        a.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "Do you realy want to delete this records? This process cannot be undone.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-blue',
            confirmButtonText: 'Delete!',
            buttonsStyling: false
        }).then((result) => {
            a.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: url,
                method: 'delete',
                success: function () {
                    swal(
                        'Deleted!',
                        'data has been deleted.',
                        'success'
                    )
                    $('#tabelku').DataTable().ajax.reload();
                }
            })
        })
    });
</script>