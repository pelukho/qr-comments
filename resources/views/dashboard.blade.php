@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">{{ __('Отзывы') }}</h4>
                        </div>
                    </div>
                    <div class="c-chart-wrapper">
                        <canvas class="chart chartjs-render-monitor" id="main-chart"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md mb-sm-2 mb-0">
                            <div class="text-muted">{{ __('Очень хорошо') }}</div>
                            <strong>{{ $count['best']['count'] }} ({{ $count['best']['percentage'] }}%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-gradient-success" role="progressbar"
                                     style="width: {{ $count['best']['percentage'] }}%"
                                     aria-valuenow="{{ $count['best']['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md mb-sm-2 mb-0">
                            <div class="text-muted">{{ __('Хорошо') }}</div>
                            <strong>{{ $count['good']['count'] }} ({{ $count['good']['percentage'] }}%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-gradient-info" role="progressbar"
                                     style="width: {{ $count['good']['percentage'] }}%"
                                     aria-valuenow="{{ $count['good']['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md mb-sm-2 mb-0">
                            <div class="text-muted">{{ __('Нормально') }}</div>
                            <strong>{{ $count['normal']['count'] }} ({{ $count['normal']['percentage'] }}%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-gradient-warning" role="progressbar"
                                     style="width: {{ $count['normal']['percentage'] }}%"
                                     aria-valuenow="{{ $count['normal']['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md mb-sm-2 mb-0">
                            <div class="text-muted">{{ __('Плохо') }}</div>
                            <strong>{{ $count['bed']['count'] }} ({{ $count['bed']['percentage'] }}%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-gradient-danger" role="progressbar"
                                     style="width: {{ $count['bed']['percentage'] }}%"
                                     aria-valuenow="{{ $count['bed']['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md mb-sm-2 mb-0">
                            <div class="text-muted">{{ __('Очень плохо') }}</div>
                            <strong>{{ $count['worst']['count'] }} ({{ $count['worst']['percentage'] }}%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar" role="progressbar"
                                     style="width: {{ $count['worst']['percentage'] }}%; background-color: #ad0000"
                                     aria-valuenow="{{ $count['worst']['percentage'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let mainChart = new Chart(document.getElementById('main-chart'), {
            type: 'bar',
            data: {
                labels: ['Очень хорошо', 'Хорошо', 'Нормально', 'Плохо', 'Очень плохо'],
                datasets: [{
                    label: 'Очень хорошо',
                    fill: false,
                    borderWidth: 2,
                    data: [
                        {{ $count['best']['count'] }},
                        {{ $count['good']['count'] }},
                        {{ $count['normal']['count'] }},
                        {{ $count['bed']['count'] }},
                        {{ $count['worst']['count'] }},
                    ],
                    backgroundColor: ["#419e58", "#6ba5ce", "#f6bb69", "#db5050", "#b60000"],
                    borderColor: ["#1b9e3e", "#2982cc", "#f6960b", "#d93333", "#ad0000"],
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart - Stacked'
                    },
                },
                responsive: true,

                legend: {display: false},
            }
        });
    </script>
@endsection
