function filterButton() {
    const targetId = event.target.id;

    const filterClick = document.getElementById(targetId);
    const sectionClick = document.querySelector(`.${targetId}`);

    const filterActive = document.querySelector(".section_filters_bloc_item.active");
    const sectionActive = document.querySelector(".section_form_item.active");

    const filterWidth = filterClick.offsetWidth;
    const filterHover =  document.querySelector(".hover-filter");
    const filterBackground =  document.querySelector(".background-filter");

    filterActive.classList.remove("active");
    filterClick.classList.add("active");

    sectionActive.style.display = "none";
    sectionClick.style.display = "flex";
    setTimeout(() => {
        sectionActive.classList.remove("active");
        sectionClick.classList.add("active");

        filterBackground.style.width = filterWidth + "px";
    }, 100);


    //local storage
    localStorage.setItem("buttonActive", targetId);
}

//local storage
function checkButtonActive() {
    const lastItemId = localStorage.getItem("buttonActive");

    if (lastItemId){
        document.getElementById(lastItemId).classList.add("active");
        document.querySelector(`.${lastItemId}`).classList.add("active");

        const filterClickTest = document.getElementById(lastItemId);
        const filterWidth = filterClickTest.offsetWidth;
        const filterBackground =  document.querySelector(".background-filter");
        filterBackground.style.width = filterWidth + "px";
    } else{
        document.getElementById("btnCreate").classList.add("active");
        document.getElementById("formCreate").classList.add("active");
    }
};
setTimeout(() => {
    checkButtonActive();
}, 400);



//session storage
function scrollDlBackup() {
    sessionStorage.setItem("dlBackup", "oui");
};

if (sessionStorage.getItem("dlBackup")){
    //scroll
    const formDlBackup = document.getElementById("dl-backup");
    setTimeout(() => {
        formDlBackup.scrollIntoView();
        sessionStorage.clear();
    }, 400);
}


//filterHover.style.width = filterWidth;
