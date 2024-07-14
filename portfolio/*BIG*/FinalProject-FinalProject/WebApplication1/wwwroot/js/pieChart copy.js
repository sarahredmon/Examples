/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_google_pie_chart*/

// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Percentage'],
  ['Completed', 90],
  ['Registered', 9],
  ['Planned', 1]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':300, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}