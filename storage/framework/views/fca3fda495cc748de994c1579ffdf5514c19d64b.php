

<?php $__env->startSection('content'); ?>
    <br>
    <div class="container-fluid" style="margin-top: 4%">
        <div class="row">

            <div class="col-4 bg-white table-responsive mb-30">

            </div>
            <div class="col-4 bg-white table-responsive mb-30">

            </div>
            <div class="col-4 bg-white table-responsive rounded shadow-sm mb-30">

            </div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.google.day')); ?>', '<?php echo e(trans('admin.page-views')); ?>', '<?php echo e(trans('admin.visitors')); ?>'],
                            <?php $__currentLoopData = $totalVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($visitors['date']->format('M d')); ?>', <?php echo e($visitors['pageViews']); ?>, <?php echo e($visitors['visitors']); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        chart: {
                            title: '<?php echo e(trans('admin.visitors-and-pages-title')); ?>',
                            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                        }
                    };

                    var chart = new google.charts.Bar(document.getElementById('visitors-and-pages'));

                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawColColors);

                function drawColColors() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Url');
                    data.addColumn('number', '<?php echo e(trans('admin.page-views')); ?>');
                    // data.addColumn('number', 'Energy Level');

                    data.addRows([
                            <?php $__currentLoopData = $mostVisitedPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($page['url']); ?>', <?php echo e($page['pageViews']); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        title: '<?php echo e(trans('admin.most-visited-title')); ?>',
                        colors: ['#3366CC'],
                        hAxis: {
                            title: '<?php echo e(trans('admin.pages')); ?>',
                            viewWindow: {
                                min: [7, 30, 0],
                                max: [17, 30, 0]
                            }
                        },
                        vAxis: {
                            title: '<?php echo e(trans('admin.page-views')); ?>'
                        }
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('most-visited'));
                    chart.draw(data, options);
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.url')); ?>', '<?php echo e(trans('admin.page-views')); ?>',],
                            <?php $__currentLoopData = $referrs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($referr['url']); ?>', <?php echo e($referr['pageViews']); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        title: '<?php echo e(trans('admin.referral-title')); ?>',
                        chartArea: {width: '50%'},
                        hAxis: {
                            title: '<?php echo e(trans('admin.referrals-total')); ?>',
                            minValue: 0
                        },
                        vAxis: {
                            title: '<?php echo e(trans('admin.options')); ?>'
                        }
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('referrals'));

                    chart.draw(data, options);
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load("current", {packages: ["corechart"]});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.type')); ?>', '<?php echo e(trans('admin.sessions')); ?>'],
                            <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($type['type']); ?>',<?php echo e($type['sessions']); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        title: '<?php echo e(trans('admin.user-types-title')); ?>',
                        pieHole: 0.4,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('users-type'));
                    chart.draw(data, options);
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load("current", {packages: ["corechart"]});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.device')); ?>', '<?php echo e(trans('admin.visits')); ?>'],
                            <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($device[0]); ?>', <?php echo e($device[1]); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        title: '<?php echo e(trans('admin.devices-title')); ?>',
                        is3D: true,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('users-devices'));
                    chart.draw(data, options);
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.browsers')); ?>', '<?php echo e(trans('admin.sessions')); ?>'],
                            <?php $__currentLoopData = $browsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $browser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($browser['browser']); ?>', <?php echo e($browser['sessions']); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {
                        title: '<?php echo e(trans('admin.browsers-title')); ?>'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('users-browsers'));

                    chart.draw(data, options);
                }
            </script>

            
            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['geochart'],
                    // Note: you will need to get a mapsApiKey for your project.
                    // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
                    'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
                });
                google.charts.setOnLoadCallback(drawRegionsMap);

                function drawRegionsMap() {
                    var data = google.visualization.arrayToDataTable([
                        ['<?php echo e(trans('admin.country')); ?>', '<?php echo e(trans('admin.visits')); ?>'],
                            <?php $__currentLoopData = $visitsPerCountry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visits): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ['<?php echo e($visits[0]); ?>', <?php echo e($visits[1]); ?>],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]);

                    var options = {};

                    var chart = new google.visualization.GeoChart(document.getElementById('users-regions'));

                    chart.draw(data, options);
                }
            </script>

            <div class="container-fluid mt-30">
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="visitors-and-pages" class="chart"></div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="most-visited" class="chart"></div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="referrals" class="chart"></div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="users-type" class="chart"></div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="users-devices" class="chart"></div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div id="users-browsers" class="chart"></div>
                    </div>

                    <div class="col-md-12 col-sm-12 mb-30">
                        <div id="users-regions" class="world-map"></div>
                    </div>

                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/statistics/index.blade.php ENDPATH**/ ?>