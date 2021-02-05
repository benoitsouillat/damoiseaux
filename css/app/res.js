let damoiseaux = " de la romance des damoiseaux";
let hoehenzoller = " von hoëhenzoller";
let canel = " de can el";
let gentlemind = " of gentle mind";

let path = '/img/';
let jpg = ".jpg";

const whippet = "Whippet";
const female = " Femelle";
const male = " Mâle";
const reforme = " En retraite";


class dog {
    constructor(dogName, dogBirth, dogBreed, dogBreeder, dogSex, dogSurname){

    this.dogName = dogName;
    this.dogBirth = dogBirth;
    this.dogBreed = dogBreed;
    this.dogBreeder = dogBreeder;
    this.dogSex = dogSex;
    this.dogSurname = dogSurname;
    /*this.dogLitter = dogLitter;
    this.dogLitterOne = dogLitterOne;*/
    }
}

let monseigneur = new dog("Monseigneur", "24 Novembre 2016", whippet, damoiseaux, male, "Poopy");
let important = new dog("Important", "08 Avril 2013", whippet, damoiseaux, male, "");
let inamour = new dog("InAmour", "04 Mars 2013", whippet, damoiseaux, male, "Amour");
let philosophe = new dog("Philosophe", "21 Novembre 2019", whippet, damoiseaux, male, "");


let guenolee = new dog("Guenolee", "16 Mars 2011", whippet, damoiseaux, reforme, "");
let hevidence = new dog("Hevidence", "21 Juin 2012", whippet, damoiseaux, reforme, "");
let ideale = new dog("Ideale", "29 Janvier 2013", whippet, damoiseaux, female, "");
let imperiale = new dog("Imperiale", "29 Janvier 2013", whippet, damoiseaux, female, "Pepette");
let intimite = new dog("Intimite", "23 Août 2013", whippet, damoiseaux, female, "'Timité");

let jouvence = new dog("Jouvence", "17 Octobre 2014", whippet, canel, female, "");
let jeunefille = new dog("Jeunefille", "15 Décembre 2014", whippet, damoiseaux, female, "");

let ladydi = new dog("LadyDi", "16 Janvier 2015", whippet, damoiseaux, female, "Didi");
let louisiane = new dog("Louisiane", "23 Mai 2015", whippet, damoiseaux, female, "Louise");

let mamzelle = new dog("MamZelle", "16 Juin 2016", whippet, damoiseaux, female, "");
let merveille = new dog("Merveille", "16 Avril 2016", whippet, damoiseaux, female, "");
let missmonde = new dog("MissMonde", "08 Novembre 2016", whippet, damoiseaux, female, "Missou");
let molly = new dog("Molly", "18 Juin 2016", whippet, damoiseaux, female, "");

let noblesse = new dog("Noblesse", "17 Juillet 2017", whippet, damoiseaux, female, "");
let noriane = new dog("Noriane", "04 Septembre 2017", whippet, damoiseaux, female, "");
let nefertiti = new dog("Nefertiti", "30 Mai 2017", whippet, damoiseaux, female, "Néfer");

let orthense = new dog("Orthense", "12 Mai 2018", whippet, damoiseaux, female, "Tentense");
let obligeance = new dog("Obligeance", "30 Mars 2018", whippet, damoiseaux, female, "Obli");
let oeuvredart = new dog("OeuvredArt", "12 Mai 2018", whippet, damoiseaux, female, "Oeuvre");
let oprecieuse = new dog("Oprecieuse", "22 Mai 2018", whippet, damoiseaux, female, "Précieuse");
let oracle = new dog("Oracle", "17 Décembre 2018", whippet, damoiseaux, female, "");

let prestance = new dog("Prestance", "03 Mars 2019", whippet, damoiseaux, female, "");
let prodige = new dog("Prodige", "21 Novembre 2019", whippet, damoiseaux, female, "");
let platine = new dog("Platine", "02 Avril 2019", whippet, damoiseaux, female, "");
let promesse = new dog("Promesse", "01 Novembre 2019", whippet, damoiseaux, female, "");

let zerotoone = new dog("ZerotoOne", "27 Juillet 2019", whippet, gentlemind, female, "Zazie");


let femaleClass = [guenolee, hevidence, 
    ideale, imperiale, intimite, 
    jouvence, jeunefille,
    ladydi, louisiane,
    mamzelle, merveille, molly, missmonde,
    noblesse, noriane, nefertiti,
    orthense, obligeance, oprecieuse, oeuvredart, oracle, 
    prestance, prodige, platine, promesse, zerotoone
];
let maleClass = [monseigneur, important, inamour, philosophe];
let dogClass = femaleClass.concat(maleClass);




/* ---------------------- FANCYBOX ---------------------------- */

$(document).ready(function() {
    $(".fancybox").fancybox({
        fitToView: false,
        beforeShow: function () {
            this.width = '90%';
            this.height = 576;
        },

        openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    });
});