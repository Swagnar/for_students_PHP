<?php 
    require 'templates/header.php';
?>
<body>
    <div id="form-container">
        <div id="form">
            <form action="add_item_script.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Dodaj obraz: </td>    
                        <td><input type="file" name="item-image"></td>
                    </tr>
                    <tr>
                        <td>Cena: </td>
                        <td><input type="number" name="item-price"></td>
                    </tr>
                    <tr>
                        <td>Opis: </td>
                        <td><input type="text" name="item-content"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Dodaj przedmiot">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>