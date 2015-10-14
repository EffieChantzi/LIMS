<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/testFormStyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <style>
        .error {color: #FF9933;
                font: Arial, Helvetica, sans-serif;
                font-size: 14px;
        }

        body{
            background: #FFB46A;
        }

        input[type="submit"]{width: 35%;
                             height: 35px;
                             border: none;
                             border-radius: 4px;
                             margin: 0 0 15px 0;
                             font-size: 14px;
                             color: #fff;
                             font-weight: bold;
                             text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
                             overflow: hidden;
                             outline: none;
                             background-image: -moz-linear-gradient(#97c16b, #8ab959);
                             background-image: -webkit-linear-gradient(#97c16b, #8ab959);
                             background-image: linear-gradient(#97c16b, #8ab959);
                             border-bottom: 1px solid #648c3a;
                             cursor: pointer;
                             color: #fff;
        }

        input[type="submit"]:hover {
            background-image: -moz-linear-gradient(#8ab959, #7eaf4a);
            background-image: -webkit-linear-gradient(#8ab959, #7eaf4a);
            background-image: linear-gradient(#8ab959, #7eaf4a);
        }

        sup {
            vertical-align: top;
            position: relative; 
            font-size: 12px;
            top: -0.5em;
        }
    </style>


    <?php include 'validateTestForm.php'; ?>

    <body class = "page1">
        <div class = "content">
            <div id="wrapper">
                <form action =  method="post">
                    <div class="col-3">
                        <label>
                            Age
                            <input type = "number" name = "age" value = "<?php echo htmlspecialchars($age); ?>" placeholder = "What is your age?" min = "1" max = "100"><!--required-->
                            <span class="error"> <?php echo $ageErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            BMI (kg/m<sup>2</sup>)
                            <input type = "number" name = "bmi" step = "any" value = "<?php echo htmlspecialchars($bmi); ?>" placeholder = "What is your body mass index?" min = "10" max = "50">
                            <span class="error"> <?php echo $bmiErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Diabetes
                            <select name = "diabetes" value = "<?php echo htmlspecialchars($diabetes); ?>">
                                <option value = "">Select</option>
                                <option value = "Yes">Yes</option>
                                <option value = "No">No</option>
                            </select>
                            <span class="error"> <?php echo $diabetesErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Family History
                            <select name = "familyHistory" value = "<?php echo htmlspecialchars($familyHistory); ?>">
                                <option value = "">Select</option>
                                <option value = "Yes">Yes</option>
                                <option value = "No">No</option>
                            </select>
                            <span class="error"> <?php echo $historyErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Ever had CRC screening?
                            <select name="screening" value = "<?php echo htmlspecialchars($screening); ?>">
                                <option value = "">Select</option>
                                <option value = "Yes">Yes</option>
                                <option value = "No">No</option>
                            </select>
                            <span class="error"> <?php echo $screeningErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Aspirin Use?
                            <select id="dropdown" name="aspirin" value = "<?php echo htmlspecialchars($aspirin); ?>">
                                <option value = "">Select</option>
                                <option value = "Yes">Yes</option>
                                <option value = "No">No</option>
                            </select>
                            <span class="error"> <?php echo $aspErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Smoker?
                            <select id="dropdown" name="smoking" value = "<?php echo htmlspecialchars($smoking); ?>">
                                <option value = "">Select</option>
                                <option value = "No">No</option>
                                <option value = "Former">Former</option>
                                <option value = "Current">Current</option>
                            </select>
                            <span class="error"> <?php echo $smokeErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Alcoholic Drinks (# per day)
                            <input type = "number" name = "drinks" value = "<?php echo htmlspecialchars($drinks); ?>" min = "0" max = "12">
                            <span class="error"> <?php echo $drinkErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Vigorous Activity (hours/week)
                            <input type = "number" name = "activity" step = "any" value = "<?php echo htmlspecialchars($activity); ?>" min = "0" max = "20">
                            <span class="error"> <?php echo $activityErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Red Meat (times/week)
                            <input  type = "number" name = "redmeat" value = "<?php echo htmlspecialchars($redmeat); ?>" min = "0" max = "14">
                            <span class="error"> <?php echo $redmeatErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Processed Meat (times/week)
                            <input type = "number" name = "procmeat" value = "<?php echo htmlspecialchars($procmeat); ?>" min = "0" max = "14">
                            <span class="error"> <?php echo $procmeatErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Cereal Intake (times/week)
                            <input type = "number" name = "cereal" value = "<?php echo htmlspecialchars($cereal); ?>" min = "0" max = "14">
                            <span class="error"> <?php echo $cerealErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Fruits (serves/day)  
                            <input type = "number" name = "fruits" value = "<?php echo htmlspecialchars($fruits); ?>" min = "0" max = "8" placeholder = "1 serve = 1 medium/2 small fruits">
                            <span class="error"> <?php echo $fruitsErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Vegetables (serves/day)
                            <input type = "number" name = "vegetables" value = "<?php echo htmlspecialchars($vegetables); ?>" min = "0" max = "8" placeholder = "1 serve = 1/2 cup">
                            <span class="error"> <?php echo $vegieErr; ?></span>
                        </label>
                    </div>
                    <div class="col-3">
                        <label>
                            Wholemeal Bread (serves/week)
                            <input type = "number" name = "wbread" value = "<?php echo htmlspecialchars($wbread); ?>" min = "0" max = "14" placeholder = "1 serve = 1 slice">
                            <span class="error"> <?php echo $wbreadErr; ?></span>
                        </label>
                    </div>
                    <div class="col-submit">
                        <input id = "submitButton" type="submit" name="testButton" value="Proceed">
                    </div>

                </form>
            </div>
        </div>

    </body>
</html>