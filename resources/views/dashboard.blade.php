@extends('layouts.app')

@section('content')
<style>
    .graph-section {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    width: 900px;
    height: 600px;
    justify-content: center;
    }

    .graph-section h3 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 20px;
    }
</style>

<div class=" graph-section">
  <h3>Réservations par client</h3>
  <canvas id="reservationsByClientChart" width="400" height="300"></canvas>
</div>

<div class=" graph-section">
  <h3>Réservations par état</h3>
  <canvas id="etat-chart"  width="200" height="10"></canvas>
</div>


<div class=" graph-section" >
  <h3>Réservations par mode de paiement</h3>
  <canvas id="reservationsChart"  width="400" height="300"></canvas>
</div>

<div class=" graph-section">
  <h3>Distance parcourue par chauffeur</h3>
  <canvas id="distance-chart"  width="400" height="300"></canvas>
</div>


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('reservationsByClientChart').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: [
                @foreach($reservationsByClient as $reservation)
                    '{{ $reservation->nom }}',
                @endforeach
            ],
            datasets: [{
                label: 'Nombre de réservations par client',
                data: [
                    @foreach($reservationsByClient as $reservation)
                        {{ $reservation->total_reservations }},
                    @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const reservations = {!! json_encode($reservationsParEtat) !!};
    const counts = {
    'A': 0,
    'C': 0,
    'T': 0
    };
    reservations.forEach(reservation => {
    counts[reservation.etat]++;
    });

    // créer le graphique en camembert
    const ctx2 = document.getElementById('etat-chart').getContext('2d');
    const chart2 = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['En attente', 'En cours', 'Terminées'],
        datasets: [{
        data: [counts['A'], counts['C'], counts['T']],
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
        
        }]
    }
    });

// Créez le graphique
    const reservationsChart = new Chart(document.getElementById('reservationsChart'), {
    type: 'bar',
    data: {
        labels: [
                @foreach($reservationsByPayment as $paiements)
                    '{{ $paiements->mode }}',
                @endforeach
        ],
        datasets: [{
        label: 'Nombre de réservations',
        data: [
                    @foreach($reservationsByPayment as $paiements)
                        {{ $paiements->total }},
                    @endforeach
                ],
        backgroundColor: ['#36a2eb', '#ff6384', '#ffcd56', '#4bc0c0']
        }]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
            beginAtZero: true
            }
        }]
        }
    }
    });

    var data = {!! json_encode($data) !!};
    
    var labels = data.map(function(item) {
        return item.name;
    });
    var values = data.map(function(item) {
        return item.distance;
    });
    
    var ctx = document.getElementById('distance-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Distance parcourue',
                data: values,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


@endsection

@endsection