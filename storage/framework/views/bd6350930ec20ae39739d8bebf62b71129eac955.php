
<script type="text/javascript" src="<?php echo e(config('laravelblocker.datatablesJsCDN')); ?>"></script>
<script type="text/javascript" src="<?php echo e(config('laravelblocker.datatablesJsPresetCDN')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').dataTable({
            "order": [[0]],
            "pageLength": 100,
            "lengthMenu": [
                [10, 25, 50, 100, 500, 1000, -1],
                [10, 25, 50, 100, 500, 1000, "All"]
            ],            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "dom": 'T<"clear">lfrtip',
            "sPaginationType": "full_numbers",
            'aoColumnDefs': [{
                'bSortable': false,
                'searchable': false,
                'aTargets': ['no-search'],
                'bTargets': ['no-sort']
            }]
        });
    });
</script>
<?php /**PATH /var/www/html/vendor/jeremykenedy/laravel-blocker/src/resources/views/scripts/datatables.blade.php ENDPATH**/ ?>