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
        <td><label for="project">Contact No</label></td>
        <td colspan="5"><input type="text" /></td>
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
        <td><input type="date" /></td>
        <td><label for="sampleNo">No. of sample Casted</label></td>
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
            <td rowspan="3"><input type="text" /></td>
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
            <td rowspan="3"><input type="date" /></td>
            <td rowspan="3"><input type="text" /></td>
            <td><input type="text" class="object height" /></td>
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
    <button onclick="window.print()" id="print-button">Print Document</button>

    <script>
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
          let sum = 0;
          const averageSumData = document.querySelectorAll(".week");
          averageSumData.forEach(function (avrsm) {
            let latData = parseInt(avrsm.textContent);
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
        document.querySelector("button").style.display = "none";
      };
    </script>
  </body>
</html>
