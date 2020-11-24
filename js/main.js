var img = document.querySelectorAll(".pics .img-fluid");
var close_ = document.getElementById("close_");
var close_wsp = document.getElementById("close_wsp");
for (let index = 0; index < img.length; index++) {
  
  img[index].addEventListener("click",function(){
    var attr = this.getAttribute("src");
    document.getElementById("img").setAttribute("src",attr);
    document.getElementById("modal_img").classList.add("active");
  })
  
};

close_.addEventListener("click",function(){
  document.getElementById("modal_img").classList.remove("active");
});

close_wsp.addEventListener("click",function(e){
  e.preventDefault();
  document.querySelector(".msg").classList.add("none");
})