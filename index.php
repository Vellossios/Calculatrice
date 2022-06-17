<!-- 
'##::::'##:'########:'##:::::::'##::::::::'#######:::'######:::'######::'####::'#######:::'######::
 ##:::: ##: ##.....:: ##::::::: ##:::::::'##.... ##:'##... ##:'##... ##:. ##::'##.... ##:'##... ##:
##:::: ##: ##::::::: ##::::::: ##::::::: ##:::: ##: ##:::..:: ##:::..::: ##:: ##:::: ##: ##:::..::
##:::: ##: ######::: ##::::::: ##::::::: ##:::: ##:. ######::. ######::: ##:: ##:::: ##:. ######::
. ##:: ##:: ##...:::: ##::::::: ##::::::: ##:::: ##::..... ##::..... ##:: ##:: ##:::: ##::..... ##:
:. ## ##::: ##::::::: ##::::::: ##::::::: ##:::: ##:'##::: ##:'##::: ##:: ##:: ##:::: ##:'##::: ##:
::. ###:::: ########: ########: ########:. #######::. ######::. ######::'####:. #######::. ######::
:::...:::::........::........::........:::.......::::......::::......:::....:::.......::::......:::
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/Calculatrice.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Calculatrice</title>
	</head>

	<body>
        <div class="title">
            <h1>Bienvenue dans la Calculatrice</h1>
        </div>
        <div class="content">
            <table>
                <tr>
                    <td>
                        <h2>Addition</h2>
                        <form class="Add">
                            <br><input class="Add1" type="number">
                            <br><input class="Add2" type="number">
                            <div class="resultadd"></div>
                            <button type="submit">Calculer</button>
                        </form>
                    </td>
                    <td>
                        <h2>Multiplication</h2>
                        <form class="Mul">
                            <br><input class="Mul1" type="number">
                            <br><input class="Mul2" type="number">
                            <div class="resultmul"></div>
                            <button type="submit">Calculer</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Soustraction</h2>
                        <form class="Sou">
                            <br><input class="Sou1" type="number">
                            <br><input class="Sou2" type="number">
                            <div class="resultsou"></div>
                            <button type="submit">Calculer</button>
                        </form>
                    </td>
                    <td>
                        <h2>Division</h2>
                        <form class="Div">
                            <br><input class="Div1" type="number">
                            <br><input class="Div2" type="number">
                            <div class="resultdiv"></div>
                            <button type="submit">Calculer</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>