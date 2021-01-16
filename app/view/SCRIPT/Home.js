var prevScroll = window.pageYOffset;
window.onscroll = function(){
    var currScroll = window.pageYOffset;
    var elem = document.querySelector('.NavBar');
    if (prevScroll > currScroll || currScroll == 0){
        elem.style.top = '0';
    }
    else{
        elem.style.top = "-80px";
    }
    prevScroll = currScroll;
}