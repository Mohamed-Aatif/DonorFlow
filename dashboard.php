<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="kpi-container">

        <!-- <div class="kpi-cards">
      <div class="kpi-title">
        <p>Total Sales</p>
        <p>No of Orders</p>
      </div>
      <hr>
      <div class="kpi-content">
        <p>₹56000</p>
        <p class='a'>350</p>
      </div>
    </div> -->

        <div class="kpi-cards">
            <p class="kpi-title">Total Sales</p>
            <hr>
            <p class="kpi-content">56000</p>
        </div>

        <div class="kpi-cards">
            <p class="kpi-title">Pending Amount</p>
            <hr>
            <p class="kpi-content">56</p>
        </div>

        <div class="kpi-cards">
            <p class="kpi-title">Cancel Amount</p>
            <hr>
            <p class="kpi-content">56</p>
        </div>

        <div class="kpi-cards">
            <p class="kpi-title">No of Complaints</p>
            <hr>
            <p class="kpi-content">56</p>
        </div>

    </div>

    <div class="container">


        <div class="header">
            <span>Sales Chart</span>

            <select id="dropdownMenu" onchange="updateChart(this.value)" style="max-width: 110px">
                <option value="yearly">Yearly</option>
                <option value="quarterly">Quarterly</option>
                <option value="monthly">Monthly</option>
                <option value="weekly">Weekly</option>
                <option value="daily">Daily</option>
            </select>
        </div>

        <div class="body">
            <canvas id="salesChart"></canvas>
        </div>

    </div>
    <br>
    <div class="container">


        <div class="header">
            <span>Master</span>
        </div>

        <div class="body">

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Voice
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Products/Services</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Start Date</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Market Positioning</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Premium Laptop
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">High-performance laptop</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Product Base</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-15</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Top 1st</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">View Details</td>
                    </tr>
                    <tr id="row1-details" class="hidden bg-gray-50">
                        <td colspan="6" class="px-6 py-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold">Specifications</h3>
                                    <ul class="mt-2 space-y-2 text-sm text-gray-600">
                                        <li>Processor: Intel Core i7</li>
                                        <li>RAM: 16GB DDR4</li>
                                        <li>Storage: 512GB SSD</li>
                                        <li>Display: 15.6" 4K</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Additional Information</h3>
                                    <p class="mt-2 text-sm text-gray-600">Premium build quality with aluminum
                                        chassis, backlit keyboard, and fingerprint sensor for enhanced security.</p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">In
                                            Stock</span>
                                        <span class="ml-2 text-sm font-medium text-gray-900">$1,299.99</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row2')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Wireless Earbuds</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Noise-canceling earbuds</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Service Base</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-14</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Top 3rd</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">View Details</td>
                    </tr>
                    <tr id="row2-details" class="hidden bg-gray-50">
                        <td colspan="6" class="px-6 py-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold">Features</h3>
                                    <ul class="mt-2 space-y-2 text-sm text-gray-600">
                                        <li>Active Noise Cancellation</li>
                                        <li>30-hour Battery Life</li>
                                        <li>Water Resistant IPX4</li>
                                        <li>Touch Controls</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Additional Information</h3>
                                    <p class="mt-2 text-sm text-gray-600">Premium wireless earbuds with crystal
                                        clear sound quality and comfortable fit for all-day wear.</p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">Low
                                            Stock</span>
                                        <span class="ml-2 text-sm font-medium text-gray-900">$199.99</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</main>

<script>
const ctx = document.getElementById('salesChart').getContext('2d');
let salesChart;

// Function to generate random sales data
function generateSalesData(count) {
    const salesData = [];
    for (let i = 0; i < count; i++) {
        salesData.push(Math.floor(Math.random() * 100));
    }
    return salesData;
}

// Function to get labels for different time periods
function getLabels(period) {
    const labels = [];
    switch (period) {
        case 'yearly':
            for (let i = 1; i <= 5; i++) {
                labels.push(`Year ${i}`);
            }
            break;
        case 'quarterly':
            for (let i = 1; i <= 4; i++) {
                labels.push(`Q${i}`);
            }
            break;
        case 'monthly':
            for (let i = 1; i <= 12; i++) {
                labels.push(`Month ${i}`);
            }
            break;
        case 'weekly':
            for (let i = 1; i <= 52; i++) {
                labels.push(`Week ${i}`);
            }
            break;
        case 'daily':
            for (let i = 1; i <= 31; i++) {
                labels.push(`Day ${i}`);
            }
            break;
    }
    return labels;
}

// Function to create the chart
function createChart(period) {
    const labels = getLabels(period);
    const data = generateSalesData(labels.length);

    salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Sales',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Ensure the chart maintains the fixed height
            layout: {
                padding: {
                    top: 20 // Add padding to the top to prevent data labels from being cut off 
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                datalabels: {
                    display: true,
                    align: 'top',
                    backgroundColor: 'rgba(255, 255, 255, 0.7)',
                    borderRadius: 3,
                    font: {
                        weight: 'bold'
                    }
                },
                legend: {
                    display: false // Hide the legend
                }
            }
        },
        plugins: [ChartDataLabels]
    });
}

// Function to update chart data and labels
function updateChart(period) {
    if (salesChart) {
        salesChart.destroy();
    }
    createChart(period);
}

// Initialize with yearly data
createChart('yearly');
</script>

<?php
include 'footer.php';
?>