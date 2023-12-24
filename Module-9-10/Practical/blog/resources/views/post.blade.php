<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    h1{
        margin-top: 30px;
        text-align: center;
    }
    table{
        margin-top:10px;
        margin : 20px;
    }
    tr{
        margin : 20px;
    }
    .content{
        border: 1px solid black;
        height: 650px;
        width: 1000px;
    }
    .img{
        border: 1px solid black;
        height: 650px;
        width:350px;
    }
    h4{
        height: 70px;
        margin-top:-295px;
        font-size: 50px;
        text-align: center;
        background-color:bisque;
    }
</style>
<body>
    <h1>BLOG POST'S</h1><hr>
    {{-- <div class="main">

        <div class="content"></div>
        <div class="img"></div>
    </div> --}}
    <table border="1" >
         <tr>
            <td class="content">
                <h4>Hello</h4><hr>
                <p></p>
            </td>
            <td class="img" ><img src="img/car.jpg" alt=""></td>
         </tr>
    </table>
</body>
</html>