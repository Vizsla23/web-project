
<h2>Legfrissebb hírek...</h2>

<button class="accordion">Két hét egy mese/novella 2. forduló</button>
<div class="panel">
<img src="./images/smm.jpg">
 <p>Az esemény kezdetének időpontja: 2021.Nov.22 ( H ) 11:00</p>
</div>
<button class="accordion">Kötetbemutató</button>
<div class="panel">
<iframe width="560" height="315" src="https://www.youtube.com/embed/I8Yz8TPZYgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<button class="accordion">Big Bunny promo</button>
<div class="panel">
<video width="400" controls>
 <source src="./video/mov_bbb.mp4" type="video/mp4">
  Your browser does not support HTML video.
</video>

<p>
Forrás: 
<a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.
</p>
</div>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
