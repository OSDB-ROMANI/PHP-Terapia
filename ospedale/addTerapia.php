<?php
    include ("confing/conf.php");
    include ("lib/connection.php");
    include ("lib/persone.php");
    echo'
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Crea Persona</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
        <body>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>'.$titolo.'</h4>
                    </div>                
    ';
        if($con=connectDB($hostname, $username, $password,$dbname)){
            $result = persone($con);
            if(mysqli_num_rows($result)>0){
                echo '
                    <div class="card-body">    
                        <form action="insertTerapia.php" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">DATA INIZIO TERAPIA</span>
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dataIn" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">DATA FINE TERAPIA</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dataOut" required>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">PAZIENTE</label>
                                <select class="form-select" id="inputGroupSelect01" name = "cod_p">
                ';
                            foreach($result as $row){
                                echo'
                                        <option value= "'.$row["cf"].'">'.$row["cf"].' - '.$row["nome"].' - '.$row["cognome"].'</option>
                                        ';
                            }
                echo '
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Insert</button>
                            </div>   
                        </form>
                    </div>
                ';
            }else{
            echo "Servzio temporaneamente non utilizzabile";
            exit(1);                
            }

        }else{
            echo "Servzio temporaneamente non utilizzabile";
            exit(1);
        }
    echo'
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
        </html>    
    ';
?>