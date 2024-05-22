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
    <form action="./selection.php" method="post" id="sample-form" >
      <div class="sample-page">
        <label for="sampleName">Sample Name: </label>
        <input type="text" id="input-data" name="sample-name" required />
      </div>
      <div class="button-placer">
        <button type="submit" name="sampleCheck">Check</button>
      </div>
    </form>
      
    <script>
        document.querySelector(".sample-form").addEventListener("submit",(event)=>{
            const sample_data = document.getElementById("input-data").value;
            if(sample_data.length < 1){
                event.preventDefault();
                alert("Enter a sample data");
            }
        })

    </script>
  </body>
</html>
