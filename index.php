<?php
header('Content-type: text/html; charset=utf-8');
require_once './styles/styleswitcher.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    if(!empty($url)){
        echo '<link rel="stylesheet" href="./styles/'.$new_style.'/style.css">';
    }
    ?>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Déclarer une vente</title>
</head>
<body>
    <div class="globTitre">
            <div class="logo">
                <img src="./img/sodabyarma-1.png">
            </div>
        <div class="titre" >
            <h1>Déclarer une vente</h1>
        </div>

        <div class="OnOff">
            <input type="checkbox" id="s3" />
            <label class="slider-v2" for="s3"></label>
        </div>
    </div>

    <div class="paragraphe">
        <p >Bonjour Dupont !Tu vas déclarer une vente pour le superviseur 7047678willier,le RP :7047678 et le site de Calais,Tu peux remplir directement le formulaire ci dessous ou le faire depuis une page dédiée en cliquant ici</p>
    </div>

<div class="accor">
        <button class="accordion" id="accFile">
            File
            <div id="icon1"></div>
        </button>
        <div class="file">
                <div class="position">
                  <button class="rc">RC</button>
                  <button class="mc">MOC</button>
                  <button class="om">OM</button>  
                </div>
        </div>

        <button class="accordion">
             Placements RC / MOC / OM
             <div id="icon2"></div>
        </button>

    <div class="PlacRC">
        <div>
            <input type="checkbox" id="cbx" class="cbx" style="display: none;">
            <label for="cbx" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                    <span>MENS</span>
            </label>

               <input type="checkbox" id="cbx2" class="cbx" style="display: none;">
                <label for="cbx2" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                       <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                       <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                      <span>DOM</span>
                </label>

            <input type="checkbox" id="cbx3" class="cbx" style="display: none;">
            <label for="cbx3" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                    <span>FE</span>
            </label>

            <input type="checkbox" id="cbx4" class="cbx" style="display: none;">
            <label for="cbx4" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>ECA</span>
            </label>

            <input type="checkbox" id="cbx5" class="cbx" style="display:none;">
            <label for="cbx5" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>Appel RC Sans Placement</span>
            </label>
         
        </div>
    </div>



    <button class="accordion">
        Placements Specifiques MOB / OM
        <div id="icon3"></div>
    </button>

    <div class="PlacSpec">
    <input type="checkbox" id="cbx6" class="cbx" style="display:none;">
            <label for="cbx6" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>SDC</span>
            </label>

        <input type="checkbox" id="cbx7" class="cbx" style="display:none;">
            <label for="cbx7" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>ASU</span>
            </label>

            <input type="checkbox" id="cbx8" class="cbx" style="display:none;">
                <label for="cbx8" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                         <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                         <polyline points="1 9 7 14 15 4"></polyline>
                     </svg>
                     <span>OVERTE</span>
                </label>

                <input type="checkbox" id="cbx9" class="cbx" style="display:none;">
                    <label for="cbx9" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                        <span>Gaz</span>
                    </label>
    
        </div>


   <button class="accordion" id="accTypo">
        Typologie
        <div id="icon4"></div>
    </button>

       <div class="Typo">
                 <select name="typologie" id="menu_deroulant">
                      <option value="">--Je choisi--</option>
                      <option value="autre">Autres</option>
                      <option value="MES">MES en attente</option>
                      <option value="Finalisation">Finalisation</option>
                      <option value="mis_en_demeure">Mise en demeure</option>
                      <option value="mis_en_service">Demande de mise en service</option>
                      <option value="demande_resiliation">Demande de résiliation</option>
                      <option value="demande_rc">Demande de RC</option>
                      <option value="finalisation_mes">Finalisation de MES</option>
                   </select>
        </div>
    
        <div class="posbtn">
    
            <button class="btn btn-bubble">Je déclare ma vente</button>
        </div>
        
    
</div>

<ul id="styleswitcher">
  <li><a href="<?php echo $actuel; ?>?style=bleu">petite surprise</a></li>
  <li><a href="<?php echo $actuel; ?>?style=vert">petite surprise</a></li>
</ul>

    <script src="script.js"></script>
</body>

</html>

