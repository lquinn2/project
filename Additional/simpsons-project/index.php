<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IMG 100 Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .header {
                width: 100%;
            }
            .logo {
                position: absolute;
                left: 75px;
                top: 0px;
                width: 150px;
                height: 150px;
            }
            .heroimage {
                display: block;
                width: 600px;
                margin-left: auto;
                margin-right: auto;
                margin-top:150px;
                padding-bottom: 5px;
            }
            .form-content {
                display: block;
                width: 550px;
                margin-left: auto;
                margin-right: auto;
                font-family: sans-serif;
            }
            .form-item {
                display: block;
                margin-bottom: 10px;
            }
            .submit {
                margin-top: 10px;
                margin-bottom: 50px;
            }
            .site-content.container {
                max-width: 720px;
                margin-bottom: 80px;
            }
            .col-2 {
                margin-bottom: 80px;
            }
            .col-2, li {
                max-width: 300px !important;
            }
            .col-2:nth-child(odd) {
                margin-right: 30px;
            }
            .first {
                margin-top: 20px;
                margin-bottom: 15px;
                font-size: 1.15em;
                font-weight: semi-bold; 
            }
            .row {
                margin-bottom: 40px;
            }
            ul {
                list-style-type: none;
            }
        </style> 
    </head>
    <body>
        <div class="header">
            <a href="index.php"><img class="logo" src="images/logo.svg" alt="broken logo"></a>
            <img class="heroimage" src="images/simpsons.jpg" alt="broken image">
        </div>
        
        <div class="form-content">
            <h3> Select characters to show </h3>
            <form method="post">
                <span class="form-item">Homer Simpson <input type="checkbox" name="characters[]" value="homer"></span>
                <span class="form-item">Marge Simpson <input type="checkbox" name="characters[]" value="marge"></span>
                <span class="form-item">Bart Simpson <input type="checkbox" name="characters[]" value="bart"></span>
                <span class="form-item">Lisa Simpson <input type="checkbox" name="characters[]" value="lisa"></span>
                <span class="form-item">Maggie Simpson <input type="checkbox" name="characters[]" value="maggie"></span>
                <span class="form-item">Moe Szyslak <input type="checkbox" name="characters[]" value="moe"></span>
                <input class="submit" type="submit" value="Show Characters">
            </form>
        </div>
    </body>
</html>
<?php

// Read JSON, and convert to array
$characters_json = file_get_contents('characters.json');
$characters = json_decode($characters_json, true);

// Add selected characters to array
if (isset($_POST['characters'])){
    $character_array = [];
    if (empty($character_array)){
        foreach($_POST['characters'] as $selected){
            array_push($character_array, $selected);
        }
    }
}


print ("<div class='site-content container'>");
print ("<ul class='row'>");
if (isset($character_array)){
    for($i = 0; $i < count($character_array); $i++){
        print("<div class='col-2'>");
        $character = $character_array[$i];
        $image = $characters[$character]['image_url'];
        print ('<img width="260px" height="auto" class="grid-item-image" src=' . $image . '>');
    
        print ("<ul>");
        print ("<li class='first'><b class='name'>" . $characters[$character]['first_name'] . " " . $characters[$character]['last_name'] ."</b></li>");
        print ("<li><b>Age: </b>" . $characters[$character]['age'] . "</li>");
        if (isset($characters[$character]['occupation'])){
            print ("<li><b>Occupation : </b>" . $characters[$character]['occupation'] . "</li>");
        }
        if (isset($characters[$character]['voiced_by']))
        print ("<li><b>Voiced by: </b>" . $characters[$character]['voiced_by'] . "</li>");
        print("</ul>");
        print ("</div>");
    }
}
print ("</ul>");
print("</div>");