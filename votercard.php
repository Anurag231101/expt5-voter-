<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Card</title>
    <style>
        .container {
            align-items: center;
            margin: auto;
            width: 400px;
            height: 600px;
            background-color: aliceblue;
            border: 2px solid black;
            line-height: 20px;

        }

        h1 {
            text-align: center;
            margin: 0;
            padding: 0;
            height: 3rem;
            background-color:rgb(128, 194, 253);
            font-size: 2.4rem;
            padding-top: 1rem;
            border: 2px solid black;
        }

        input,
        label {
            margin-left: 5rem;
            line-height: 30px;
            width: 70%;
            font-size: 1.2rem;
            margin-bottom: .3rem;
            font-family:  'Arial Narrow Bold', sans-serif;
        }

        #filec {
            margin-left: .2rem;
            margin-top: 1rem;
        }

        #submit {
            margin-top: 1rem;
            margin-left: 10rem;
            font-size: 1.5rem;
            background-color: rgb(139, 167, 192);
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Voter card</h1><br>
        <form action="thanks.php" onsubmit = " return  myfun()">
            <label for="name">Name</label><br>
            <input type="text" id="name" placeholder="Enter name"><br>
            <label for="age"  name="age">Age</label><br>
            <input type="number" id="age" placeholder="Enter Age" ><br>
            <label for="Dob"> DOB</label><br>
            <input type="date" id="date" placeholder="date" ><br>
            <label for="Addhar_number">Addhar No.</label><br>
            <input type="text" id="addhar_no" placeholder="Enter adhar card number" ><br>
            <label for="upload proof"></label>
            <input type="file" id="filec" placeholder="choose image"><br>
            <label for="address"> Address</label><br>
            <input type="text" id="address" placeholder="Enter Address" ><br>
            <button type="submit" id="submit" > Submit</button>
        </form>
    </div>
</body>
<script>

    function myfun(){
        var age=document.getElementById("age").value;
         var name=document.getElementById("name").value;
         var date=document.getElementById("date").value;
         var addhar_no=document.getElementById("addhar_no").value;
         var address=document.getElementById("address").value;
    // alert(age);
    if(isNaN(age) || age ==""){
        alert("Age is not valid");
        return false ;
    }
   else if(age<19){
        alert("You are under age can't fill form!!!!!");
        return false;
    }
    else if(name == "" || !isNaN(name) || name.length <=10 ){
        alert("Name is not Valid");
        return false;
    }
    else if(!isNaN(date)  || date == ""){
            alert("Invalid date");
            return false;
    }
    else if(isNaN(addhar_no) || addhar_no==""||addhar_no.length!=12){
        alert("Invalid Addhar Card Number");
        return false ;
    }
    else if( !isNaN(address)|| address==""){
        alert("Invalid Address");
    }
    else{
        alert("Form submit successfully");
        return true;
    }
    }
</script>

</html>