const btnItem = document.querySelectorAll(".section_filters_bloc_item");
//const sectionItem = document.querySelectorAll(".section_form_item");

console.log(btnItem);


for (i = 0; i < btnItem.length; ++i) {
    console.log(btnItem);
    btnItem[i].addEventListener("click", () => {
        console.log(btnItem[i]);
        //remove
        btnItem.forEach(element => {
            if (listItems.classList.contains("active")){
                element.classList.remove("active")
            }
        })
        //add
        btnItem[i].classList.add("active");
    });
};