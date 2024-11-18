<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: poppins;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to bottom, #2c3e50, #ecf0f1);
            min-height: 100dvh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        main {
            height: 100dvh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        #formContainer {
            margin: auto;
            background-color: #fff;
            padding: 2em 3em;
            border-radius: 10px;
            width: 450px;
            height: 500px;

        }

        form {
            position: relative;
        }

        .btn-container {
            position: absolute;
            bottom: 0;
            width: 450px;
            padding: 2em 3em;
            display: flex;
            justify-content: space-between;
            height: 100px;


        }

        .part-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            position: absolute;
            left: 100%;
            transition: .2s;
        }

        .form-group {

            display: flex;
            flex-direction: column;
            gap: 5px;
            font-size: 1.3rem;

            label {
                font-size: .9rem;
            }

            input,
            select {
                padding: .4em;
                border-radius: 5px;
                border: 1px solid gray;
                min-width: 200px;
            }
        }

        #movingContainer {
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        #formPart1 {
            left: 0;
        }





        /* #formPart2 {
            display: none;
        } */

        button {
            cursor: pointer;
            background-color: rgb(0, 128, 160);
            width: fit-content;
            background-color: #24A0ED;
            color: #fff;
            border: none;
            padding: .3em 1em;
            font-size: 1.1rem;
            border-radius: 5px;
        }

        #submitBtn {
            display: none;
        }



        /* #nextBtn {
            display: block;
            margin-left: auto;
        } */
    </style>
</head>

<body>
    <!-- project name,client,contractor,cosultant -->
    <!-- construction site , part of structure location, sources /location of find and coarse agg, brand of cement ,mix design no , concrete class  -->


    <main>
        <?php
            require_once "./core/init.php";
            $sampleName = htmlspecialchars($_POST['sample-name']);
            $sql = "SELECT * FROM samples WHERE sampleName = '$sampleName'";
            $res = mysqli_query($conn, $sql);
            
            if($row = mysqli_fetch_assoc($res)) {
        ?>
        <form action="./autoFiller.php" method="post">
            <!-- Part 1 -->
            <section id="formContainer">

                <h1>Enter the following data</h1>
                <section id="movingContainer">
                    <section id="formPart1" class="part-container">
                        <div class="form-group">
                            <label for="projectName">Project Name:</label>
                            <input type="text" id="projectName" name="projectName">
                        </div>

                        <div class="form-group">
                            <label for="clientName">Client Name:</label>
                            <input type="text" id="clientName" name="clientName">
                        </div>

                        <div class="form-group">
                            <label for="contractorName">Contractor Name:</label>
                            <input type="text" id="contractorName" name="contractorName">
                        </div>

                        <div class="form-group">
                            <label for="consultantName">Consultant Name:</label>
                            <input type="text" id="consultantName" name="consultantName">
                        </div>

                    </section>

                    <!-- Part 2 -->
                    <section id="formPart2" class="part-container">
                        <div class="form-group">
                            <label for="constructionSite">Construction Site:</label>
                            <input type="text" id="constructionSite" name="constructionSite">
                        </div>

                        <div class="form-group">
                            <label for="partOfStructure">Part of Structure/Location:</label>
                            <input type="text" id="partOfStructure" name="partOfStructure">
                        </div>

                        <div class="form-group">
                            <label for="sourceFineAgg">Source/Location of Fine Aggregate:</label>
                            <input type="text" id="sourceFineAgg" name="sourceFineAgg">
                        </div>
                        <div class="form-group">
                            <label for="testName">Testing Mechanism</label>
                            <select id="testing-mechanism" name="testName" required>
                                <option value="">Select testing mechanism</option>
                                
                                <?php
                                    $test = explode(',', $row['sampleTests']);
                                    $i = count($test);
                                    while($i > 0) { 
                                        $i--;
                                ?>
                                <option value="<?= $test[$i]; ?>"><?= $test[$i]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </section>
                    <section id="formPart3" class="part-container">
                        <div class="form-group">
                            <label for="cementBrand">Brand of Cement:</label>
                            <input type="text" id="cementBrand" name="cementBrand">
                        </div>

                        <div class="form-group">
                            <label for="mixDesignNo">Mix Design No:</label>
                            <input type="text" id="mixDesignNo" name="mixDesignNo">
                        </div>

                        <div class="form-group">
                            <label for="concreteClass">Concrete Class:</label>
                            <input type="text" id="concreteClass" name="concreteClass">
                        </div>
                        <div class="form-group">
                            <label for="cementType">Cement Type:</label>
                            <select id="cementType" name="cementType">
                                <option value="cube">Cube</option>
                                <option value="mortar ">Mortar</option>

                            </select>
                        </div>
                    </section>
                </section>


            </section>

            <div class="btn-container">
                <button id="backBtn">Back</button>
                <button id="nextBtn">Next</button>
                <button type="submit" id="submitBtn" name="testSubmit">Submit</button>
            </div>

        </form>
        <?php
        } else {
    ?>
        <div class="error-container">
            <h1>404</h1>
            <p>No such sample exists</p>
            <a href="/autoFiller/" class="back-link">Go Back to Home</a>
        </div>
    <?php
        }
    ?>
    </main>
    <script>
        var counter = 1;
        const nextBtn = document.getElementById("nextBtn");
        const backBtn = document.getElementById("backBtn");
        const submitBtn = document.getElementById("submitBtn");
        const form1 = document.getElementById("formPart1");
        const form2 = document.getElementById("formPart2");
        const form3 = document.getElementById("formPart3");

        nextBtn.addEventListener("click", (e) => {
            e.preventDefault()
            if (counter === 1) {
                form1.style.left = "-100%"
                form2.style.left = "0"
            }
            else if (counter === 2) {
                form1.style.left = "-100%"
                form2.style.left = "-100%"
                form3.style.left = "0"
                submitBtn.style.display = "block"
                nextBtn.style.display = "none"

            }

            counter++;
            console.log(counter)
        });
        backBtn.addEventListener("click", (e) => {
            e.preventDefault()
            if (counter === 3) {
                form3.style.left = "100%"
                form2.style.left = "0"
                submitBtn.style.display = "none"
                nextBtn.style.display = "block"
            }
            else if (counter === 2) {
                form2.style.left = "100%"
                form1.style.left = "0"
            }

            counter--;
            console.log(counter)
        });




    </script>


</body>

</html>