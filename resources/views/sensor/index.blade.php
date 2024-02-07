@extends('layouts.user_type.auth')

@section('title', 'Sensor')

@section('content')

<head>
    <style>
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Ini akan memusatkan chart pada container */
        }

        .card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 5px;
            /* Menjaga jarak antar card */
            padding: 20px;
            box-sizing: border-box;
            flex: 0 0 calc(50% - 10px);
            /* Mengatur lebar card agar dua card muat dalam satu baris */
        }

        .chart {
            height: 400px;
            /* Tinggi chart */
        }

        /* Pastikan pada layar kecil, setiap card mengambil penuh baris */
        @media (max-width: 767px) {
            .chart-container::after {
                content: none;
                /* Hapus pseudo-element */
            }

            .card {
                flex: 0 0 100%;
                /* Pada layar kecil, card mengambil penuh baris */
                max-width: 100%;
                /* Mengatur lebar maksimum card */
            }
        }

        .sensor-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sensor-list li {
            display: inline-block;
            /* Elemen akan seukuran konten */
            padding: 5px 10px;
            /* Tambahkan padding di sekitar teks */
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .sensor-list li.active {
            background: #28a745;
            /* Warna hijau untuk sensor aktif */
        }

        .sensor-list li.inactive {
            background: #dc3545;
            /* Warna merah untuk sensor tidak aktif */
        }

        /* Hapus margin bawah untuk item list terakhir */
        .sensor-list li:last-child {
            margin-bottom: 0;
        }
        .add-sensor-button {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove border */
    color: white; /* White text */
    padding: 15px 32px; /* Padding inside the button */
    text-align: center; /* Centered text */
    text-decoration: none; /* Remove underline from links */
    display: inline-block; /* Allow setting dimensions */
    font-size: 16px; /* Increase font size */
    margin: 4px 2px; /* Margin around the button */
    cursor: pointer; /* Pointer cursor on hover */
    border-radius: 4px; /* Rounded corners */
    transition: background-color 0.3s ease; /* Smooth background color change on hover */
}

.add-sensor-button:hover {
    background-color: #45a049; /* Darker shade of green on hover */
}

/* Optional: Add some shadow to the button for depth */
.add-sensor-button:active {
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

    </style>
</head>

<body>


    <h3>Tambah Sensor Baru</h3>
    <form action="{{ route('sensor.store') }}" method="POST">
        @csrf
        <button type="submit" class="add-sensor-button">Tambah Sensor</button>
    </form>
    
    

    <h2 class="text-center">Status Sensor</h2>
    <div class="chart-container">
        <!-- Card untuk sensor aktif -->
        <div class="card">
            <h3 class="text-center">Sensor Aktif</h3>
            <ul class="sensor-list">
                @foreach ($sensorStatus as $sensor_id => $status)
                    @if ($status == 'active')
                        <li class="active">
                            Sensor {{ $sensor_id }}
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        
        <!-- Card untuk sensor tidak aktif -->
        <div class="card">
            <h3 class="text-center">Sensor Tidak Aktif</h3>
            <ul class="sensor-list">
                @foreach ($sensorStatus as $sensor_id => $status)
                    @if ($status == 'inactive')
                        <li class="inactive">
                            Sensor {{ $sensor_id }}
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>



    <h2 class="text-center">Grafik Sensor</h2>
    <div class="chart-container">
        @foreach (['nitrogen', 'kalium', 'phosphorus', 'temperature', 'humidity', 'ph', 'electrical_conductivity'] as $parameter)
            <div class="card">
                <div id="container-{{ $parameter }}" class="chart"></div>
            </div>
        @endforeach
    </div>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
        var seriesData = @json($seriesData);

        Object.keys(seriesData).forEach(function(parameter) {
            initChart('container-' + parameter, parameter.charAt(0).toUpperCase() + parameter.slice(1), seriesData[
                parameter]);
        });

        function initChart(container, title, series) {
            if (title.toLowerCase() === 'ph') {
                title = 'pH';
            }

            Highcharts.chart(container, {
                chart: {
                    type: 'line'
                },
                title: {
                    text: title.replace(/_/g, ' ').replace(/\b\w/g, function(l) {
                        return l.toUpperCase()
                    })
                },
                xAxis: {
                    type: 'datetime',
                    labels: {
                        formatter: function() {
                            // Memisahkan tanggal dan waktu dengan tag <br> untuk baris baru
                            return Highcharts.dateFormat('%e %b %Y<br>%H:%M:%S', this.value);
                        },
                        rotation: -45, // Memiringkan label ke atas
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.33/moment-timezone-with-data.min.js"></script>
</body>
@endsection
