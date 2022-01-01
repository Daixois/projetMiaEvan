const cartes = document.querySelectorAll('.carte');

let carteRetournee = false;
let premiereCarte, secondeCarte;
let verouillage = false;
// When we click on a card, we want return it
cartes.forEach(carte => {
    carte.addEventListener('click', retourneCarte)
})
// Create function to return the card
function retourneCarte(){

    if(verouillage) return;

    this.childNodes[1].classList.toggle('active');

    if(!carteRetournee){

        carteRetournee = true;
        premiereCarte = this;
        return;
    }

    carteRetournee = false;
    secondeCarte = this;

    correspondance();
}
// Compare two returned cards.If they are similar it's ok. If not new try after 1500 sec

function correspondance(){

    if(premiereCarte.getAttribute('data-attr') === secondeCarte.getAttribute('data-attr')) {

        premiereCarte.removeEventListener('click', retourneCarte);
        secondeCarte.removeEventListener('click', retourneCarte);

    } else {
        verouillage = true;
        setTimeout(() => {

            premiereCarte.childNodes[1].classList.remove('active');
            secondeCarte.childNodes[1].classList.remove('active');

            verouillage = false;
        }, 1500)
    }

}
// Random place for card each game
function aleatoire(){
    cartes.forEach(card => {
        let randomPos = Math.floor(Math.random() * 12);
        card.style.order = randomPos;
    })
}
aleatoire();