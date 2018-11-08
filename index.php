<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Les Tables de Multiplications</title>
   <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <?PHP 
        $select='<option value="table1">Table de 1</option>';
        
        ?>

      <div id="container">
        <h1>Table de Multiplication</h1>
        <form method="post" action="traitement.php">
            <fieldset>
                <legend>Choix</legend>
                <label for='nom'>Tables</label>
                <select name="tables">
                    <?PHP echo $select; ?>
                </select>
                <input type='submit' value='Valider' id='bouton_envoi'>
            </fieldset>



            <fieldset>
            <legend>Tables de 1</legend>
            <table id="tableMulti">
                <tr>
                    <td>1x1=1</td>
                    <td>1x11=11</td>
                    <td>1x21=21</td>
                </tr>
                <tr>
                    <td>1x2=2</td>
                    <td>1x12=12</td>
                    <td>1x22=22</td>
                </tr>
                <tr>
                    <td>1x3=3</td>
                    <td>1x13=13</td>
                    <td>1x23=23</td>
                </tr>
                <tr>
                    <td>1x4=4</td>
                    <td>1x14=14</td>
                    <td>1x24=24</td>
                </tr>
                <tr>
                    <td>1x5=5</td>
                    <td>1x15=15</td>
                    <td>1x25=25</td>
                </tr>
                <tr>
                    <td>1x6=6</td>
                    <td>1x16=16</td>
                    <td>1x26=26</td>
                </tr>
                <tr>
                    <td>1x7=7</td>
                    <td>1x17=17</td>
                    <td>1x27=27</td>
                </tr>
                <tr>
                    <td>1x8=8</td>
                    <td>1x18=18</td>
                    <td>1x28=28</td>
                </tr>
                <tr>
                    <td>1x9=9</td>
                    <td>1x19=19</td>
                    <td>1x29=29</td>
                </tr>
                <tr>
                    <td>1x10=10</td>
                    <td>1x20=20</td>
                    <td>1x30=30</td>
                </tr>



            </table>

            </fieldset>

            
        </form>
      </div>
        <script src="js/script.js"></script>
    </body>
</html>
