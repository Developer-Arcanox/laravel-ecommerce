// Toggle sidebar on mobile
document.addEventListener('DOMContentLoaded', function() {
    // Initialize charts after DOM is loaded
    initCharts();
});

function initCharts() {
    // Revenue Chart Data
    const revenueData = {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
        datasets: [{
            label: 'Revenue',
            data: [4500, 5200, 4800, 5500, 6000],
            backgroundColor: 'rgba(67, 97, 238, 0.1)',
            borderColor: 'rgba(67, 97, 238, 1)',
            borderWidth: 2,
            tension: 0.4,
            fill: true
        }]
    };

    // Category Chart Data
    const categoryData = {
        labels: ['Electronics', 'Clothing', 'Home & Kitchen', 'Books', 'Other'],
        datasets: [{
            data: [35, 25, 20, 10, 10],
            backgroundColor: [
                '#4361ee',
                '#f72585',
                '#4cc9f0',
                '#4895ef',
                '#3a0ca3'
            ],
            borderWidth: 0
        }]
    };

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: revenueData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function(context) {
                            return '$' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    },
                    ticks: {
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Category Chart
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'doughnut',
        data: categoryData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        boxWidth: 12,
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.raw + '%';
                        }
                    }
                }
            },
            cutout: '70%'
        }
    });

    // Add click event to chart period buttons
    document.querySelectorAll('.btn-group .btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.btn-group .btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // In a real implementation, you would update the chart data here
            // based on the selected time period
        });
    });
}