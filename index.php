<!DOCTYPE html>
<html lang="fr">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="titre" >
        <h1>Déclarer une vente</h1>
    </div>

    <div class="paragraphe">
        <p>Aeternae atque aeternae mundanum convenit
        plerumque pacis perfectam foedere Fortuna.</p>
    </div>

    <button class="accordion">File</button>
        <div class="file">
                  <button>RC</button>
                  <button>MC</button>
                  <button>OM</button>
        
        </div>

    <button class="accordion">Placements RC / MOC / OM</button>
        <div class="PlacRC">
            <input type="checkbox" name="RC" id="RC">RC</input>
            <input type="checkbox" name="MOC" id="MOC">MOC</input>
            <input type="checkbox" name="OM" id="OM">OM</input>
        </div>


    <button class="accordion">Placements Specifiques MOB / OM</button>
    <div class="PlacSpec">
        
            <input type="checkbox" name="SDC" id="SDC">SDC</input>
            <input type="checkbox" name="ASU" id="ASU">ASU</input>
            <input type="checkbox" name="OVERTE" id="OVERTE">OVERTE</input>
            <input type="checkbox" name="GAZ" id="GAZ">GAZ</input>
    
    </div>


    <button class="accordion">Typologie</button>
       <div class="Typo">
                 <select name="typologie" id="menu_deroulant">
                      <option value="">--Je choisi--</option>
                      <option value="autre">Autres</option>
                      <option value="MES">MES en attente</option>
                      <option value="Finalisation">Finalisation</option>
                      <option value="mis_en_demeure">Mise en demeure</option>
                      <option value="mis_en_service">Demande de mise en service</option>
                      <option value="demande_resiliation">Demande de résiliation</option>
                      <option value="demande_rc">Ddemande de RC</option>
                      <option value="finalisation_mes">Finalisation de MES</option>
                   </select>
        </div>
    

    <button class="button">Je déclare ma vente
    </button>

    <script src="script.js"></script>
</body>

</html>