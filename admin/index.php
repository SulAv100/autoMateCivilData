<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Add Sample Test</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      display: flex;
      margin: 0;
      font-family: Arial, sans-serif;
      color: #ddd;
      background-color: #2c2f33;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background-color: #23272a;
      padding: 20px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .sidebar h2 {
      color: #7289da;
      font-size: 24px;
      margin: 0;
    }

    /* Main Content */
    .main-content {
      margin-left: 270px;
      padding: 20px;
      width: calc(100% - 270px);
    }
    .main-content h2 {
      color: #7289da;
      text-align: center;
      margin-bottom: 20px;
    }

    /* Form Container */
    .form-container {
      width: 100%;
      max-width: 500px;
      padding: 20px;
      background-color: #36393f;
      border-radius: 8px;
      margin: auto;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #7289da;
    }
    .form-group input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #555;
      border-radius: 4px;
      background-color: #2c2f33;
      color: #ddd;
    }

    /* Test Groups */
    .testing-group {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;
    }
    .testing-group input[type="text"] {
      flex-grow: 1;
    }

    /* Buttons */
    .add-test-btn, .remove-test-btn, .submit-btn {
      background-color: #7289da;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.2s;
    }
    .add-test-btn, .submit-btn {
      width: 100%;
      margin-top: 10px;
    }
    .remove-test-btn {
      background-color: #dc3545;
    }
    .add-test-btn:hover, .submit-btn:hover {
      background-color: #5b6eaf;
    }
    .remove-test-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>Admin Panel</h2>
</div>

<div class="main-content">
  <h2>Add Sample and Tests</h2>
  <div class="form-container">
    <form id="sampleForm" action="../core/add_sample.php" method="POST">
      <div class="form-group">
        <label for="sampleName">Sample Name:</label>
        <input type="text" id="sampleName" name="sampleName" placeholder="e.g., Cube, Rod" required>
      </div>
      <div id="testContainer" class="form-group">
        <label>Testing Mechanisms:</label>
        <div class="testing-group">
          <input type="text" name="tests[]" placeholder="Enter test name" required>
          <button type="button" class="remove-test-btn" onclick="removeTest(this)">Remove</button>
        </div>
      </div>
      <button type="button" class="add-test-btn" onclick="addTest()">Add Another Test</button>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</div>

<script>
  function addTest() {
    const testContainer = document.getElementById("testContainer");
    const newTestGroup = document.createElement("div");
    newTestGroup.classList.add("testing-group");

    newTestGroup.innerHTML = `
      <input type="text" name="tests[]" placeholder="Enter test name" required>
      <button type="button" class="remove-test-btn" onclick="removeTest(this)">Remove</button>
    `;

    testContainer.appendChild(newTestGroup);
  }

  function removeTest(button) {
    button.parentElement.remove();
  }
</script>

</body>
</html>
