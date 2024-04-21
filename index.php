<!--
Jennifer McNiel
4/20/2024
https://jmcniel.greenriverdev.com/328/cupcakes/
Web page that takes a Cupcake order and displays a summary and cost
on a confirmation page.
-->
<?php
    echo "
        <!doctype html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport'
                  content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>Cupcake</title>
        </head>
        <body>
            <h2>Cupcake Fundraiser</h2>
            <form method='post' action='process.php'>
                <div>
                    <label for='name'>Your name:</label>
                    <input type='text' id='name' name='name'>
                </div>
                <div>
                    <label>Cupcake flavors:</label> <br>
                    
                    <input type='checkbox' id='grass' name='flavor[]' value='The Grasshopper'>
                    <label for='grass'>The Grasshopper</label><br>
                    
                    <input type='checkbox' id='whiskey' name='flavor[]' value='Whiskey Maple Bacon'>
                    <label for='whiskey'>Whiskey Maple Bacon</label><br>
                    
                    <input type='checkbox' id='carrot' name='flavor[]' value='Carrot Walnut'>
                    <label for='carrot'>Carrot Walnut</label><br>
                    
                    <input type='checkbox' id='salted' name='flavor[]' value='Salted Caramel'>
                    <label for='salted'>Salted Caramel</label><br>
                    
                    <input type='checkbox' id='redvel' name='flavor[]' value='Red Velvet'>
                    <label for='redvel'>Red Velvet</label><br>
                    
                    <input type='checkbox' id='lemon' name='flavor[]' value='Lemon Drop'>
                    <label for='lemon'>Lemon Drop</label><br>
                    
                    <input type='checkbox' id='tiramisu' name='flavor[]' value='Tiramisu'>
                    <label for='tiramisu'>Tiramisu</label><br>
                </div>
                <button type='submit'>Submit</button>
            </form>
        </body>
    </html>                                    
";



