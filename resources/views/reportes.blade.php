
@extends('main')

@section('content')

@unless(empty( $posts))
@endif
<div class="chartBox">
  <canvas id="myChart" height="500" width="1000"></canvas>
</div>
  <!-- javascript -->
<script>
  var datasets = [];
  datasets.push({
    label: 'My First dataset',
    data: [0, 10, 5, 2, 20, 30, 45],
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
  },);

  datasets.push({
    label: 'My second dataset',
    data: [5, 12, 6, 7, 10, 30, 45],
    backgroundColor: 'rgb(94, 120, 12)',
    borderColor: 'rgb(255, 99, 132)',
  },);

  const labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  const data = {
    labels: labels,
    datasets: datasets
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Causa de muerte'
          }
        }
      },
    };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

@endsection
