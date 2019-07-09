function numToLettre(nombre){
    if(isNaN(nombre) || nombre < 0 || 999 < nombre){
        return 'Veuiller entre un nombre compris entre 0 et 999';
    }

    var unitsToLettre = ['','un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'];
    var dixToLettre = ['', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante', 'quatre-vingt', 'quatre-vingt'];

    var unite = nombre % 10, // ex : 365 % 10 = 5
        dixaine = (nombre %100 - unite) / 10 // ex : 6
        centaine = (nombre % 1000 - nombre % 100 ) / 100; // ex : 3

    var uniteLettre , dixLettre, centLettre;

    if(nombre === 0){
        return 'zero';
    } else {
        uniteLettre = (unite === 1 && dixaine > 0 && dixaine !== 8 ? 'et-' : '') + unitsToLettre[unite];

        if(dixaine === 1 && unite > 0){
            dixLettre = unitsToLettre[10 + unite];
            uniteLettre='';
        } else if (dixaine === 7 || dixaine === 9){
            dixLettre = dixToLettre[dixaine]+'-'+(dixaine === 7 && unite === 1 ? 'et-':'')+uniteLettre[10 + unite];
            uniteLettre='';
        } else{
            dixLettre = dixToLettre[dixaine];
        }
        dixLettre += (unite === 0 && dixaine === 8 ? 's' : '');

        centLettre = (centaine > 1 ? unitsToLettre[centaine] + '-' : '') + (centaine > 0 ? 'cent' : '') + (centaine > 1 && dixaine == 0 && unite == 0 ? 's' : '');

        return centLettre + (centLettre && dixLettre ? '-': '') + dixLettre + (centLettre && uniteLettre || dixLettre && uniteLettre ? '-' : '') + uniteLettre;
    }
}

var entree;

while (entree = prompt('Entree un nombre')){
    alert(numToLettre(parseInt(entree, 10)));
}