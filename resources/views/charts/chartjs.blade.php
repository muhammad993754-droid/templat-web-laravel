@extends('layouts.adminkit')

@section('title', 'Charts')

@section('content')
    <h1 class="h3 mb-3"><strong>Chart.js</strong> Charts</h1>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Line Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="chartjs-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="chartjs-bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pie Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart chart-sm">
                        <canvas id="chartjs-pie"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Doughnut Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart chart-sm">
                        <canvas id="chartjs-doughnut"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    new Chart(document.getElementById("chartjs-line"), {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul"],
            datasets: [{ label: "Sales", borderColor: window.theme.primary, data: [65,59,80,81,56,55,40], fill: false }]
        },
        options: { maintainAspectRatio: false }
    });
    new Chart(document.getElementById("chartjs-bar"), {
        type: "bar",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul"],
            datasets: [{ label: "Revenue", backgroundColor: window.theme.primary, data: [65,59,80,81,56,55,40] }]
        },
        options: { maintainAspectRatio: false }
    });
    new Chart(document.getElementById("chartjs-pie"), {
        type: "pie",
        data: {
            labels: ["Chrome","Firefox","Safari","Other"],
            datasets: [{ data: [4306,3801,1689,1234], backgroundColor: [window.theme.primary, window.theme.warning, window.theme.danger, window.theme.info] }]
        },
        options: { maintainAspectRatio: false }
    });
    new Chart(document.getElementById("chartjs-doughnut"), {
        type: "doughnut",
        data: {
            labels: ["Desktop","Mobile","Tablet"],
            datasets: [{ data: [5342,2435,967], backgroundColor: [window.theme.primary, window.theme.warning, window.theme.danger] }]
        },
        options: { maintainAspectRatio: false }
    });
});
</script>
@endpush
