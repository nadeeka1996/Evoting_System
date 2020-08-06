<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 

    $.ajax({
		
    url: "http://localhost/project/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var party = [];
      var score = [];

      for(var i in data) {
        party.push("Party " + data[i].ID);
        score.push(data[i].math);
      }

      var chartdata = {
        labels: party,
        datasets : [
          {
            label: 'Vote Score',
            backgroundColor:[ 'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      $("#jqueryselect").change(function(){
 var color = $('#jqueryselect').val(); 

      var barGraph = new Chart(ctx, {
        type: 'color',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

});
</script>

<style>
.jquerysel {
  background: #2C5656;
  height: 75px;
  width:250px;
  border-radius: 15px;
  padding:20px;
  font-size:22px;
  color:#fff;  
}
</style>
 
</head>
 
<body>
<div class="jquerysel">
<label>Select A Color: </label><select id="jqueryselect">
    <option value="bar">Maroon</option>
    <option value="pie">Green</option>
    <option value="YEL">Yellow</option>
    <option value="BLU">Blue</option>
    <option value="RED">Red</option>

</select>
 
</div> 

</body>
 
</html>