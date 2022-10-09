// Get all sections that have an ID defined
const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  let scrollY = window.pageYOffset;
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 500;
    sectionId = current.getAttribute("id");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".navbar-collapse a[href*=" + sectionId + "]")
        .classList.add("gradient-box");
    } else {
      document
        .querySelector(".navbar-collapse a[href*=" + sectionId + "]")
        .classList.remove("gradient-box");
    }
  });
}

const btn = document.getElementById("read-more");

let hidden = true;

btn.addEventListener("click", ReadMore);

function InitializeButton(){
  hidden = true;
  document.getElementById("read-more-content").style.display = "none";
  document.getElementById("prelude-content").style.fontSize = "1rem";
}


function ReadMore(){
  
  const content = document.getElementById("read-more-content");

    if(hidden){
        content.style.display = "flex";
        btn.innerText = "Read Less";
        document.getElementById("prelude-content").style.fontSize = "0.8rem";
        hidden = false;
      }else{
        content.style.display = "none";
        document.getElementById("prelude-content").style.fontSize = "1rem";
        btn.innerText = "Read More";
        hidden = true;
    }

}

window.onload = InitializeButton;