<div class="row">
    <div class="col-8 ">
        <div class="border p-2" style="width:100%; background-color: white;">
            <canvas id="canvas" style="display: block; height: 563px; width: 1127px;" width="1408" height="703" class="chartjs-render-monitor"></canvas>
        </div>
    </div>
    <div class="col-4">
        <div class="border" style="width: 100%; height:100%;background-color: white; ">
            <canvas id="chartjs-4" class="chartjs mt-5" width="962px" height="581px"
            style="display: block; height: 685px; width: 770px;"></canvas>
        </div>
    </div>
</div>




<script>
    var DAYS = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'];
    var config = {
        type: 'line',
        data: {
            labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
            datasets: [ {
                label: 'Số lượng bán',
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [
                    0,
                    10,
                    18,
                    80,
                    77,
                    22,
                    60
                ],
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }
            // scales: {
            // 	xAxes: [{
            // 		display: true,
            // 		scaleLabel: {
            // 			display: true,
            // 			labelString: 'Ngày'
            // 		}
            // 	}],
            // 	yAxes: [{
            // 		display: true,
            // 		scaleLabel: {
            // 			display: true,
            // 			labelString: 'Số lượng'
            // 		}
            // 	}]
            // }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx, config);
    };

</script>





<script>new Chart(document.getElementById("chartjs-4"), 
    { 
        "type": "doughnut", 
        "data": { "labels": ["Món ăn", "Đồ uống", "Khác"], 
            "datasets": [{ "label": "My First Dataset", "data": [300, 50, 100], 
            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)" , "rgb(255, 205, 86)"] }] 
            } 
    });
</script>