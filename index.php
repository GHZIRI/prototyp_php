<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>champ</th>
            <th>valeur</th>
        </tr>
        
            
        
        <tr>
            <td>first name</td>
            <td><?php echo $_POST["first_name"];?></td>
        </tr>
        <tr>
            <td>last name</td>
            <td><?php echo $_POST["last_name"];?></td>
        </tr>
        <tr>
            <td>drisse</td>
            <td><?php echo $_POST["adrisse"];?></td>
        </tr>
        <tr>
            <td>city</td>
            <td><?php echo $_POST["city"];?></td>
        </tr>
        <tr>
            <td>code_cline</td>
             <td><?php echo $_POST["code_cline"];?></td>
        </trt>

    </table>
</body>
</html>