<?php

if(isset($_POST['testSubmit']))
{
    $testName = $_POST['testName'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="nepali-date-picker.css" rel="stylesheet" type="text/css" />
    
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      h1 {
        text-align: center;
        font-size: 20px;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }
      h4 {
        text-align: center;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }

      input {
        display: flex;
        width: 100%;
        border: 0;
        height: 100%;
        font-size: 11px;
        outline: none;
        padding-left: 10px;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        font-weight: 500;
      }
      table td {
        height: 20px;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
      }

      table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 1%;
        font-size: 14px;
      }
      th {
        border-right: 1px solid black;
      }

      tr {
        border: 1px solid black;
      }

      td {
        border-right: 1px solid black;
        border-bottom: none;
        width: 3000px;
        
      }
      .centered-text{
        text-align: center;
      }
      #noneRow {
        height: 10px;
        border-bottom: 3px solid black;
      }

      td:last-child {
        border-right: none;
      }
      .smallFont {
        font-size: 14px;
      }

      #heading-data {
        border: collapse;
      }
      .single-line {
        position: relative;
        display: inline-flex;
        align-items: center;
        width: 100%;
        height: 100%;
      }

      .densityData {
        text-align: center;
      }
      #print-button{
        height: 30px;
        justify-content: center;
        align-items: center;
        width: 140px;
        float: right;
        margin-top: 20px;
        margin-right: 20px;
        display: flex;
        border-radius: 10px;
        outline: 0;

      }

      @media print {
      /* Hide header and footer during print */
      @page {
          margin: 0;
          /* size: auto; */
      }
      
      /* Hide URL and page count */
      body {
          margin: 0;
          /* margin-top: 0.5cm; */
          margin-left: 0.25cm;
          margin-right: 0.25cm;
          padding: 0;
      }
      
      /* Hide buttons during print */
      button {
          display: none !important;
      }
      
      /* Hide file path and page numbers */
      div:last-child {
          display: none !important;
      }
      text{
        margin-left: 1cm
      }
      select {
        display: none;
      }
      /* Show the selected option as text in print view */
      .selected-value::after {
            content: attr(data-value);
            display: block;
            text-align: center;
            vertical-align: middle;
            line-height: normal; /* Adjust as needed for alignment */
      }
      /* Center-align the cell content vertically */
      .selected-value {
          text-align: center;
          vertical-align: middle;
      }
      }
    </style>


  </head>
  <body>
    <h1>Barahi Technical Solutions Pvt Ltd</h1>
    <h4>Pokhara-8</h4>
    <table>
      <tr>
        <td><label for="project">Project</label></td>
        <td colspan="5"><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="project">Contract No</label></td>
        <td colspan="5"><input type="text"  id="contract_no" name="contract_no" readonly /></td>
      </tr>
      <tr>
        <td><label for="project">Client</label></td>
        <td colspan="5"><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="project">Contractor</label></td>
        <td colspan="5"><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="project">Consultant</label></td>
        <td colspan="5"><input type="text" /></td>
      </tr>
      <tr id="noneRow">
        <td><label for="none"></label></td>
      </tr>
      <tr style="border-bottom: 1px solid black">
        <th>RFI No:</th>
        <th></th>
        <th>Lab.Ref.No</th>
        <th></th>
      </tr>
      <tr style="border-top: 2px solid black">
        <td><label for="site">Construction Site</label></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="structure">Part of Structure/Location</label></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td>
          <label for="sources" class="smallFont"
            >Sources/ Location of Fine & Coarse <br />
            Agg:
          </label>
        </td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="cementbrand">Brand of Cement</label></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="mixDesign">Mix Design No:</label></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="class">Concrete Class</label></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <th id="heading-data" colspan="4">
        <h1>Fresh Concrete Data</h1>
      </th>
      <tr>
        <td><label for="date">Date of casting</label></td>
        <!-- Input field for the Nepali Date Picker -->
        <input type="text" class="nepalidatepicker"/>
        <td><label for="sampleNo">No. of sample Casted</label></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td><label for="timeOfCasting">Time of casting</label></td>
        <td><input type="text" /></td>
        <td><label for="sampleNo">Tested Sample</label></td>
        <td><input type="text" /></td>
      </tr>
    </table>

    <?php
        if (strcmp($testName, "Cube Compression Test") == 0){
        ?>
        <table>
        <th colspan="13">
            <h2>COMPRESSIVE STRENGTH TEST OF CONCRETE CUBES METHOD IS 456</h2>
        </th>
        <tr>
            <td rowspan="2" style="text-align: center;"><label for="sn">S.N</label></td>
            <td rowspan="2" style="text-align: center;"><label for="sample">Sample Ref.No.</label></td>
            <td rowspan="2" style="text-align: center;"><label for="tDate">Testing Date</label></td>
            <td rowspan="2" style="text-align: center;"><label for="age">Age <br>(Days)</label></td>
            <td colspan="3" style="text-align: center;"><label for="dimension">CUBE DIMENSION <br>(mm)</br></label></td>
            <td rowspan="2" style="text-align: center;">
            <label for="weight">Weight <br />(gm)</label>
            </td>
            <td rowspan="2" style="text-align: center;">
            <label for="density">Density <br />(kg/m<sup>3</sup>)</label>
            </td>
            <td rowspan="2" style="text-align: center;">
            <label for="load">Machine Load <br />(KN)</label>
            </td>
            <td rowspan="2" style="text-align: center;">
            <label for="cLoad">Corrected Load <br />(KN)</label>
            </td>
            <td rowspan="2" style="align-items: center;">
            <label for="strength">STRENGTH <br />(N/mm<sup>2</sup>)</label>
            </td>
            <td rowspan="2" style="align-items: center;">
            <label for="aStrength">AVERAGE STRENGTH <br />N/mm<sup>2</sup></label>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">H</td>
            <td style="text-align: center;">W</td>
            <td style="border-right: 1px solid black; text-align: center;">L</td>
        </tr>

        <tr>
            <td>1</td>
            <td rowspan="3"><input type="text" /> </td>
            <td rowspan="3"><input type="date"/></td>

            <!--  MAKE THIS DROPDOWN FOR 7,14 AND 28 DAYS OPTION -->
            <!-- <td rowspan="3"><input type="text" /></td> -->
            <td rowspan="3" class="selected-value" data-value="7">
              <select class='auto-calculate' onchange="this.parentNode.setAttribute('data-value', this.value)">
                <option value="7">7</option>
                <option value="14">14</option>  
                <option value="28">28</option>
              </select>
            </td>

            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td class="finalStrength week"></td>
            <td rowspan="3" class="averageStrength"></td>
        </tr>
        <tr>
            <td>2</td>
            <!-- <td></td>
            <td></td>
            <td></td> -->
            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td
            style="border-right: 1px solid black"
            class="finalStrength week"
            ></td>
            <!-- <td><input type="text">la</td> -->
        </tr>
        <tr>
            <td>3</td>
            <!-- <td></td>
            <td></td>
            <td></td> -->
            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td
            style="border-right: 1px solid black"
            class="finalStrength week"
            ></td>
        </tr>
        <tr>
            <td>4</td>
            <td rowspan="3"><input type="text" /></td>
            <td rowspan="3"><input type="date" class='fill-auto' /></td>
            <td rowspan="3" class="selected-value" data-value="7">
              <select class='auto-calculate'  onchange="this.parentNode.setAttribute('data-value', this.value)">
                <option value="7">7</option>
                <option value="14">14</option>  
                <option value="28">28</option>
              </select>
            </td>            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td class="finalStrength month"></td>
            <td rowspan="3" class="averageStrength monthly"></td>
        </tr>
        <tr>
            <td>5</td>
            
            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td
            style="border-right: 1px solid black"
            class="finalStrength month"
            ></td>
            <!-- <td><input type="text"></td> -->
        </tr>
        <tr>
            <td>6</td>
            <!-- <td><input type="text"></td>
            <td></td>
            <td></td> -->
            <td><input type="text" class="object height" /></td>
            <td><input type="text" class="object width" /></td>
            <td><input type="text" class="object length" /></td>
            <td><input type="text" class="weight" /></td>

            <td class="densityData"></td>
            <td><input type="text" class="machineWeight" /></td>
            <td class="correctedLoad"></td>
            <td
            style="border-right: 1px solid black"
            class="finalStrength month"
            ></td>
            <!-- <td><input type="text"></td> -->
        </tr>
        </table>
        <?php
        }
    ?>

    <span><u>Remarks: Result shows tested sample only.</u></span>
    <table>
      <tr>
        <th colspan="2">Barahi Technical Solutions Pvt Ltd</th>
        <th colspan="2">Witness</th>
      </tr>
      <tr>
        <td>Tested By</td>
        <td>Verified By</td>
        <td>Contractor/ Samitti</td>
        <td>Consultant</td>
      </tr>
      <tr>
        <td>Sr. Lab Technician</td>
        <td>Engineer</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="last-row">
        <td>
          <div class="single-line">
            <label for="name">Name: </label><input type="text" />
          </div>
        </td>
        <td>
          <div class="single-line">
            <label for="name">Name: </label><input type="text" />
          </div>
        </td>
        <td>
          <div class="single-line">
            <label for="name">Name: </label><input type="text" />
          </div>
        </td>
        <td>
          <div class="single-line">
            <label for="name">Name: </label><input type="text" />
          </div>
        </td>
      </tr>
      <tr style="height: 60px">
        <td>Sign:</td>
        <td>Sign:</td>
        <td>Sign:</td>
        <td>Sign:</td>
      </tr>
    </table>

    <div class="hideOnPrint">
      <button onclick="window.print()" id="print-button">Print Document</button>
      <p>Print count: <span id="print-count">0</span></p>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Nepali Date Picker JS -->

    <script src="nepali-date-picker.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Nepali Date Picker
            $('.nepalidatepicker').nepaliDatePicker();
        });

      let printCount = 0;
      const testName = "<?php echo htmlspecialchars($testName); ?>"; // Pass PHP variable to JavaScript


      function incrementPrintCount() {
          printCount++;
          document.getElementById("print-count").innerText = printCount;

          fetch('./core/count_print.php', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: `testName=${encodeURIComponent(testName)}&printCount=${encodeURIComponent(printCount)}`
            })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  console.log('Print count updated successfully!');
              } else {
                  console.log('Failed to update print count.');
              }
          })
          .catch(error => console.error('Error:', error));
      }

      if (window.matchMedia) {
          const mediaQueryList = window.matchMedia('print');
          mediaQueryList.addEventListener('change', function(e) {
              if (!e.matches) {
                incrementPrintCount();
              }
          });
      } 
      else {
          window.addEventListener('afterprint', incrementPrintCount);
      }

      function generateDateBasedContractNumber() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const day = String(now.getDate()).padStart(2, '0');
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();
        
        // Add simple offsets to obscure the values
        const offsetYear = year - 2000; // Offset year by 2000 to fit in two digits (for years 2000-2099)
        const offsetMonth = (month + 13) % 12; // Offset and wrap month
        const offsetDay = (day + 20) % 31; // Offset and wrap day
        const offsetHours = (hours + 15) % 24; // Offset and wrap hours
        const offsetMinutes = (minutes + 30) % 60; // Offset and wrap minutes
        const offsetSeconds = (seconds + 45) % 60; // Offset and wrap seconds
        
        // Create an encoded string (using padStart for uniform length)
        const contractNumber = `${String(offsetYear).padStart(2, '0')}${String(offsetMonth).padStart(2, '0')}${String(offsetDay).padStart(2, '0')}${String(offsetHours).padStart(2, '0')}${String(offsetMinutes).padStart(2, '0')}${String(offsetSeconds).padStart(2, '0')}`;
    
        document.getElementById("contract_no").value = contractNumber;

      }

      window.onload = generateDateBasedContractNumber;


      const dimensions = document.querySelectorAll(".object");
      dimensions.forEach(function (dimension) {
        dimension.addEventListener("input", function () {
          let density = 0;

          const newData = dimension
            .closest("tr")
            .querySelector(".height").value;
          dimension.closest("tr").querySelector(".length").value = newData;
          dimension.closest("tr").querySelector(".width").value = newData;

          const densityToChange = dimension
            .closest("tr")
            .querySelector(".densityData");
          const wData = parseInt(
            dimension.closest("tr").querySelector(".weight").value
          );
          const height = parseInt(
            dimension.closest("tr").querySelector(".height").value
          );

          // Check if height is not zero to avoid division by zero
          if (height !== 0) {
            density = (wData * 1000000) / (height * height * height);
            if (isNaN(density)) {
              densityToChange.textContent = "0";
            } else {
              densityToChange.textContent = density.toFixed(0);
            }
          } else {
            densityToChange.textContent = "0";
          }
        });
      });

      const weightData = document.querySelectorAll(".weight");

      weightData.forEach(function (item) {
        let density = 0;
        item.addEventListener("input", function (event) {
          const densityToChange = item
            .closest("tr")
            .querySelector(".densityData");
          const wData = parseInt(item.value);
          const height = parseInt(
            item.closest("tr").querySelector(".height").value
          );
          density = (wData * 1000000) / (height * height * height);
          densityToChange.textContent = density.toFixed(0);
        });
      });

      const machinePower = document.querySelectorAll(".machineWeight");

      machinePower.forEach(function (eachMachPower) {
        eachMachPower.addEventListener("input", function (event) {
          const latest = event.target.value;
          const correctedData = eachMachPower
            .closest("tr")
            .querySelector(".correctedLoad");
          const finalData = 0.996 * latest;
          const finalize = parseFloat(finalData.toFixed(1));
          correctedData.textContent = finalize;
          const finalStr = eachMachPower
            .closest("tr")
            .querySelector(".finalStrength");
          let finalHeight = parseFloat(
            eachMachPower.closest("tr").querySelector(".height").value
          );
          const strengthFinal = (finalize * 1000) / (finalHeight * finalHeight);

          finalStr.textContent = strengthFinal.toFixed(1);
        });
      });

      const newFunction = document.querySelectorAll(".averageStrength");
      newFunction.forEach(function (data) {
        data.addEventListener("click", function (event) {
          let sum = 0.0;
          const averageSumData = document.querySelectorAll(".week");
          averageSumData.forEach(function (avrsm) {
            let latData = parseFloat(avrsm.textContent);
            sum += latData;
          });
          let newAvr = sum / 3;
          document.querySelector(".averageStrength").textContent = parseFloat(
            newAvr.toFixed(2)
          );
        });
      });

      const anotherFunction = document.querySelectorAll(".monthly");
      anotherFunction.forEach(function (data) {
        data.addEventListener("click", function (event) {
          let sum = 0;
          const averageSumData = document.querySelectorAll(".month");
          averageSumData.forEach(function (avrsm) {
            let latData = parseInt(avrsm.textContent);
            sum += latData;
          });
          let newAvr = sum / 3;
          document.querySelector(".monthly").textContent = parseFloat(
            newAvr.toFixed(2)
          );
        });
      });

      window.onbeforeprint = function () {
        if (typeof window.print === 'function') {
        window.print({
            silent: true,
            printBackground: true,
            headerFooter: false
        });
        document.querySelector(".hideOnPrint").style.display = "none";
        }
      };
      window.onafterprint = function () {
        document.querySelector(".hideOnPrint").style.display = "block";
      };


      document.querySelector('.auto-date').addEventListener("change",function(event){
        console.log(event.target.value);
        var selectedData = event.target.value;
      })

      const handleFetch = async (event) => {
        console.log("Chalenxa hai ta");
        var selectedValue = event.target.value;
        var currentData = document.querySelector(".auto-date").value;

        try {
          console.log(JSON.stringify({ initialDate: currentData, selectedValue: selectedValue }));

          const response = await fetch(`./core/date_converter.php`, { 
            method: 'POST',
            headers: { 
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ initialDate: currentData, selectedValue: selectedValue })
          });

          const data = await response.json();
          if (!response.ok) {
            console.log(response.statusText);
            return;
          }
          console.log(data);
        } catch (error) {
          console.error(error);
        }

        console.log(currentData);
      };


        document.querySelector(".auto-calculate").addEventListener('change', handleFetch);

    </script>
  </body>
</html>
