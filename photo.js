function changeImage(){
    var image = document.getElementById("photo")
    if(image.src.match("history1.jpg")){
        image.src = "history2.jpg";
    }
    else{
        image.src = "history1.jpg";
    }
}