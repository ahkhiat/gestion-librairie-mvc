console.log("script chargé");


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

let result;
let urlRecherche;
let champRecherche = [];
let TitreLivre = document.querySelector("#Titre_Livre");

let urlApi = `https://www.googleapis.com/books/v1/volumes?q=` ;
const datasFetch = async () => {
    const res = await fetch(urlRecherche, {
      headers : {
        "Content-Type": "application/json"
      }
    });
    result = await res.json();
    console.log("result : ", result);
}

document.querySelector("#ISBN").addEventListener("input", (texte) => {
    let champ = texte.target.value;
    champRecherche.push(champ);
    

    if (champ.length > 8) {
        dernierElement = champRecherche[champRecherche.length - 1];
        dernierElementSansTirets = dernierElement.replace(/-/g, "");
        console.log(dernierElementSansTirets);
        urlRecherche = urlApi + dernierElementSansTirets;
        datasFetch();
        setTimeout(() => {

              for (let i=0; i < result.items.length ; i++){
                  let option = document.createElement("option");
                  option.value = result.items[i].volumeInfo.title;
                  option.text = result.items[i].volumeInfo.title;
                  TitreLivre.appendChild(option);

              LivreParDefaut();
              LivreChoisi();
              }
          }, "1000");
    }
})

function LivreParDefaut() {

  document.querySelector("#Nbr_pages_livre").value = result.items[0].volumeInfo.pageCount;
  // document.querySelector("#Theme_livre").value = result.items[0].volumeInfo;
  // document.querySelector("#Format_livre").value = result.items[0].volumeInfo;
  document.querySelector("#Nom_auteur").value = result.items[0].volumeInfo.authors ;
  // document.querySelector("#Prenom_auteur").value = ;
  document.querySelector("#Editeur").value = result.items[0].volumeInfo.publisher;
  document.querySelector("#Annee_edition").value = result.items[0].volumeInfo.publishedDate ;
  // document.querySelector("#Prix_vente").value = result.items[0].volumeInfo;
  document.querySelector("#Langue_livre").value = result.items[0].volumeInfo.language;

}

function LivreChoisi() {

  TitreLivre.addEventListener('change', () => {
    document.querySelector("#Nbr_pages_livre").value = result.items[TitreLivre.selectedIndex].volumeInfo.pageCount;
    // document.querySelector("#Theme_livre").value = result.items[TitreLivre.selectedIndex-1].volumeInfo;
    // document.querySelector("#Format_livre").value = result.items[TitreLivre.selectedIndex-1].volumeInfo;
    document.querySelector("#Nom_auteur").value = result.items[TitreLivre.selectedIndex].volumeInfo.authors ;
    // document.querySelector("#Prenom_auteur").value = ;
    document.querySelector("#Editeur").value = result.items[TitreLivre.selectedIndex].volumeInfo.publisher;
    document.querySelector("#Annee_edition").value = result.items[TitreLivre.selectedIndex].volumeInfo.publishedDate ;
    // document.querySelector("#Prix_vente").value = result.items[TitreLivre.selectedIndex].volumeInfo;
    document.querySelector("#Langue_livre").value = result.items[TitreLivre.selectedIndex].volumeInfo.language;
  })
}