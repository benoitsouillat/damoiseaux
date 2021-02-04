let fiche = document.getElementById("dog-card");
let image = document.getElementById("dog-card-img");
let info = document.getElementById("dog-info");
let dogActive;
let nextDog = document.getElementById("next-dog");

let figures = document.getElementsByClassName('vignet-dog');

const createBlock = (name) => {

    dogClass.forEach(elm => {
        if (elm.dogName.toLowerCase() === name)
        {
            fiche.classList.remove('hidden');

            if (elm.dogSurname === "") {
                info.children[0].textContent = ' ' + elm.dogName + '  ' + elm.dogBreeder;
            }
            else if (elm.dogSurname) {
                if (elm.dogSex === " mâle")
                {
                info.children[0].textContent = ' ' + elm.dogName + '  ' + elm.dogBreeder + ' - dit : ' + elm.dogSurname;
                }
                else {
                info.children[0].textContent = ' ' + elm.dogName + '  ' + elm.dogBreeder + ' - dite : ' + elm.dogSurname;
                }
            }

            if (elm.dogSex === male)
            {
                info.children[1].textContent = " Né le " + elm.dogBirth;
                info.children[2].classList.remove("fa-venus");
                info.children[2].classList.remove("fa-angellist");
                info.children[2].classList.add("fa-mars");
            }
            else if (elm.dogSex === reforme)
            {
                info.children[1].textContent = " Né le " + elm.dogBirth;
                info.children[2].classList.remove("fa-venus");
                info.children[2].classList.remove("fa-mars");
                info.children[2].classList.add("fa-angellist");
            }
            else 
            {
                info.children[1].textContent = " Née le " + elm.dogBirth;
                info.children[2].classList.remove("fa-mars");
                info.children[2].classList.remove("fa-angellist");
                info.children[2].classList.add("fa-venus");
            }
            info.children[0].classList.add("fa-paw");
            info.children[1].classList.add("fa-calendar-check");
            info.children[2].textContent = elm.dogSex;
            /*
            if (elm.dogLitter === true)
            {
                info.children[3].classList.remove("hidden");
                info.children[3].href = elm.dogName.toLowerCase() + '1.php';
            }
            else
            {
                info.children[3].classList.add("hidden");
            }
            */
            
            info.children[3].rel = elm.dogName.toLowerCase();
            info.children[3].href = path + elm.dogName.toLowerCase() + '/' + elm.dogName.toLowerCase() + '-pres' + jpg;

            image.src = path + elm.dogName.toLowerCase() + '/' + elm.dogName.toLowerCase() + '-pres' + jpg;
            image.alt = elm.dogName;
            dogActive = elm.dogName;
        }
    });
}

const checkName = (name) => {
    dogClass.forEach(elm => {
        if (elm.dogName.toLowerCase() === name)
            createBlock(name);
    });
}

const figureIdCatch = (e) => {
    let figureId = e.target.closest('a').id;
        checkName(figureId);
}

for (let i = 0; i < figures.length; i++)
{
    figures[i].addEventListener("click", figureIdCatch);
}


const nextDogFct = () => {
    for (let i = 0; i < dogClass.length; i++)
    {
        if (dogActive === dogClass[i].dogName)
        {
            if (i+1 === dogClass.length)
            {
                i = -1;
            }
            let name = dogClass[i+1].dogName.toLowerCase();
            createBlock(name);
            break;
        }
    }
}

nextDog.addEventListener("click", nextDogFct);