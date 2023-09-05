<?php


// $GLOBALS['j']=0;
// $GLOBALS['a']=0;
$number_value = "";
$number_value = $_REQUEST['number_value'];
// print_r($number_value);
//  $count=0;

   function list_of_prim_number($num,){
  
    for($i=2; $i <= $num; $i++ ){

        for($j =2; $j < $i; $j++ ){
            if($i % $j == 0){
              
                break;

            }
        }
        if($i==$j){
          $a= "<span>$j</span> "; 
          echo $a;

       
            
        }
    }

   
   }

   

 list_of_prim_number($number_value);
 


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
                        <input name="value" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="result">
                        <input type="text">
                    </div>


                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
            

            <div class="col-md-6 bg-Secondary">
                <h1>List of Prime Number</h1>

                <form action="primenumberlist.php" method="$_POST">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input value="<?php echo $number_value?>" name="number_value" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="result">
                        <input type="number">

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
                    <option value=""><?php echo $i?></option>
                    <?php
            }
            
            
            ?>
                </select>


            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>