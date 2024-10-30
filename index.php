<?php
if (isset($_POST['sampleCheck'])) {
  $sampleName = $_POST['sample-name'];
  // echo $sampleName;
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

    /* Navbar styling */
    .navbar {
      width: 100%;
      background-color: #333;
      padding: 10px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: fixed;
      top: 0;
      left: 0;
      color: white;
      font-family: Arial, sans-serif;
    }

    .navbar .navbar-title {
      margin-left: 20px;
      font-size: 20px;
      font-weight: bold;
    }

    .navbar .navbar-link {
      margin-right: 20px;
      color: white;
      text-decoration: none;
      font-size: 16px;
      padding: 8px 16px;
      background-color: #007bff;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .navbar .navbar-link:hover {
      background-color: #0056b3;
    }

    /* Centered form styling */
    body {
      font-family: "Times New Roman", Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f3f3f3;
    }

    form {
      height: max-content;
      width: max-content;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h1 {
      text-align: center;
      margin-top: 2%;
      letter-spacing: 0.9px;
      font-weight: 600;
    }

    .sample-page input[type="text"] {
      display: flex;
      margin-top: 20px;
      width: 500px;
      height: 40px;
      border-radius: 20px;
      outline: none;
      flex-grow: 1;
      padding-left: 20px;
      font-size: 18px;
    }

    button {
      width: 120px;
      height: 35px;
      border-radius: 10px;
      outline: 0;
      border: 0;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <!-- <div class="navbar"> -->
    <!-- <div class="navbar-title">Sample Management</div> -->
    <!-- <a href="/autofiller/admin/" class="navbar-link">Add Sample</a> -->
  <!-- </div> -->

  <!-- Main Content -->
  <form action="./selection.php" method="post" id="sample-form">
    <h1>Sample Selection</h1>
    <div class="sample-page">
      <label for="sampleName">Sample Name: </label>
      <input type="text" id="input-data" name="sample-name" required />
    </div>
    <button type="submit" name="sampleCheck">Check</button>
  </form>

  <script>
    document.querySelector("#sample-form").addEventListener("submit", (event) => {
      const sampleData = document.getElementById("input-data").value;
      if (sampleData.length < 1) {
        event.preventDefault();
        alert("Enter a sample name");
      }
    });
  </script>
</body>
</html>
