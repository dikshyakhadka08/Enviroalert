// Prepare data for charts using the enviroData variable
const years = enviroData.map(data => data.year);
const deaths = enviroData.map(data => data.death);
const floodNumbers = enviroData.map(data => data.floodNo);

// Create Line chart
const lineChartCtx = document.getElementById('lineChart').getContext('2d');
new Chart(lineChartCtx, {
    type: 'line',
    data: {
        labels: years,
        datasets: [{
            label: 'Deaths',
            data: deaths,
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: false
        }]
    },
    options: {
        responsive: true
    }
});

// Create Bar chart
const barChartCtx = document.getElementById('barChart').getContext('2d');
new Chart(barChartCtx, {
    type: 'bar',
    data: {
        labels: years,
        datasets: [{
            label: 'Flood Numbers',
            data: floodNumbers,
            backgroundColor: 'rgba(75, 192, 192, 0.6)'
        }]
    },
    options: {
        responsive: true
    }
});

// Create Area chart
const areaChartCtx = document.getElementById('areaChart').getContext('2d');
new Chart(areaChartCtx, {
    type: 'line',
    data: {
        labels: years,
        datasets: [{
            label: 'Flood Numbers',
            data: floodNumbers,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: true
        }]
    },
    options: {
        responsive: true
    }
});

// Create Pie chart
const pieChartCtx = document.getElementById('pieChart').getContext('2d');
new Chart(pieChartCtx, {
    type: 'pie',
    data: {
        labels: years,
        datasets: [{
            data: floodNumbers,
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ]
        }]
    },
    options: {
        responsive: true
    }
});
