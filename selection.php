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
        flex-direction: column-reverse;
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
    <div class="selection-container">
        <button>Submit</button>


        <form action="" method="post">
            <div class="sample-page test-mechanism">
                <label for="testMechanism">Testing Mechanism:</label>
                <select id="testing-mechanism" required>
                    <option value="">Select testing mechanism</option>
                    <?php
                    require_once "./core/init.php";
                    echo $sampleName;
                    $sql = "SELECT * FROM samples WHERE sampleName = $sampleName";
                    $res = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $i++;
                        $test = explode(',', $row['sampleTests']);
                        print_r($test);

                        ?>

                        <option value="<?= $test[$i]; ?>"><?= $test[$i]; ?></option>

                        <?php
                    }
                    ?>
                </select>
            </div>
        </form>
    </div>
    
</body>

</html>