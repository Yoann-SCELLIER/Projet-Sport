// Création de constante
const nomInput = document.querySelector("#formNom");
const prenomInput = document.querySelector("#formPrenom");
const telInput = document.querySelector("#formTel");
const mailInput = document.querySelector("#formMail");
const subjetInput = document.querySelector("#formSujet");
const messageINput = document.querySelector("#formMessage");

// Création de variable "false"
let nomValide = false;
let prenomValid = false;
let telValid = false;
let mailValid = false;
let sujetValid = false;
let messageValid = false;

// UserRegex : ^[a-zA-Z-] : Commence par une lettre (majuscule ou minuscule) ou un tiret. 
// {3,23} : Doit contenir entre 3 et 23 de ces caractères. 
// $ : Fin de la chaîne.
const userRegex = /^[a-zA-Z-]{3,23}$/;


// emailRegex : ^[a-zA-Z0-9._%+-]+ : Commence par un ou plusieurs caractères alphanumériques ou . _ % + -.
// @ : Contient un symbole @.
// [a-zA-Z0-9.-]+ : Suivi par un ou plusieurs caractères alphanumériques ou . -.
// .[a-zA-Z]{2,} : Se termine par un point suivi d'au moins deux lettres.
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


// PhoneNumberRegex : ^+ : Commence par un signe plus (+). 
// (?:\d{1,3})? : Suivi facultativement par 1 à 3 chiffres (indicatif de pays). 
// \d{10} : Suivi de 10 chiffres.
const phoneNumberRegex = /^\+(?:\d{1,3})?\d{10}$/;

// EmailRegex: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
// ^[a-zA-Z0-9._%+-]+ : Commence par un ou plusieurs caractères alphanumériques ou . _ % + -.
// @ : Contient un symbole @.
// [a-zA-Z0-9.-]+ : Suivi par un ou plusieurs caractères alphanumériques ou . -.
// .[a-zA-Z]{2,} : Se termine par un point suivi d'au moins deux lettres.

const sujetRegex = /^[^<>{}$]{3,200}$/;

const messageRegex = /^[^<>{}$]{24,}$/;

function addClass(input, regex) {
    const inputTest = regex.test(input.value);
    if (inputTest) {
        input.classList.remove("is-invalid");
        input.classList.add("is-valid");
    } else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
    }
}
addClass(nomInput, userRegex);


     nomInput.addEventListener ('input',)
