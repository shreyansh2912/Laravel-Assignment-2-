<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-weight: bolder;
    }
    .main{
        color: aliceblue;
        margin: 100px auto;
        background-color:crimson;
        width: 400px;
        height: 400px;
        border-radius: 15%;
    }
    .content{
        padding-top: 20px;
        font-size: xx-large;
    text-align: center;
    }
    label{
       margin-left:70px ;
       margin-bottom: 200px;
    }
input{
    height: 30px;
    border-radius: 10%;
    margin-bottom: 20px;
}
button{
    width: 70px;
    margin-left: 80px;
    height: 30px;
    border-radius: 30%;
}
</style>
<body>
    <div class="main">
        <div class="content">
              Add Products <hr>
            </div>
            <form action="" method="post" enctype="multipart/form-data" >
                <label for="" class="input" > Name :
                    <input type="text" name="name" placeholder="name"><br>
                </label>
                <label for="" class="input"> Price :
                    <input type="text" name="price" placeholder="price" ><br>
                </label>
                <label for="" class="input"> File :
                    <input type="file" name="image" accept="image/*"  ><br>
                </label>
                <label for="" class="submit" >
                    <button type="submit" name="update_btn" >Submit</button>
                </label>
            </form>
    </div>
</body>
</html>