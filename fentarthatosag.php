<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <title>Lajkó Gergő</title>
</head>
<body>
    <div class="container">
        <div>
            <img src="fenntart.png" alt="Fenntarthatóság">
        </div>
        <div>
            <h1>A fenntarthatóság szintjei felirattal</h1>
            <?php
                $elsoSzint="Ökoszisztéma";
                $masodikSzint="Társadalom";
                $harmadikSzint="Gazdaság";
                $negyedikSzint="Pénz";
                echo "<ul>
                        <li>$elsoSzint</li>
                        <li>$masodikSzint</li>
                        <li>$harmadikSzint</li>
                        <li>$negyedikSzint</li>
                    </ul>";
             ?>
        </div>
    </div>
    <div>
    <?php
            echo "<h2>2. feladat</h2>";
            $elso=array(
                "A megújuló erőforrások fogyasztása", 
                "több, mint amit a természet újratermelni képes",
                "a természet újratelmelő kapacitásával azonos mértékű" , 
                "kevesebb, mint amit a természet újratelmeni képes"
            );
            $masodik=array(
                "A környezet helyzete", 
                "a környezet pusztzul",
                "környezeti egyensúly",
                "a környezet megújul"
            );
            $harmadik=array(
                "Fenntarthatóság",
                "nem fenntartható",
                "fenntartható, nem változó állapot",
                "fenntartható fejlödés"
            );
            echo "<table>";
            echo "<tr><th>Fogyasztás</th><th>Környezet</th><th>Fenntarthatóság</th></tr>";
            for ($i = 0; $i < 4; $i++) { 
                echo "<tr><td>".$elso[$i]."</td><td>".$masodik[$i]."</td><td>".$harmadik[$i]."</td></tr>";
            }
            for ($i = 4; $i < count($elso); $i++) { 
                echo "<tr><td>".$elso[$i]."</td><td>".$masodik[$i]."</td><td>".$harmadik[$i]."</td></tr>";
            }
            echo "</table>";
            echo "<p>";
            
            for ($i=0; $i <4 ; $i++) { 
                echo $elso[$i]."-".$masodik[$i]."-".$harmadik[$i]."<br>";
            }
            ?>
    </div>
    <div>
    <?php
        
    echo "<h2>3.feladat</h2>";
    echo "<h2>Megújuló energiaforrás</h2>
        <p>Megújuló energiaforrásnak nevezzük az 
        energiahordozók azon csoportját, amelyek emberi 
        időléptékben képesek megújulni, azaz nem fogynak el,
        ellentétben a nem megújuló energiaforrásokkal.
        A megújuló energiaforrások a napenergia közvetlen 
        termikus és fotoelektromos hasznosítása, a biomassza, 
        szélenergia, vízenergia, a tenger hullámzásából 
        kinyerhető energia, a geotermikus energia, valamint 
        a Holddal összefüggésben az árapály energia. 
        A geotermikus energia a Nappal való kapcsolat, 
        a földfelszín Napból és a magmából származó energiaáram 
        jelentős különbsége alapján sorolható a megújuló 
        energiaforrások közé </p> ";

    $megUjAr = array(
        "Ország" => "EU-cél 2020", 
        "EU-átlag" => "20",
        "Belgium" => "13",
        "Bulgária" => "16",
        "Dánia" => "30",
        "Németország" => "18",
        "Észtország" => "25",
        "Finnorszég" => "36"
    );
    echo "<table class='tabla'>";
    foreach ($megUjAr as $kulcs => $érték) {
        echo "<tr><td>".$kulcs."</td><td>".$érték."</td></tr>";
    }
    echo "</table>";

    echo "<a href='negyedik_feladat.php'>Negyedik feladat</a>";
    ?>

    </div>
</body>
</html>
