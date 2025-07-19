<?php
include "header.php";
?>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spin Wheel App</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet --
    <link rel="stylesheet" href="style.css" />----------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      
    }
    body {
      height: 100vh;
      /*background: linear-gradient(135deg, #c3a3f1, #6414e9);/* #c3a3f1 ,  */
      background-color: #737CA1;
     
      
    }
    .wrapper {
      width: 90%;
      max-width: 34.37em;
      max-height: 90vh;
      background-color:  #737CA1  ;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 60%;
      left: 50%;
      padding: 3em;
      border-radius: 1em;
      box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
    }
    .container {
      position: relative;
      width: 100%;
      height: 100%;
    }
    #wheel {
      max-height: inherit;
      width: inherit;
      top: 0;
      padding: 0;
    }
    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }
    #spin-btn {
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      height: 26%;
      width: 26%;
      border-radius: 50%;
      cursor: pointer;
      border: 0;
      background: radial-gradient(red 50%, black 85%); */ #fdcf3b ,#d88a40 */
      color: #c66e16;
      text-transform: uppercase;
      font-size: 1.8em;
      letter-spacing: 0.1em;
      font-weight: 600;
    }
    img {
      position: absolute;
      width: 4em;
      top: 45%;
      right: -8%;
    }
    #final-value {
      font-size: 1.5em;
      text-align: center;
      margin-top: 1.5em;
      color: #202020;
      font-weight: 500;
    }
    @media screen and (max-width: 768px) {
      .wrapper {
        font-size: 12px;
      }
      img {
        right: -5%;
      }
    }</style>
  </head>
  
  <body>
    <div class="wrapper">
      <div class="container">
        <canvas id="wheel"></canvas>
        <button id="spin-btn">Spin</button>
        <img src="https://cutewallpaper.org/24/yellow-arrow-png/155564497.jpg" alt="spinner arrow" />
      </div>
      <div id="final-value">
        <p>Click On The Spin Button To Start</p>
      </div>
    </div>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- Chart JS Plugin for displaying text over chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"></script>
    <!-- Script -->
    <script >const wheel = document.getElementById("wheel");
      const spinBtn = document.getElementById("spin-btn");
      const finalValue = document.getElementById("final-value");
      //Object that stores values of minimum and maximum angle for a value
      const rotationValues = [
        { minDegree: 0, maxDegree: 30, value: 2 },
        { minDegree: 31, maxDegree: 90, value: 1 },
        { minDegree: 91, maxDegree: 150, value: 6 },
        { minDegree: 151, maxDegree: 210, value: 5 },
        { minDegree: 211, maxDegree: 270, value: 4 },
        { minDegree: 271, maxDegree: 330, value: 3 },
        { minDegree: 331, maxDegree: 360, value: 2 },
      ];
      //Size of each piece
      const data = [16, 16, 16, 16, 16, 16];
      //background color for each piece
      var pieColors = [
        "#8b35bc",
        "#b163da",
        "#8b35bc",
        "#b163da",
        "#8b35bc",
        "#b163da",
      ];
      //Create chart
      let myChart = new Chart(wheel, {
        //Plugin for displaying text on pie chart
        plugins: [ChartDataLabels],
        //Chart Type Pie
        type: "pie",
        data: {
          //Labels(values which are to be displayed on chart)
          labels: [1, 2, 3, 4, 5, 6],          //only till 6
          //Settings for dataset/pie
          datasets: [
            {
              backgroundColor: pieColors,
              data: data,
            },
          ],
        },
        options: {
          //Responsive chart
          responsive: true,
          animation: { duration: 0 },
          plugins: {
            //hide tooltip and legend
            tooltip: false,
            legend: {
              display: false,
            },
            //display labels inside pie chart
            datalabels: {
              color: "#ffffff",
              formatter: (_, context) => context.chart.data.labels[context.dataIndex],
              font: { size: 24 },
            },
          },
        },
      });
      //display value based on the randomAngle
      const valueGenerator = (angleValue) => {
        for (let i of rotationValues) {
          //if the angleValue is between min and max then display it
          if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
            finalValue.innerHTML = `<p>Value: ${i.value}</p>`;
          
            spinBtn.disabled = false;
            //alert(i.value);
           window.location='video.php?id='+i.value;
            

            break;
          }
        }
      };

      //Spinner count
      let count = 0;
      //100 rotations for animation and last rotation for result
      let resultValue = 101;
      //Start spinning
      spinBtn.addEventListener("click", () => {
        spinBtn.disabled = true;
        //Empty final value
        finalValue.innerHTML = `<p>Good Luck!</p>`;
        //Generate random degrees to stop at
        let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
        //Interval for rotation animation
        let rotationInterval = window.setInterval(() => {
          //Set rotation for piechart
          /*
          Initially to make the piechart rotate faster we set resultValue to 101 so it rotates 101 degrees at a time and this reduces by 1 with every count. Eventually on last rotation we rotate by 1 degree at a time.
          */
          myChart.options.rotation = myChart.options.rotation + resultValue;
          //Update chart with new value;
          myChart.update();
          //If rotation>360 reset it back to 0
          if (myChart.options.rotation >= 360) {
            count += 1;
            resultValue -= 5;
            myChart.options.rotation = 0;
          } else if (count > 15 && myChart.options.rotation == randomDegree) {
            valueGenerator(randomDegree);
            clearInterval(rotationInterval);
            count = 0;
            resultValue = 101;
          }
        }, 10);
      });
      
      </script>
  </body>
</html>
<?php
//include "footer.php"
?>