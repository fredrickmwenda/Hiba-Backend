@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Welcome to Hiba</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
            <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="calendar" class=" text-primary"></i></span>
            <input type="text" class="form-control border-primary bg-transparent">
        </div>
        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="printer"></i>
            Print
        </button>
        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
            Download Report
        </button>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow-1">
        <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Users</h6>
                <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$users->count()}}</h3>
                <div class="d-flex align-items-baseline">
                    <p class="text-success">
                    <span>+3.3%</span>
                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Companies</h6>
                <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$companies->count()}}</h3>
                <div class="d-flex align-items-baseline">
                    <p class="text-danger">
                    <span>-2.8%</span>
                    <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                    </p>
                </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Programs</h6>
                <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$programs->count()}}</h3>
                <div class="d-flex align-items-baseline">
                    <p class="text-success">
                    <span>+2.8%</span>
                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Rewards</h6>
                <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$rewards->count()}}</h3>
                <div class="d-flex align-items-baseline">
                    <p class="text-success">
                    <span>+3.3%</span>
                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div> 

<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
        <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
            <h6 class="card-title mb-0">Companies Registration</h6>
            <div class="dropdown">
            <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
            </div>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-7">
            <p class="text-muted tx-13 mb-3 mb-md-0">Cover the registration of companies gnerally.</p>
            </div>
            <div class="col-md-5 d-flex justify-content-md-end">
            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" onclick="updateChart('today')">Today</button>
                <button type="button" class="btn btn-outline-primary d-none d-md-block" onclick="updateChart('week')">Week</button>
                <button type="button" class="btn btn-primary" onclick="updateChart('month')">Month</button>
                <button type="button" class="btn btn-outline-primary" onclick="updateChart('year')">Year</button>
            </div>
            </div>
        </div>
        <div id="companiesChart" ></div>
        </div>
    </div>
    </div>
</div> 


@push('js')
<script>
    var chart;
    function updateChart(filter) {
    // Make an AJAX request to retrieve data based on the selected filter
        $.ajax({
            url: '/your-data-endpoint', // Replace with your actual data retrieval URL
            type: 'GET',
            data: {
                filter: filter,
            },
            success: function (data) {
                // Assuming data is an object containing the updated chartData
                var groupedCounts = data.groupedCounts;

                // Convert the groupedCounts object to an array of objects with x and y properties
                var chartData = Object.keys(groupedCounts).map(function (key) {
                    return { x: key, y: groupedCounts[key] };
                });

                // Update the chart's series data with the new chartData
                chart.updateSeries([{
                    name: 'Companies Registration Count',
                    data: chartData.map(data => data.y), // Update y-axis data
                }]);

                // Update the chart's x-axis categories and series data
                chart.updateOptions({
                    xaxis: {
                        categories: chartData.map(data => data.x), // Update x-axis categories
                    },
                });

                // Update any other chart options here if needed

                // Render the updated chart
                chart.render();
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
     if($('#companiesChart').length){
        var colors = {
            primary        : "#6571ff",
            secondary      : "#7987a1",
            success        : "#05a34a",
            info           : "#66d1d1",
            warning        : "#fbbc06",
            danger         : "#ff3366",
            light          : "#e9ecef",
            dark           : "#060c17",
            muted          : "#7987a1",
            gridBorder     : "rgba(77, 138, 240, .15)",
            bodyColor      : "#000",
            cardBg         : "#fff"
        }
        var groupedCounts = <?php echo json_encode($groupedCounts); ?>;
        

        // Convert the groupedCounts object to an array of objects with x and y properties
        var chartData = Object.keys(groupedCounts).map(function(key) {
            return { x: key, y: groupedCounts[key] };
        });

        // Create an ApexCharts instance
        var options = {
        chart: {
            type: "line",
            height: '400',
            parentHeightOffset: 0,
            foreColor: colors.bodyColor,
            background: colors.cardBg,
            toolbar: {
            show: false
            },
        },
        colors: [colors.primary, colors.danger, colors.warning],
        grid: {
            padding: {
            bottom: -4,
            },
            borderColor: colors.gridBorder,
            xaxis: {
            lines: {
                show: true
            }
            }
        },
            xaxis: {
                categories: chartData.map(data => data.x), // x-axis labels
                lines: {
                show: true
                },
                axisBorder: {
                color: colors.gridBorder,
                },
                axisTicks: {
                color: colors.gridBorder,
                },
                crosshairs: {
                stroke: {
                    color: colors.secondary,
                },
                },
            },
            series: [
                {
                    name: 'Companies Registration Count',
                    data: chartData.map(data => data.y), // y-axis data
                },
            ],
            yaxis: {
            opposite: false,
            title: {
                text: 'Companies Registration Count',
                offsetX: -135,
                style:{
                size: 9,
                color: colors.muted
                }
            },
            labels: {
                align: 'left',
                offsetX: -20,
            },
            tickAmount: 4,
            tooltip: {
                enabled: true
            },
            crosshairs: {
                stroke: {
                color: colors.secondary,
                },
            },
            },
            markers: {
            size: 0,
            },
            stroke: {
            width: 2,
            curve: "straight",
            },
        };
        

        var chart = new ApexCharts(document.querySelector("#companiesChart"), options);

        // Render the chart
        chart.render();
  }

</script>
@endpush
@endsection