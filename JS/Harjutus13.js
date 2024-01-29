<p id="eemaldaID" attr="Siia muu tekst"></p>

// Atribuutide eemaldamine, muutmine ja konsoolis kuvamine
const element = document.getElementById('eemaldaID');

// Atribuudi eemaldamine
element.removeAttribute('id');

// Atribuudi muutmine
element.setAttribute('attr', 'Sinu nimi');

// Konsoolis atribuudi väärtuse kuvamine
console.log(element.getAttribute('attr'));

document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        const title = card.querySelector('.card-title');
        const description = card.querySelector('.card-text');

        const dataTitle = card.querySelector('img').getAttribute('data-title');
        const dataDescription = card.querySelector('img').getAttribute('data-description');

        title.textContent = dataTitle;
        description.textContent = dataDescription;
    });
});

