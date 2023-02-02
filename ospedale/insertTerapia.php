<?php
    if( !empty($_POST["dataIn"])&&
        !empty($_POST["dataOut"])&&
        !empty($_POST["cod_p"])
    ){
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
                            <h4>VISUALIZZA</h4>
                        </div>                
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">DATA IN</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="'.$_POST["dataIn"].'">
                        </div>        

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">DATA OUT</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="'.$_POST["dataOut"].'">
                        </div>        

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">COD PERSONA</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="'.$_POST["cod_p"].'">
                        </div>   
                    </div>   
                    </div>   
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
        </html>    
    ';                             
    }
?>