<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <form action="add_post_script.php" 
    method="POST" 
    enctype="multipart/form-data">
        <table>
            <tr>
            <td>Tytuł</td>
            <td>
                <input type="text" name="title" placeholder="Tytuł">
            </td>
        </tr>
        <tr>
            <td>Treść</td>
            <td>
                <input type="textarea" name="content">
            </td>
        </tr>
        <tr>
            <td>Zdjęcie</td>
            <td>
                <input type="file" name="form_image">
            </td>
            <tr>
                <td>
                    <input type="submit" value="Dodaj" name="submit">
                </td>
            </tr>
        </tr>
</table>
    </form>
</body>
</html>