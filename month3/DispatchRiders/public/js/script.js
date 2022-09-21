 const map = {
  "Book": "Book",
  "DVD": "DVD",
  "Furniture": "Furniture"
};

function prodType(value) {
  document
    .querySelectorAll(".fieldbox")
    .forEach((node) => (node.style.display = "none"));
  document.getElementById(map[value]).style.display = "block";
  document.getElementById(map[value]).setAttribute('required', '');
  let parent = document.getElementById(map[value]);
  children = parent.querySelectorAll('.child');
  children[0].setAttribute('required', '');
  if(typeof children[1] !== "undefined"){
      children[1].setAttribute('required', '');
  }
  if(typeof children[2] !== "undefined"){
  children[2].setAttribute('required', '');
  }
  
  
}
