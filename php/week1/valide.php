<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        } 
        th,td{
            padding: 8px;
            text-align: center;
            border: 1px solid #3333;
        }  
         </style>
</head>
<body>
    <?php 
         $customer_list = array($name ="name",$email="email",$gender="gender",$comment="comment",$gender="gender",$website="website");
        // $name =$email =$gender =$comment =$website ="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $comment = test_input($_POST["comment"]);
            $website = test_input($_POST["website"]);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>PHP from validation expale</h2>
    <form action="" method="post">
        Name : <input type="text" name="name"><br><br>
        E-mail : <input type="text" name="email"><br><br>
        Website : <input type="text" name="website"><br><br>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    
    <h2>Your Input:</h2>
    <table border="0">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>website</th>
            <th>comment</th>
            <th>Gender</th>
        </tr>
        <?php foreach() ?>
            <tr>
                <td><?php echo $customer['name'];?></td>
                <td><?php echo $customer['email'];?></td>
                <td><?php echo $customer['website'];?></td>
                <td><?php echo $customer['comment'];?></td>
                <td><?php echo $customer['gender'];?></td>
        
            </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>