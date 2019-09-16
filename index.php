<!DOCTYPE html>
<html lang="fr">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="css" rel="stylesheet" type="text/css" href="./styles/Theme1/style.css">
    <title>Déclarer une vente</title>
</head>
<body>
    <div class="globTitre">
            <div class="logo">
                <img class="img" src="./img/sodabyarma-1.png">
            </div>
        <div class="titre" >
            <h1>Déclarer une vente</h1>
        </div>

        <div class="OnOff">
            <button class="bleu" onclick="changeCss('theme1')">Style 1</button>
            <button class="vert" onclick="changeCss('Theme2')">Style 2</button>
        </div>
    </div>

    <div class="paragraphe">
        <p >Bonjour Dupont !Tu vas déclarer une vente pour le superviseur 7047678willier,le RP :7047678 et le site de Calais,Tu peux remplir directement le formulaire ci dessous ou le faire depuis une page dédiée en cliquant ici</p>
    </div>

<div class="accor">
        <button class="accordion" id="file">
            File
            <div id="icon1"></div>
        </button>

        <div class="accordionContent file">
        <div class="position">
                    <input type="radio" name="file" class="rc" value="rc" id="fileRc" autocomplete="off"><label for="fileRc">RC</label>
                    <input type="radio" name="file" class="mob" value="mob" id="fileMob" autocomplete="off"><label for="fileMob">MOB</label>
                    <input type="radio" name="file" class="om" value="om" id="fileOm" autocomplete="off"><label for="fileOm">OM</label>
                </div>
        </div>
   
    <!-- Placements RC -->
        <button class="accordion" id="placement">
            Placements RC / MOB / OM
            <div id="icon2"></div>
        </button>
    
        <div class="accordionContent placement">
        <div class="placement1">
            <input type="checkbox" id="cbx" class="cbx" style="display: none;" autocomplete="off">
            <label for="cbx" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>MENS</span>
            </label>
            
            <input type="checkbox" id="cbx2" class="cbx" style="display: none;" autocomplete="off">
            <label for="cbx2" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>DOM</span>
            </label>
            
            <input type="checkbox" id="cbx3" class="cbx" style="display: none;" autocomplete="off">
            <label for="cbx3" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>FE</span>
            </label>
            
            <input type="checkbox" id="cbx4" class="cbx" style="display: none;" autocomplete="off">
            <label for="cbx4" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>ECA</span>
            </label>
            
            <input type="checkbox" id="cbx5" class="cbx" style="display:none;" autocomplete="off">
            <label for="cbx5" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>Appel RC Sans Placement</span>
            </label>
         
        </div>
    </div>
    <!-- Placements Specifiques -->
    <button class="accordion" id="placementSpec">
        Placements Specifiques MOB / OM
        <div id="icon3"></div>
    </button>
    
    <div class="accordionContent placementSpec">
        <div>
       
            <input type="checkbox" id="cbx6" class="cbx" style="display:none;" autocomplete="off">
            <label for="cbx6" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>SDC</span>
            </label>
            
            <input type="checkbox" id="cbx7" class="cbx" style="display:none;" autocomplete="off">
            <label for="cbx7" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>ASSU</span>
            </label>
            
            <input type="checkbox" id="cbx8" class="cbx" style="display:none;" autocomplete="off">
            <label for="cbx8" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>OVERTE</span>
            </label>
            
            <input type="checkbox" id="cbx9" class="cbx" style="display:none;" autocomplete="off">
            <label for="cbx9" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
                <span>GAZ</span>
            </label>
        </div>
    </div>
    <!-- Typologie -->
    <button class="accordion" id="typo">
        Typologie
        <div id="icon4"></div>
    </button>
    
        <div class="typo">
                 <select name="typologie" id="menu_deroulant" required autocomplete="off">
                      <option value="">-- Je choisis --</option>
                      <option value="autre">Autres</option>
                      <option value="MES">MES en attente</option>
                      <option value="Finalisation">Finalisation</option>
                      <option value="Mise_en_Service">Mise en Service</option>
                      <option value="Demande_de_MeS">Demande de mise en service</option>
                      <option value="demande_resiliation">Demande de résiliation</option>
                      <option value="demande_rc">Demande de RC</option>
                      <option value="finalisation_mes">Finalisation de MES</option>
                   </select>
        </div>
    
    <!-- Boutton -->
    <div class="posbtn">
        <button class="btn btn-bubble"> Je declare ma vente</button>
    </div>
</div>
<!-- Optionnel -->
    <div class="demo">
        
        <p>Meilleur moyen de contact:</p>
        <div>
            <input type="radio" id="tel" name="drone" value="tel"
            checked autocomplete="off">
            <label for="tel">Télèphone</label>
        </div>
        <div>
            <input type="radio" id="mail" name="drone" value="mail" autocomplete="off">
            <label for="mail">E-Mail</label>
        </div>
        <button type="submit" class="submit">Envoyer</button>
    
        <div class="nb">
            <input type="number" id="tentacles" name="tentacles" min="0" max="100" autocomplete="off">
        </div>
        <button type="submit" class="submit">Envoyer</button>
    </div>


    <script src="script.js"></script>
</body>

</html>

