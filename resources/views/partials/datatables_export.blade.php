{{--
@push('styles')
<link href="/js/plugins/datatables/buttons/css/buttons.dataTables.min.css" rel="stylesheet"/>
@endpush

@push('scripts')
{!! Packer::js([
'/js/plugins/datatables/buttons/js/dataTables.buttons.min.js',
'/js/plugins/datatables/buttons/js/buttons.bootstrap.min.js',
'/js/plugins/datatables/buttons/js/buttons.server-side.js',
],
'/storage/cache/js/')
!!}
@endpush
--}}

@push('scripts')
<script>

    /* following method is called before "data table" makes ajax request while "preXhr.dt" is data table specific event */
    $('#dataTableBuilder').on('preXhr.dt', function (e, settings, json, xhr) {

    });

    /* following method is called when the ajax request of "data table" is completed while "xhr.dt" is data table specific event */
    $('#dataTableBuilder').on('xhr.dt', function (e, settings, json, xhr) {

    });

</script>
{!! $dataTable->scripts() !!}
@endpush