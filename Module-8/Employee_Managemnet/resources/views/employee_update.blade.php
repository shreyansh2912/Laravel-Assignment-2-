<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add employee</title>
    </head>
    <style>
        .back_btn{
        /* float: right; */
        margin-top: 0px;
        margin-bottom: 10px;
        margin-right: 65px;
        font-weight: bolder;
        font-size: 20px;
        height: 30px;
        width: 100px;
        color: aliceblue;
        background-color:black;
    }

    </style>
<body>
    <h1>Update employee</h1>
    <a href="employee_list" ><button class="back_btn"  > < Back</button></a>

    <fieldset>
        <legend> <h3> Update Information Here</h3></legend>
        @foreach ($data as $values )
        <form action="" method="POST">
            @csrf
            <label for="name">Name  : <input type="text" name="name"value="{{$values->name}}" id="name" required ></label><hr>
            <label for="email">Email_id : </label><input type="email"value="{{$values->email}}" name="email" id="email"required> <hr>
            {{-- <label for="dept">Phone_no.  : </label><input type="int" name="phone" id=""> <hr> --}}
            <label for="empid">Phone : </label><input type="number"value="{{$values->phone}}" name="phone" id=""required> <hr> 
            <label for="Age">Branch : </label><input type="number"value="{{$values->branch}}" name="branch" id="empid"required> <hr>
            
            <button type="submit" name="reg">Update</button>
            
        </form>
        @endforeach
    </fieldset>
</body>
</html>