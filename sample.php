<?php

if (isset($_POST['sampleCheck']))
{
  $sampleName = $_POST['sample-name'];
  echo $sampleName;
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
        margin-top: 2%;
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 0.9px;
        font-weight: 600;
      }
      form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: max-content;
        width: max-content;
      }
      
      .sample-page input[type="text"]{
        display: flex;
        margin-top: 20px;
        width: 500px;
        height: 40px;
        border-radius: 20px;
        outline: none;
        flex-grow: 1;
        padding-left: 20px ;
        font-size: 18px;
      }
      button{
        width: 100px;
        height: 35px;
        border-radius: 10px;
        outline: 0;
        border: 0;
        cursor: pointer;
        
    }
    .test-mechanism{
        width: 100%;
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .test-mechanism select{
        height: 30px;
        outline: none;
        border-radius: 9px;
    }
    .button-placer{
        width: 100%;
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
    .selection-container{
      position: absolute;
      display: none;
      bottom: 0;
    }
    </style>
  </head>
  <body>
    <h1>Sample selection</h1>
    <form action="#" method="post" id="sample-form" >
      <div class="sample-page">
        <label for="sampleName">Sample Name: </label>
        <input type="text" id="input-data" name="sample-name" required />
      </div>
      <div class="button-placer">
        <button onclick="handleSubmission()" type="submit" name="sampleCheck">Check</button>
      </div>
    </form>
    <div class="selection-container">

    <form action="" method="post">
      <div class="sample-page test-mechanism">
        <label for="testMechanism">Testing Mechanism:</label>
        <select id="testing-mechanism" required>
          <option value="">Select testing mechanism</option>
          <?php
            require_once "./core/init.php";
            echo $sampleName;
            $sql = "SELECT * FROM samples WHERE sampleName = $sampleName";
            $res = mysqli_query($conn,$sql);
            $i = 0;
            while ($row = mysqli_fetch_assoc($res))
            {
              $i++;
              $test = explode(',',$row['sampleTests']);
              print_r($test);

          ?>

              <option value="<?=$test[$i];?>"><?=$test[$i];?></option>

          <?php
            }
          ?>

          <!-- <option value="Chemical Composition Analysis">Chemical Composition Analysis</option>
          <option value="Heat of Hydration Test">Heat of Hydration Test</option>
          <option value="Specific Gravity Test">Specific Gravity Test</option>
          <option value="Soundness Test">Soundness Test</option>
          <option value="Setting Time Test">Setting Time Test</option> -->


        </select>
      </div>
      <div class="button-placer">
        <button type="submit">Submit</button>
      </div>
    </form>
      </div>
      
    <script>
        document.querySelector(".sample-form").addEventListener("submit",(event)=>{
            const sample_data = document.getElementById("input-data").value;
            if(sample_data.length < 1){
                event.preventDefault();
                alert("Enter a sample data");
            }
        })

        function handleSubmission(){
          const dropDown = document.querySelector(".selection-container");
          const data =document.getElementById("input-data");


          if(data.value <1){
            dropDown.style.display = "block";
            event.preventDefault();
            alert("Hello");
          }

        }



    </script>
  </body>
</html>
