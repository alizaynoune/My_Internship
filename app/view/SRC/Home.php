<!DOCTYPE html>
<html>
    <head>
        <title>Sotreg</title>
        <link class="_css" rel="stylesheet" type="text/css" href="../CSS/Home.css"/>

    </head>
    <body>
        <?php include'Header.php'?>
        <div class="content">
        <p class="text">Ce questionnaire anonyme a pour but de nous permettre de connaitre votre degré de satisfaction par rapport à nos prestations,</br>
        merci de consacrer quelques minutes pour y répondre avec soin.</p>
        <form action='Home.php' method='POST'>
        <table class="table">
            <thead class="headTable">
                <th><h2>RUBRIQUES</h2></th>
                <th><h2>NE SE PRONONCE PAS</h2></th>
                <th><h2>PAS DU TOUT SATISFAIT</h2></th>
                <th><h2>PEU SATISFAIT</h2></th>
                <th><h2>SATISFAIT</h2></th>
                <th><h2>TRES SATISFAIT</h2></th>

            </thead>
            <tbody>
            <tr class="NullInput Columns">
                <td><h2>I-AUTOCAR</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Proprete des moyen de transport</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Confort</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Sieges</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Rideaus</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Climatisation</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Suspension</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="NullInput Columns">
                <td ><h2>II-CONDUCTEUR</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Presentation vestimentaire</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Comportement et vestimentair</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Comportement et attude</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Securite Routiere</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Conduite</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Vitesse</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Respect du Code de la route</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="NullInput Columns">
                <td><h2>III-ACTIVITE</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>&#10146; Prestation de transport</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Respect horaire</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Respect circuits</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td id="Dot"><p>&#9210; Respet des arrets</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="NullInput Columns">
                <td><h2>IV-EN GENERAL</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            </tbody>
        </table>
        <textarea class="AreaInput" placeholder="V- Propositions d’amélioration :"></textarea>

        <input class="Submit" type='submit' value='OK'/>
</form>
</div>
        <?php include'Footer.php'?>
        <script type="text/javascript" src='../SCRIPT/Home.js'></script>
    </body>
</html>