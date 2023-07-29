document.addEventListener('DOMContentLoaded', function () {
  var ctx = document.getElementById('pieChart').getContext('2d');
  var data = {
    labels: ['Penjas', 'PGSD'], // Label data
    datasets: [{
      data: [30, 50], // Nilai data
      backgroundColor: ['#44c7ad', '#36ffd7'] // Warna masing-masing bagian grafik
    }]
  };
  var pieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsiver: true,
      maintainAspectRatio: false,
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var ctx = document.getElementById('barChart').getContext('2d');
  var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // Label bulan
    datasets: [{
      label: 'Penjas',
      data: [50, 60, 70, 80, 90, 85, 75, 70, 65, 60, 55, 50], // Nilai data A untuk setiap bulan
      backgroundColor: 'rgba(68, 199, 173)', // Warna batang data A
      borderColor: 'rgba(39, 163, 139)', // Warna garis batang data A
      borderWidth: 1 // Lebar garis batang data A
    }, {
      label: 'PGSD',
      data: [40, 50, 55, 60, 65, 70, 75, 80, 85, 80, 75, 70], // Nilai data B untuk setiap bulan
      backgroundColor: 'rgba(54, 255, 215)', // Warna batang data B
      borderColor: 'rgba(9, 214, 173)', // Warna garis batang data B
      borderWidth: 1 // Lebar garis batang data B
    }]
  };
  var barChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true // Mulai sumbu y dari nol
        }
      }
    }
  });
});