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

let urlApi = `https://openlibrary.org/api/books?bibkeys=ISBN:` ;
const datasFetch = async () => {
    const res = await fetch(urlRecherche);
    result = await res.json();
    console.log("result : ", result);
    

}

document.querySelector("#ISBN").addEventListener("input", (texte) => {
    let champ = texte.target.value;
    champRecherche.push(champ);

    

    if (champ.length > 8) {
        dernierElement = champRecherche[champRecherche.length - 1];
        dernierElementSansEspaces = dernierElement.replace(/ /g, "+");
        console.log(dernierElementSansEspaces);
        urlRecherche = urlApi + dernierElementSansEspaces + `&jscmd=details&format=json`;
        // console.log(urlRecherche)
        datasFetch()
        // document.querySelector("#Titre_livre").value = result.features[j].properties.name;
        setTimeout(() => {
            console.log("result2 : ", result.ISBN9782070360024);
          }, "1000");

    }
})

