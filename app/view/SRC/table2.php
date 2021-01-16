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
                <th><h2>NE SEPRONONCE</h2></th>
                <th><h2>PAS DU TOUT</h2></th>
                <th><h2>PEU SATISFAIT</h2></th>
                <th><h2>SATISFAIT</h2></th>
                <th><h2>TRES SATISFAIT</h2></th>

            </thead>
            <tbody>
            <tr class="NullInput Columns">
                <td><h2>I- CONTRAT</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>Qualité des Prestations</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>Capabilité à Satisfaire  les Besoins de transportt</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>Facturation</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="NullInput Columns">
                <td ><h2>II- COMMUNICATION</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>Ecoute</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>Traitement réclamations à temps</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            <tr class="NullInput Columns">
                <td><h2>III- SECURITE ROUTIERE</h2></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="Columns">
                <td><p>Conduite</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="Columns">
                <td><p>Sécurité</p></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
                <td><input class="Input" type="text" name="" vlaue=""/></td>
            </tr>
            <tr class="NullInput Columns">
                <td><h2>IV- EN GENERAL</h2></td>
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