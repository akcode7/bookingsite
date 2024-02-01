// header mobile menu script

 
const btn = document.querySelector(".mobile-menu-button");
const closebtn = document.querySelector(".mobile-menu-close-btn");
const menu = document.querySelector(".mobile-menu");
const btnsoc= [closebtn, btn];
btnsoc.forEach(buttonsoc => {
buttonsoc.addEventListener("click", () => {
menu.classList.toggle("hidden");
   });
});

// header mobile menu ends

// dropdowntoggle checkout

function toggledropdown(){
   let dropdown = document.querySelector('#dropdownbtn #dropdown');
   dropdown.classList.toggle('hidden');
}

function toggledropdown2(){
   let dropdown = document.querySelector('#dropdownbtn2 #dropdown2');
   dropdown.classList.toggle('hidden');
};



// dropdowntoggle checkout ends




