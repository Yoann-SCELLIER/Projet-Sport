// Création de constante avec "querySelector" qui selectionne les éléments.
const nomInput = document.querySelector("#formNom");
const prenomInput = document.querySelector("#formPrenom");
const telInput = document.querySelector("#formTelephone");
const mailInput = document.querySelector("#formEmail");
const subjetInput = document.querySelector("#formSujet");
const messageInput = document.querySelector("#formMessage");
const submitInput = document.querySelector("#formId");


// Création de variable de validation pour garder une trace de la validation, initialement elles sont toutes "false".
let nomValid = false;
let prenomValid = false;
let telValid = false;
let mailValid = false;
let sujetValid = false;
let messageValid = false;

// Création de const "constante" regex qui imposera des conditions 

// Impose trois caractère à vingt-trois maximum, majuscule et minuscule accepter pour valider le formulaire "NOM" et "PRENOM"
const userRegex = /^[a-zA-Z-]{3,23}$/;

// Les caractère misnuscule et majuscule ainsi que les chiffres et certains caractère "spéciaux" son accepter pour le "MAIL" et impose minimum deux caractère pour le nom de domaine (.com / .fr) et le valider
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

// Ajout de "?" après le "+" pour dire peut être différent et, supprimer "1" par "0" pour accepter le 06 et limite un total de 10 chiffre pour valider le formulaire du téléphone.
const phoneNumberRegex = /^\+?(?:\d{0,3})?\d{10}$/; 

// Accepte des caractères "spéciaux" et impose trois caractère minimum et 200 maximum pour valider le formulaire sujet.
const sujetRegex = /^[^<>{}$]{3,200}$/;

// Accepte des caractères "spéciaux" et limite le formulaire à vingt-quatre caractère minimum pour validation
const messageRegex = /^[^<>{}$]{24,}$/;


// Création d'une fonction addClass qui prend dans les paramètres "input" & "regex"
function addClass(input, regex, value) {

// Création d'une condition qui va vérifié si c'est "true" ou "false"
// Si c'est "true" (vrai) elle passe dans la condition "if"
    if (regex.test(value)) {
        input.classList.add("is-valid"); // add pour ajouter vert
        input.classList.remove("is-invalid"); // remove pour ajouter rouge

// Si c'est "false" (faux) elle passe dans la condition "else"
    } else {
        input.classList.remove("is-valid"); // remove pour retirer le vert
        input.classList.add("is-invalid"); // add pour rajouter le rouge"
    }
}

// Création d'écoute d'évenement pour vérifier si le formulaire est "false" ou "true".
// Formulaire "NOM"
nomInput.addEventListener("input",function (e){
    addClass(nomInput,userRegex, e.target.value)
    nomInput.classList.contains("is-valid") ? nomValid = true : nomValid = false;
});

// Formulaire "PRENOM"
prenomInput.addEventListener("input",function (e){
    addClass(prenomInput,userRegex, e.target.value)
    prenomInput.classList.contains("is-valid") ? prenomValid = true : prenomValid = false;
});

// Formulaire "TELEPHONE"
telInput.addEventListener("input",function (e){
    addClass(telInput,phoneNumberRegex, e.target.value)
    telInput.classList.contains("is-valid") ? telValid = true : telValid = false;
});

// Formulaire "MAIL"
mailInput.addEventListener("input",function (e){
    addClass(mailInput,emailRegex, e.target.value)
    mailInput.classList.contains("is-valid") ? mailValid = true : mailValid = false;
});

// Formulaire "SUJET"
subjetInput.addEventListener("input",function (e){
    addClass(subjetInput,sujetRegex, e.target.value)
    subjetInput.classList.contains("is-valid") ? sujetValid = true : sujetValid = false;
});

// Formulaire "MESSAGE"
messageInput.addEventListener("input",function (e){
    addClass(messageInput,messageRegex, e.target.value)
    messageInput.classList.contains("is-valid") ? messageValid = true : messageValid = false;
});

// Formulaire "SUBMIT"
submitInput.addEventListener("submit",function (e){
    e.preventDefault();
    if (nomValid && prenomValid && telValid && mailValid && sujetValid && messageValid) {
// API mail
        Email.send({
            SecureToken : "de2ae524-5e5e-4fae-9f63-34037862a6de",
            To : 'scellier.yoann@gmail.com',
            From : "scellier.yoann@gmail.com",
            Subject : "This is the subject",
            Body : "And this is the body"
        }).then(
          message => alert(message)
        );        
    } else {
        alert("Pas du tout okay!")
    }
});










// Rappel de la fonction en dehors des conditions
// addClass(nomInput, userRegex);










// Correction 

// monInput.addEventListener("input",function (e){
    //addClass(nomInput,UserRegex,e.target.value)

    //is-valid
    //rouge-> invalide = false
    //vert-> valid = true

    //ternaire
    //ma condition ? = valeur du si : = valeur du sinon
    //nomInput.classList.contains("is-valid") ? nomValid = true : nomValid = false;
    //if(nomInput.classList.contains("is-valid")){
        //nomValid = true;
        //}
//})