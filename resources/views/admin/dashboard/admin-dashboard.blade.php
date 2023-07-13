<div class="p-4 sm:p-6 lg:p-14 lg:pt-7 min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)] ">
    <nav class="flex mb-4 sm:mb-6 lg:mb-7" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ url('admin/dashboard') }}"
                    class="inline-flex items-center text-2xl lg:text-4xl  font-bold text-gray-700 hover:text-accent-regular">
                    <svg
                        xmlns="http://www.w3.org/2000/svg" class="inline mb-1 mr-1 h-8 lg:h-12 w-8 lg:w-12"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                    </svg>
                    Dashboard
                </a>
            </li>
        </ol>
    </nav>
    <section class="grid grid-cols-8 gap-2 lg:gap-6">


        <div
            class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">CCH Cars</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-green-700/10 text-[#2ECA6A] rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['adminCarCount'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">New Bookings</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-yellow-400/20 text-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M10.5 1a1 1 0 0 0-1 1H2v1l1 1l1-1l1 1l1-1l1 1h2.5a1 1 0 0 0 1 1h2a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-2Zm.5 1.5a.5.5 0 0 1 1 0v1a.5.5 0 0 1-1 0v-1ZM2.146 9.354A.5.5 0 0 0 2 9.707V13.5a.5.5 0 0 0 .5.5H4a.5.5 0 0 0 .5-.5V13h6v.5a.5.5 0 0 0 .5.5h1.5a.5.5 0 0 0 .5-.5V9.707a.5.5 0 0 0-.146-.353L12 8.5l-1.354-2.257a.5.5 0 0 0-.43-.243H4.784a.5.5 0 0 0-.429.243L3 8.5l-.854.854ZM11.134 9H3.866l1.2-2h4.868l1.2 2ZM5.5 10.828v.372a.3.3 0 0 1-.3.3H3.3a.3.3 0 0 1-.3-.3v-.834a.3.3 0 0 1 .359-.294l1.82.364a.4.4 0 0 1 .321.392Zm6.5-.34v.712a.3.3 0 0 1-.3.3H9.8a.3.3 0 0 1-.3-.3v-.454a.3.3 0 0 1 .241-.294l1.78-.356a.4.4 0 0 1 .479.392Z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['newBooking'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">New Car Request</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-yellow-400/20 text-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M171.3 96H224v96H111.3l30.4-75.9C146.5 104 158.2 96 171.3 96zM272 192V96h81.2c9.7 0 18.9 4.4 25 12l67.2 84H272zm256.2 1l-100-125c-18.2-22.8-45.8-36-75-36H171.3C132 32 96.7 55.9 82.2 92.3L40.6 196.4C16.8 205.8 0 228.9 0 256v112c0 17.7 14.3 32 32 32h33.3c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80h130.6c7.6 45.4 47.1 80 94.7 80s87.1-34.6 94.7-80H608c17.7 0 32-14.3 32-32v-48c0-65.2-48.8-119-111.8-127zm-2.9 207c-6.6 18.6-24.4 32-45.3 32s-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16zM160 432c-20.9 0-38.7-13.4-45.3-32c-1.8-5-2.7-10.4-2.7-16c0-26.5 21.5-48 48-48s48 21.5 48 48c0 5.6-1 11-2.7 16c-6.6 18.6-24.4 32-45.3 32z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerCarRequestCount'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full mx-auto max-w-sm col-span-8 sm:col-span-4 lg:col-span-2 bg-white border border-gray-100 rounded-lg  shadow-lg">
            <div class="p-4">
                <div class="flex flex-col gap-4 text-gray-700">
                    <h5 class=" font-medium text-xl">New Owner Request</h5>
                    <div class=" flex gap-6 text-gray-700 items-center ">
                        <div class="p-3 bg-yellow-400/20 text-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                <circle cx="14.67" cy="8.3" r="6" fill="currentColor"
                                    class="clr-i-solid clr-i-solid-path-1" />
                                <path fill="currentColor"
                                    d="M16.44 31.82a2.15 2.15 0 0 1-.38-2.55l.53-1l-1.09-.33a2.14 2.14 0 0 1-1.5-2.1v-2.05a2.16 2.16 0 0 1 1.53-2.07l1.09-.33l-.52-1a2.17 2.17 0 0 1 .35-2.52a18.92 18.92 0 0 0-2.32-.16A15.58 15.58 0 0 0 2 23.07v7.75a1 1 0 0 0 1 1h13.44Z"
                                    class="clr-i-solid clr-i-solid-path-2" />
                                <path fill="currentColor"
                                    d="m33.7 23.46l-2-.6a6.73 6.73 0 0 0-.58-1.42l1-1.86a.35.35 0 0 0-.07-.43l-1.45-1.46a.38.38 0 0 0-.43-.07l-1.85 1a7.74 7.74 0 0 0-1.43-.6l-.61-2a.38.38 0 0 0-.36-.25h-2.08a.38.38 0 0 0-.35.26l-.6 2a6.85 6.85 0 0 0-1.45.61l-1.81-1a.38.38 0 0 0-.44.06l-1.47 1.44a.37.37 0 0 0-.07.44l1 1.82a7.24 7.24 0 0 0-.65 1.43l-2 .61a.36.36 0 0 0-.26.35v2.05a.36.36 0 0 0 .26.35l2 .61a7.29 7.29 0 0 0 .6 1.41l-1 1.9a.37.37 0 0 0 .07.44L19.16 32a.38.38 0 0 0 .44.06l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2.05a.38.38 0 0 0 .36.26h2.05a.38.38 0 0 0 .35-.26l.6-2.05a6.68 6.68 0 0 0 1.38-.57l1.89 1a.38.38 0 0 0 .44-.06L32 30.55a.38.38 0 0 0 .06-.44l-1-1.88a6.92 6.92 0 0 0 .57-1.38l2-.61a.39.39 0 0 0 .27-.35v-2.07a.4.4 0 0 0-.2-.36Zm-8.83 4.72a3.34 3.34 0 1 1 3.33-3.34a3.34 3.34 0 0 1-3.33 3.34Z"
                                    class="clr-i-solid clr-i-solid-path-3" />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class=" text-4xl leading-normal m-auto ">{{ $dashboard['ownerRequestCount'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mx-auto  col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">CHH All Accounts</h3>
            <div id="columnChart"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#columnChart"), {
                        series: [{
                            name: 'Users',
                            data: [<?php echo $dashboard['userCount']; ?>]
                        }, {
                            name: 'Owners',
                            data: [<?php echo $dashboard['ownerCount']; ?>]
                        }, {
                            name: 'Admins',
                            data: [<?php echo $dashboard['adminCount']; ?>]
                        }, {
                            name: 'Staff',
                            data: [<?php echo $dashboard['staffCount']; ?>]
                        }],
                        chart: {
                            type: 'bar',
                            height: 250
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '75%',
                                endingShape: 'rounded',
                                borderRadius: 4,
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ['transparent']
                        },
                        xaxis: {
                            categories: [''],
                        },
                        yaxis: {
                            title: {
                                text: 'Total Counts'
                            }
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        }
                    }).render();
                });
            </script>
        </div>
        <div
            class="w-full mx-auto col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">Most Booked Cars</h3>
            <div id="barChart"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                            name: "Booked",
                            data: <?php echo json_encode($dashboard['carWithBookingCounts']); ?>
                        }],
                        chart: {
                            type: 'bar',
                            height: '100%',

                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 4,
                                horizontal: true,
                            }
                        },
                        fill: {
                            colors: ['#e84949']
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            categories: <?php echo json_encode($dashboard['carWithBookingNames']); ?>,
                        }
                    }).render();
                });
            </script>
        </div>
        <div
            class="w-full mx-auto col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">Yearly Sales</h3>
            <div id="yearSales"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const salesData = <?php echo json_encode($yearlySales); ?>;
                    const chartData = salesData.map(item => item.total_sales);
                    new ApexCharts(document.querySelector("#yearSales"), {
                        series: [{
                            name: 'Sales',
                            data: chartData
                        }],
                        chart: {
                            height: 350,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                // borderRadius: 10,
                                columnWidth: '50%',
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 2
                        },

                        grid: {
                            row: {
                                colors: ['#fff', '#f2f2f2']
                            }
                        },
                        xaxis: {
                            labels: {
                                rotate: -45
                            },
                            categories: salesData.map(item => item.year),
                            tickPlacement: 'on'
                        },
                        yaxis: {
                            labels: {
                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value)
                            },
                              
                        },
                        tooltip: {
                            y: {

                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value),
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'light',
                                type: "horizontal",
                                shadeIntensity: 0.25,
                                gradientToColors: undefined,
                                inverseColors: true,
                                opacityFrom: 0.85,
                                opacityTo: 0.85,
                                stops: [50, 0, 100]
                            },
                        }
                    }).render();
                });
            </script>

        </div>
        <div
            class="w-full mx-auto col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">Monthly Sales</h3>
            <div id="monthlySales"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const monthlySalesData = <?php echo json_encode($monthlySales); ?>;
                    const monthlyChartData = monthlySalesData.map(item => item.total_sales);
                    const categories = monthlySalesData.map(item => `${item.month} ${item.year}`);


                    new ApexCharts(document.querySelector("#monthlySales"), {
                        series: [{
                            name: 'Sales',
                            data: monthlyChartData
                        }],
                        chart: {
                            height: 350,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                // borderRadius: 10,
                                columnWidth: '50%',
                            }
                        },
                        dataLabels: {
                            enabled: false,


                        },
                        stroke: {
                            width: 2
                        },

                        grid: {
                            row: {
                                colors: ['#fff', '#f2f2f2']
                            }
                        },
                        xaxis: {
                            categories: categories,
                            tickPlacement: 'on'
                        },
                        yaxis: {
                            
                            labels: {
                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value)
                            },
                        },
                        tooltip: {
                            y: {

                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value),
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'light',
                                type: "horizontal",
                                shadeIntensity: 0.25,
                                gradientToColors: undefined,
                                inverseColors: true,
                                opacityFrom: 0.85,
                                opacityTo: 0.85,
                                stops: [50, 0, 100]
                            },
                        }
                    }).render();
                });
            </script>

        </div>
        <div
            class="w-full mx-auto col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">Yearly Commissions</h3>
            <div id="yearCommissions"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const commissionData = <?php echo json_encode($yearlyCommissions); ?>;
                    const chartData = commissionData.map(item => item.total_commissions);
                    new ApexCharts(document.querySelector("#yearCommissions"), {
                        series: [{
                            name: 'Commissions',
                            data: chartData
                        }],
                        chart: {
                            height: 350,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                // borderRadius: 10,
                                columnWidth: '50%',
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        // stroke: {
                        //     width: 2
                        // },

                        grid: {
                            row: {
                                colors: ['#fff', '#f2f2f2']
                            }
                        },
                        xaxis: {
                            labels: {
                                rotate: -45
                            },
                            categories: commissionData.map(item => item.year),
                            // tickPlacement: 'on'
                        },
                        yaxis: {
                            labels: {
                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value)
                            },
                              
                        },
                        tooltip: {
                            y: {

                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value),
                            }
                        },
                        fill: {
                            colors: ['#1cb069']
                        }
                        
                    }).render();
                });
            </script>

        </div>
        <div
            class="w-full mx-auto col-span-8 sm:col-span-4  bg-white border border-gray-100 rounded-lg  shadow-lg p-2 sm:p-4">
            <h3 class="font-medium text-xl">Monthly Commissions</h3>
            <div id="monthlyCommissions"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const monthlyCommissionData = <?php echo json_encode($monthlyCommissions); ?>;
                    const monthlyCommissionChartData = monthlyCommissionData.map(item => item.total_commissions);
                    const categories = monthlyCommissionData.map(item => `${item.month} ${item.year}`);


                    new ApexCharts(document.querySelector("#monthlyCommissions"), {
                        series: [{
                            name: 'Commissions',
                            data: monthlyCommissionChartData
                        }],
                        chart: {
                            height: 350,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                // borderRadius: 10,
                                columnWidth: '50%',
                            }
                        },
                        dataLabels: {
                            enabled: false,


                        },
                        // stroke: {
                        //     width: 2
                        // },

                        grid: {
                            row: {
                                colors: ['#fff', '#f2f2f2']
                            }
                        },
                        xaxis: {
                            categories: categories,
                            tickPlacement: 'on'
                        },
                        yaxis: {
                            
                            labels: {
                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value)
                            },
                        },
                        tooltip: {
                            y: {

                                formatter: (value) => new Intl.NumberFormat('en-PH', {
                                    style: 'currency',
                                    currency: 'PHP'
                                }).format(value),
                            }
                        },
                        fill: {
                            colors: ['#1cb069']
                        }
                    }).render();
                });
            </script>

        </div>

    </section>


</div>
<script src="{{ url('js/apexcharts.min.js') }}"></script>
