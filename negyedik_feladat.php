<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Víz takarékosság</title>
</head>
<body>
    <h1>Hogyan takarékoskodhatunka vízzel</h1>
    <h2>A Föld édesvízkészlete véges, hogyan takarékoskodhatunk a vízzel?</h2>
    <p>Az ivóvíz születéséért rengeteget dolgoznak a vízcseppek és az
    emberek is. Ráadásul a felhasználható víz mennyisége sem korlátlan. 
    Ezért mondják a víztörténetét ismerő felnőttek, hogy óvd a 
    természetet és takarékoskodj a vízzel. Fürdés helyett inkább 
    zuhanyozz! Egészségesebb és takarékosabb is, mint a kádban fürdés. 
    Ne folyasd feleslegesen a vizet, a fogmosáshoz használj poharat! 
    Ha csöpögő csapot látsz, szólj a felnőtteknek! A mosógépet rakjuk 
    tele ruhával, ha beindítjuk, egy-két pólóért pazarlás beindítani. 
    De azzal is vizet spórolunk meg, ha vigyázunk a ruháink tisztáságára. 
    Ha kevesebb ruhát piszkolunk össze, kevesebb lesz a mosnivalónk is. 
    Ügyeljünk arra, hogy sáros lábbal ne menjünk be a lakásba, mert úgy 
    is megspórolhatunk vizet, ha nem kell naponta többször felmosnunk. 
    A kertet reggel és este locsold, ilyenkor kevésbé párolog a víz. 
    De locsolásra használhatjuk az összegyűjtött esővizet is. 
    A vizet a növények gyökeréhez juttasd!</p>

    <p>A folyadékáram jellemző adata a folyadék áramlási sebessége (v). 
    Az áramló folyadék mennyiségét a térfogatárammal fejezzük ki. 
    A térfogatáram egy adott keresztmetszeten időegység alatt 
    átáramló folyadék térfogata. A térfogatáram számítása: V = v × A ahol:</p>

    <p>V az adott keresztmetszeten időegység alatt átáramló folyadék 
    térfogata, mértékegysége: m3/s </p>
    <p>v a folyadék áramlási sebessége, mértékegysége: m/s</p>
    <p>A a folyadékáram keresztmetszete, mértékegysége: m2</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="sebesseg">Folyadék áramlási sebesség (m/s):</label>
        <input type="number" id="sebesseg" name="sebesseg" required><br><br>
        <label for="keresztmetszet">Folyadékáram keresztmetszete (m2):</label>
        <input type="number" id="keresztmetszet" name="keresztmetszet" required><br><br>
        <input type="submit" value="Számol">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Az űrlapról érkező adatok feldolgozása és a térfogat kiszámítása
        $sebesseg = $_POST["sebesseg"];
        $keresztmetszet = $_POST["keresztmetszet"];
        $terfogat = $sebesseg * $keresztmetszet;
        echo "<div class='result'>Az átáramló folyadék térfogata: " . $terfogat . " m3/s</div>";
    }
    ?>

    
</body>
</html>
