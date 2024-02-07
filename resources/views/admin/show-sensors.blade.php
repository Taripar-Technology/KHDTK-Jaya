{{-- admin/show-sensors.blade.php --}}
@extends('layouts.user_type.auth')

@section('title', 'View Sensors')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Grafik Sensor untuk {{ $user->name }}</h2>
            <div class="row">
                @foreach (['nitrogen', 'kalium', 'phosphorus', 'temperature', 'humidity', 'ph', 'electrical_conductivity'] as $parameter) {{-- Sesuaikan array ini jika perlu --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div id="container-{{ $parameter }}" class="chart"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
    var seriesData = @json($seriesData);

    Object.keys(seriesData).forEach(function(parameter) {
        initChart('container-' + parameter, parameter.charAt(0).toUpperCase() + parameter.slice(1), seriesData[parameter]);
    });

    function initChart(container, title, series) {
        if (title.toLowerCase() === 'ph') {
            title = 'pH';
        }

        Highcharts.setOptions({
    global: {
        timezoneOffset: -420 // Untuk WIB (UTC+7). Sesuaikan nilai ini sesuai dengan timezone Anda.
    }
});
        Highcharts.chart(container, {
            chart: {
                type: 'line'
            },
            title: {
                text: title.replace(/_/g, ' ').replace(/\b\w/g, function(l) { return l.toUpperCase() })
            },
            xAxis: {
                type: 'datetime',
                labels: {
                    formatter: function() {
                        return Highcharts.dateFormat('%e %b %Y<br>%H:%M:%S', this.value);
                    },
                    rotation: -45,
                    align: 'right'
                },
                title: {
                    text: 'Date and Time'
                }
            },
            yAxis: {
                title: {
                    text: 'Values'
                }
            },
            series: series,
            navigation: {
                buttonOptions: {
                    enabled: true
                }
            },
        });
    }
</script>

@endsection
