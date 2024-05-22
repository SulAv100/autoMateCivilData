<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    *{
        margin: 0;
        box-sizing: border-box;
        padding: 0;

    }
    .selection-container{
        position: absolute;
        display: flex;
        flex-direction: column;
        gap: 50px;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        align-items: center;
    }
    label{
        font-size: 18px;

    }
    select{
        width: 300px;
        height: 50px;
        border-radius: 10px;
        border: 2px solid black;
        margin-left: 100px;
    }
    button{
        height: 50px;
        width: 50%;
        border: 1px solid black;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
    }
        
    </style>
</head>

<body>
    <?php
        require_once "./core/init.php";
        $sampleName = htmlspecialchars($_POST['sample-name']);
        $sql = "SELECT * FROM samples WHERE sampleName = '$sampleName'";
        $res = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($res)) {
        ?>
            <div class="selection-container">
            

            <form action="autoFiller.php" method="post">
                <div class="sample-page test-mechanism">
                    <label for="testMechanism">Testing Mechanism:</label>
                    <select id="testing-mechanism" name="testName" required>
                    <option value="">Select testing mechanism</option>
                    <?php
                        $test = explode(',', $row['sampleTests']);
                        $i = count($test);
                        while($i > 0)
                        { 
                            $i--;
                        ?>
                        <option value="<?= $test[$i]; ?>" ><?= $test[$i]; ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="testSubmit">Submit</button>
            </form>
    
            </div>
            <?php
        }
        else
        {
        ?>
        <div>no such sample exist</div>
        <?php
        }
    ?>
    
</body>

</html>