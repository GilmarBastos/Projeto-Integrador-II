<div class="card-body">
<h1 class="p-3 text-bg-success text-center">Censo etário de eleitores do município Xtópolis</h1>
    <div class="row">
        <div class="col-4">
        <?php $path= base_url('/img1.jpg'); ?>
         <img src="<?php echo $path; ?>" alt="slider1.jpg" class="img-fluid"> 
        </div>
        <div class="col">
        <h4 class="mt-1 mb-5">O objetivo da pesquisa é realizar censo da quantidades de pessoas aptas a votar ou não no muncipio</h4>
            <p class="mb-1">Para participar da pesquisa é necessário fazer <a href="/signin">login</a></p>
            <p class="mt-1 mb-1">Se não tiver login <a href="/signup">inscreva-se aqui</a></p>
            <p class="mt-1 mb-1">Após a inscrição você tera acesso pesquisa</p>
            <p class="mt-1 mb-1">Agradecemos pela sua participação <i class="bi bi-hand-thumbs-up"></i></p>
        </div>
    </div>
    <hr>
    <div class="row mt-3 mb-2">
        <div class="col-6" id="chartBar"></div>
        <div class="col-4" id="piechart"></div>
    </div>      
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    ["Facultativo",<?php echo ($countFacultativo); ?>, "#3366cc"],
    ["Obrigatório", <?php echo ($countObrigatorio); ?>, "#dc3912 "],
    ["Menor_idade", <?php echo ($countMenorIdade); ?>, "#ff9900"]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Censo etário 2023 - Pizza', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Facultativo",<?php echo ($countFacultativo); ?>, "#3366cc"],
        ["Obrigatório", <?php echo ($countObrigatorio); ?>, "#dc3912 "],
        ["Menor_idade", <?php echo ($countMenorIdade); ?>, "#ff9900"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Censo etário 2023 - Barra",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chartBar"));
      chart.draw(view, options);
  }
  </script>
