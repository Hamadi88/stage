//garde en mémoire le changement de thème

function changeCss(theme='Theme1'){
  document.getElementById('css').href='styles/'+theme+'/style.css';
  saveInCookie(theme);
}

function saveInCookie(theme){
  document.cookie = "duv_theme="+theme;
}

function loadThemeCookie(){
  let regex = /duv_theme=(.*);?/;
  let cookie = document.cookie;
  let result = ""
  result = cookie.match(regex);
  if(result != null){
    changeCss(result[1]);
  }
}

loadThemeCookie();




var acc = document.getElementsByClassName("accordion");
var i;
    /*Action couleur  lors de la selection*/
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");

    /* Action accordion pour afficher ou cacher le texte */
    toggleSibling(this);
  });
} 

function toggleSibling(elem){
  var panel = elem.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
}

/*ouverture des panneaux selon la case cochée*/

var fileCheckboxs = document.querySelectorAll(".file input");
fileCheckboxs.forEach(function(checkbox){
  checkbox.addEventListener('change',function(){
    let accordionContents = document.querySelectorAll(".accordionContent")
    accordionContents.forEach(function(ac){
      ac.style.display = "none";
    });
    if(checkbox.value == "rc" && checkbox.checked){
      let placementTitle = document.querySelector("#placement");
      placementTitle.classList.add('active');
      toggleSibling(placementTitle);
    }else if((checkbox.value == "mob" || checkbox.value == "om") && checkbox.checked){
      let placementTitle = document.querySelector("#placement");
      placementTitle.classList.add('active');
      toggleSibling(placementTitle);
      let placementSpecTitle = document.querySelector("#placementSpec");
      placementSpecTitle.classList.add('active');
      toggleSibling(placementSpecTitle);
    }
  });
});

/* chekbox placement  */
    var placementcheckbox = document.querySelectorAll(".placement input");
    placementcheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change',function(){
       if(checkbox.checked ){
         let typologie = document.querySelector("#typo");
         typologie.classList.add('active');
         toggleSibling(typologie);
         var typ = typologie.nextElementSibling;
         typ.style.display = "block";
       }
      
      });
    });

    /* checkbox placement special*/
    var placementSpecCheckbox = document.querySelectorAll(".placementSpec input");
    placementSpecCheckbox.forEach(function(checkbox) {
    checkbox.addEventListener('change',function(){
       if(checkbox.checked){
         let typologie1 = document.querySelector("#typo");
         typologie1.classList.add('active');
         toggleSibling(typologie1);
         var typ1 = typologie1.nextElementSibling;
         typ1.style.display = "block";
         
       }
      });
    });

  
     