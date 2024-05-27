let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let collapseOpen = document.querySelector(".ccc");
let collapse = document.querySelector(".coll");
closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange();
  //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    // document.querySelector(".collapse").disabled = false;
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    // document.querySelector(".collapse").disabled = true;

  }

}