<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        color: aliceblue;
        margin: 0px;
        padding: 0px;
    }
    body{

        background-color:bisque;
    }
    h1{
        height: 100px;
        font-size: 80px;
        color:yellow;
        background-color: black;
        text-align: center;
    }
    table{
        background-color: aliceblue;
        margin-left: 65px;
        /* margin: 0px auto; */
        border-spacing: 0px;
    }
    img{

    }
    td{
        /* width: 300px;
        height: 300px; */
    }
</style>
<body>
    <h1>Gallary</h1><hr>
    <div class="main">
        <table border="1" >
        <?php foreach($data as $value) {?>
        <td><img src="<?php echo $value->image?>" alt=""></td>
        <?php }?>   
        </table>
    </div>
</body>
</html>