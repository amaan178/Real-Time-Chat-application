const searchBar = document.querySelector(".search input"),
    searchIcon = document.querySelector(".search button");

searchIcon.onclick = ()=>{
    searchBar.classList.toggle("show");
    searchIcon.classList.toggle("active");
    searchBar.focus();
    if(searchBar.classList.contains("active")){
        searchBar.value = "";
        searchBar.classList.remove("active");
    }
}