console.log("script chargé sûr");

//-----------------Confirmation avant suppression------------------------
function confirmation() {
  return confirm("Etes-vous certain de supprimer cet utilisateur ? Cette action est irréversible !");
}

// ------------------Light Dark Mode------------------------------------
function myFunction() {
  let element = document.body;
  element.classList.toggle("dark-mode");
}

// ------------------Verifications email valide--------------------------
function checkEmail(email) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (email.value.match(mailformat)) {
    return true;
  } else {
    if (email.value == "") {
      alert("Mettez une adresse email.");
    } else if (email.value.indexOf("@", 0) < 0) {
      alert("Votre adresse email non valide, manque @.");
    } else if (email.value.indexOf(".", 0) < 0) {
      alert("Votre adresse email non valide, manque le nom du domaine.");
    } else alert("Vous avez saisi une adresse électronique non valide !");

    email.focus();

    return false;
  }
}

//---------------Fetch API Livres ISBN---------------------------------
let result;
let urlRecherche;
let champRecherche = [];
let TitreLivre = document.querySelector("#Titre_livre");

let urlApi = `https://openlibrary.org/search.json?q=` ;
const datasFetch = async () => {
    const res = await fetch(urlRecherche);
    result = await res.json();
    console.log("result : ", result);
}

document.querySelector("#ISBN").addEventListener("input", (texte) => {
    let champ = texte.target.value; // -----capte ce qu'on saisie dans l'input
    champRecherche.push(champ);
    

    if (champ.length > 8) { // -----------ne fetch pas si moins de 8 caractères
        dernierElement = champRecherche[champRecherche.length - 1];
        // ---------------- Enlève les tirets dans un ISBN-----------------
        dernierElementSansTirets = dernierElement.replace(/-/g, "");
        console.log(dernierElementSansTirets);
        urlRecherche = urlApi + dernierElementSansTirets;
        removeOptions(TitreLivre); //----- Vider le Select à chaque nouvelle saisie
        datasFetch(); // ----------------- Appel du fetch -------------------------

        //--------------------décalage de 3s pour récuperer la réponse de l'API---- 
        setTimeout(() => {
              for (let i=0; i < result.docs.length ; i++){
                  let option = document.createElement("option");
                  option.value = result.docs[i].title;
                  option.text = result.docs[i].title;
                  TitreLivre.appendChild(option);

              LivreParDefaut(); //----- 1er résultat
              LivreChoisi(); // ----- Si plusieurs resultats, alors cela fait un Select menu
              }
          }, "3000");
    }
})

function LivreParDefaut() {

  document.querySelector("#Nbr_pages_livre").value = result.docs[0].number_of_pages_median;
  // document.querySelector("#Theme_livre").value = result.items[0].volumeInfo;
  // document.querySelector("#Format_livre").value = result.items[0].volumeInfo;
  document.querySelector("#Nom_auteur").value = result.docs[0].author_name ;
  // document.querySelector("#Prenom_auteur").value = ;
  // document.querySelector("#Editeur").value = result.items[0].volumeInfo.publisher;
  // document.querySelector("#Annee_edition").value = result.items[0].volumeInfo.publishedDate ;
  // document.querySelector("#Prix_vente").value = result.items[0].volumeInfo;
  // document.querySelector("#Langue_livre").value = result.items[0].volumeInfo.language;

}

function LivreChoisi() {

  TitreLivre.addEventListener('change', () => {
    document.querySelector("#Nbr_pages_livre").value = result.docs[TitreLivre.selectedIndex].number_of_pages_median;
    // document.querySelector("#Theme_livre").value = result.items[TitreLivre.selectedIndex-1].volumeInfo;
    // document.querySelector("#Format_livre").value = result.items[TitreLivre.selectedIndex-1].volumeInfo;
    document.querySelector("#Nom_auteur").value = result.docs[TitreLivre.selectedIndex].author_name ;
    // document.querySelector("#Prenom_auteur").value = ;
    document.querySelector("#Editeur").value = result.docs[TitreLivre.selectedIndex].volumeInfo.publisher;
    document.querySelector("#Annee_edition").value = result.docs[TitreLivre.selectedIndex].volumeInfo.publishedDate ;
    // document.querySelector("#Prix_vente").value = result.items[TitreLivre.selectedIndex].volumeInfo;
    document.querySelector("#Langue_livre").value = result.docs[TitreLivre.selectedIndex].volumeInfo.language;
  })
}
// --------------- Vide le menu Select à chaque nouvelle saisie---------------
function removeOptions(selectMenu) {
  while (selectMenu.options.length > 0) {
    selectMenu.remove(0);
  }

}