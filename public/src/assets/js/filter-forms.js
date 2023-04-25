const createElements = document.getElementById("formCreate");
const maintenanceElements = document.getElementById("formMaintenance");
const statElements = document.getElementById("formStat");


function filterButton() {
    const targetId = event.target.id;
    document.querySelector(".section_filters_bloc_item.active").classList.remove("active");
    document.getElementById(targetId).classList.add("active");

    document.querySelector(".section_form_item.active").classList.remove("active");
    document.querySelector(`.${targetId}`).classList.add("active");
}

