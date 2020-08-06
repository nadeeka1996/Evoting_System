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

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});