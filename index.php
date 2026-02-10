<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 0;
    $f_name =$_POST ["first_name"];
   if($_POST["first_name"]  == "" || $_POST["last_name"] == "" || $_POST["adrisse"] || $_POST["city"] || $_POST["code_cline"] ){
        
        echo  "please check if the formul is full now "; 
        return;

   }
    ?>
    <table border = "2">
        <tr>
            <th>champ</th>
            <th>value</th>
        </tr>
        <tr>
            <td>first name</td>
            <td><?php echo $_POST ["first_name"];?></td>
        </tr>
        <td>last name</td>
        <td><?php echo $_POST ["last_name"];?><td>
        </tr>
        <tr>
            <td>Adrisse</td>
            <td><?php echo $_POST["adrisse"];?></td>
        </tr>
        <tr>
            <td>city</td>
            <td><?php echo $_POST["city"];?></td>
        </tr>
        <tr>
            <td>code cline</td>
            <td><?php echo $_POST["code_cline"];?> </td>
        </tr>
    </table>
</body>
</html>
