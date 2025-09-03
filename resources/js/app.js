import './bootstrap';

import Alpine from 'alpinejs';
import Chart from 'chart.js/auto';
window.Alpine = Alpine;

Alpine.start();

const ctx1 = document.getElementById('productsChart');
if (ctx1) {
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr"],
            datasets: [{
                label: 'Products',
                data: [10, 25, 35, 50],
                borderColor: 'rgb(99, 102, 241)',
                backgroundColor: 'rgba(99, 102, 241, 0.2)',
                tension: 0.4
            }]
        }
    });
}

const ctx2 = document.getElementById('testimonialChart');
if (ctx2) {
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ["Active", "Inactive"],
            datasets: [{
                data: [30, 10],
                backgroundColor: ['#6366f1', '#e5e7eb']
            }]
        }
    });
}