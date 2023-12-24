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
    <a href="employee" ><button class="back_btn"  > < Back</button></a>

    <fieldset>
        <legend> <h3> Update Information Here</h3></legend>

        <form action="" method="POST">
           @csrf
           @method('put');
            <label for="name">Name  : <input type="text" name="name" id="name" required value="{{$employee->name}}" ></label><hr>
            <label for="email">Email_id : </label><input type="text" name="email" value="{{$employee->name}}"  id="email"required> <hr>
            {{-- <label for="dept">Phone_no.  : </label><input type="int" name="phone" id=""> <hr> --}}
            <label for="empid">Country : </label><input type="text" name="country" id="" value="{{$employee->country}}" required> <hr> 
            <label for="Age">Age : </label><input type="number" name="age" value="{{$employee->age}}" id="empid"required> <hr> 
            <label for="salary">Salary : </label><input type="number" name="salary" value="{{$employee->salary}}" id="empid"required> <hr>


            <button type="submit" name="reg">Update</button>

        </form>
    </fieldset>
</body>
</html>