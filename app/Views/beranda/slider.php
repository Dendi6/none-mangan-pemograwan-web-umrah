<style>
  .atas{
    background: radial-gradient(circle at top left, #eccd55, #f3e982);    
    /*background-color: #eccd55;*/
    height: 50vn;

  }
</style>
<section class="atas">

<div class="container">
    <div class="slider">
        <ul class="slides radius-2 z-depth-3">
            <li>
                <img src="images/promosi/lakse.jfif" class="radius-2"> <!-- random image -->
                <div class="caption center-align">
                    <h3><b>Yuks Makan</b></h3>
                    <h5 class="light grey-text text-lighten-3">Mangan Kepri solusi untuk anda</h5>
                </div>
            </li>
            <li>
                <img src="images/promosi/ikan-salai.jpg" class="radius-2"> <!-- random image -->
                <div class="caption left-align">
                    <h3><b>Manjakan Lidah Anda<b></h3>
                    <h5 class="light grey-text text-lighten-3">Bersama dengan Mangan Kepri</h5>
                </div>
            </li>
            
        </ul>
    </div>
</div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.slider');
        M.Slider.init(elems);
    });
</script>