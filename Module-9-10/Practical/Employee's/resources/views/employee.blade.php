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
    body{
        background-color:slategray;
    }
    table{
        border: 1px solid black ;
        margin: 50PX 100PX;
        border-spacing: 5px;
    }
    th{
        color:aliceblue;
        background-color:blue ;
        padding: 10px 50px;
        /* width: 20px; */
    }
    tr{
        background-color:aliceblue;
        height: 25px;
    }
    .add_btn{
        border-radius: 10px;
        float: right;
        margin-top: 5px;
        margin-bottom: 0px;
        margin-right: 65px;
        font-weight: bolder;
        font-size: 30px;
        height: 40px;
        width: 100px;
        color: aliceblue;
        background-color:rgb(8, 161, 8);
    }
    .update_btn{
        border-radius: 20px;
        width: 65px;
        height: 30px;
        margin-left: 5px;
        background-color: dodgerblue;
    }
    .delete_btn{
        border-radius: 20px;
        width: 65px;
        height: 30px;
        margin-right: 5px;
        float: right;
        background-color: red;
    }
    td{
       text-align: center;
    }
    tr:nth-child(2n){
        background-color: black;
        color: aliceblue ;
    }
    .head{
        margin-top:20px ;
        text-align: center;
        background-color: crimson;
        margin-bottom: 
    }
    h1{
        font-family:Georgia, 'Times New Roman', Times, serif;
        color:aliceblue;
        font-size:60px;
        padding-top: 20px;
    }
</style>
<body>
    <div class="head">
        <h1>Employee's List</h1>
        <a href="employee_add">
            <button class="add_btn"  name="add_btn" >Add</button>
        </a>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email_id</th>
            <th>phone</th>
            <th>country</th>
            <th>age</th>
            <th>salary</th>
            <th>Action</th>
        </tr>
        @foreach ($employees as $empl )
            
        <tr>
            <td>{{$empl->id}}</td>
            <td>{{$empl->name}}</td>
            <td>{{$empl->email_id}}</td>
            <td></td>
            <td>{{$empl->country}}</td>
            <td>{{$empl->age}}</td>
            <td>{{$empl->salary}}</td>
            <td>
                
                    <a href="{{url('update_employee',$empl->id)}}">
                        <button class="update_btn">Update</button>
                    </a>
                    <a href="{{url('delete_employee',$empl->id)}}">
                        <button type="submit"  class="delete_btn">Delete</button>
                    </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>