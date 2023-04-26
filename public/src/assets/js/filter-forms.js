
function filterButton() {
    const targetId = event.target.id;

    const filterClick = document.getElementById(targetId);
    const sectionClick = document.querySelector(`.${targetId}`);

    const filterActive = document.querySelector(".section_filters_bloc_item.active");
    const sectionActive = document.querySelector(".section_form_item.active");

    const filterWidth = filterClick.offsetWidth;
    const filterHover =  document.querySelector(".hover-filter");
    const filterBackground =  document.querySelector(".background-filter");
    console.log(filterBackground);
    console.log(filterWidth);

    filterActive.classList.remove("active");
    filterClick.classList.add("active");

    sectionActive.style.display = "none";
    sectionClick.style.display = "flex";
    setTimeout(() => {
        sectionActive.classList.remove("active");
        sectionClick.classList.add("active");

        filterBackground.style.width = filterWidth + "px";
    }, 10);
}

//filterHover.style.width = filterWidth;
