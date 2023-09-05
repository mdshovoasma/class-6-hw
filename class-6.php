<?php
// $name = ["hello"];
// echo strlen($name);

// foreach($name as $s=> $key){
//     echo "$s $key";
// }

// prime number check




$input_value = 0;
$input_value = $_REQUEST['value'];



$GLOBALS['prime']='';

function prime_number($input_value,$counter=0){
 
    for($i = 2;$i < $input_value; $i++){
       
        if($input_value% $i == 0){
            $counter++;
            break;

        }
    }
    if($counter == 0){
        $GLOBALS['prime']= "Number is prime";
       


    }else{
       $GLOBALS['prime'] = " Number is not Prime ";
    }


}


 prime_number($input_value);
 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<h1>Prime number check</h1>
    <div class="container-fluid m-0 p-0 bg-primary">
        <div class="row">
            <div class="col-md-6 text-center  bg-danger">
                <h1>Check Prime Number</h1>

                <form action="class-6.php" method="$_POST">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input value="<?php echo  $input_value ?>" name="value" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="result">
                        <input value="<?php echo $prime ?>" type="text">
                    </div>


                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>

            <div class="col-md-6 bg-success">
                <h1>Check Prime Number</h1>

                <form action="primenumberlist.php" method="$_POST">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input name="value" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="result">
                        <input type="text">
                    </div>


                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>

            </div>


        </div>

        <div class="row">
            <div class="col-md-6 bg-warning text-center">
            <select name="" id="">
             <?php
            for($i = 2023; 2000 < $i;$i--){ ?>
                    <span>select</span>
                    <option value=""><?php echo $i?></option>

             
             <?php
            }

            ?>
            </select>

            </div>


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>