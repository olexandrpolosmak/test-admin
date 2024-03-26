import "flowbite";
import ApexCharts from "apexcharts";
import {
    getChartOptions,
    columnChartOptions,
    barOptions,
    seriesOptions,
    getDonutOptions,
} from "./chats.js";
import Datepicker from 'flowbite-datepicker/Datepicker';


console.log("here");

if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
    var elements = document.getElementsByClassName("pie-chart");
    Array.from(elements).forEach((element) => {
        const chart = new ApexCharts(element, getChartOptions());
        chart.render();
    });
}

if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("column-chart"), columnChartOptions);
    chart.render();
}

if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("bar-chart"), barOptions);
    chart.render();
}

if (document.getElementById("data-series-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("data-series-chart"), seriesOptions);
    chart.render();
}

if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("donut-chart"), getDonutOptions());
    chart.render();

    // Get all the checkboxes by their class name
    const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

    // Function to handle the checkbox change event
    function handleCheckboxChange(event, chart) {
        const checkbox = event.target;
        if (checkbox.checked) {
            switch(checkbox.value) {
                case 'desktop':
                    chart.updateSeries([15.1, 22.5, 4.4, 8.4]);
                    break;
                case 'tablet':
                    chart.updateSeries([25.1, 26.5, 1.4, 3.4]);
                    break;
                case 'mobile':
                    chart.updateSeries([45.1, 27.5, 8.4, 2.4]);
                    break;
                default:
                    chart.updateSeries([55.1, 28.5, 1.4, 5.4]);
            }

        } else {
            chart.updateSeries([35.1, 23.5, 2.4, 5.4]);
        }
    }

    // Attach the event listener to each checkbox
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
    });
}

const datepickerEl = document.getElementById('datepickerId');
new Datepicker(datepickerEl, {
    format: "yyyy-mm-dd",
    // options
});


