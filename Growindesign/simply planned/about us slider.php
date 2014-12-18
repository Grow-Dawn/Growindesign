var num=1
img1 = new Image ()
img1.src = "pictures/IMG_3596bwsm.jpg"
img2 = new Image ()
img2.src = "pictures/IMG_3611sm.jpg"
img3 = new Image ()
img3.src = "pictures/IMG_3694sm.jpg"
img4 = new Image ()
img4.src = "pictures/IMG_3715sm.jpg"

text1 = "Simply black & white"
text2 = "Simply Us"
text3 = "Simply Adorable"
text4 = "Simply Original"

        
function slideshowUp()
{
num=num+1
if (num==5)
{num=1}
document.mypic.src=eval("img"+num+".src")
document.joe.burns.value=eval("text"+num)
}

function slideshowBack()
{
num=num-1
if (num==0)
{num=4}
document.mypic.src=eval("img"+num+".src")
document.joe.burns.value=eval("text"+num)
}


html
<div id="slideshow">
   <div>
     <img src="http://farm6.static.flickr.com/5224/5658667829_2bb7d42a9c_m.jpg">
   </div>
   <div>
     <img src="http://farm6.static.flickr.com/5230/5638093881_a791e4f819_m.jpg">
   </div>
   <div>
     Pretty cool eh? This slide is proof the content can be anything.
   </div>
</div>



css
#slideshow { 
    margin: 50px auto; 
    position: relative; 
    width: 240px; 
    height: 240px; 
    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}

jquery
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);