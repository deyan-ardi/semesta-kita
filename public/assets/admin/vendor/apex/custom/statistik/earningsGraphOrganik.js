var options = {
    chart: {
        type: "bar",
        toolbar: {
            show: true,
        },
    },
    plotOptions: {
        bar: {
            horizontal: true,
            columnWidth: "45px",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 2,
        colors: ["transparent"],
    },
    series: [
        {
            name: "Total Sampah",
            data: organik_jml,
        },
    ],
    legend: {
        show: false,
    },
    xaxis: {
        categories: organik_name,
    },
    yaxis: {
        show: true,
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " Kg";
            },
        },
    },
    grid: {
        borderColor: "#e0e6ed",
        strokeDashArray: 5,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0,
        },
    },
    colors: ["#006e2e"],
};
var chart = new ApexCharts(
    document.querySelector("#earningsGraphOrganik"),
    options
);
chart.render();
