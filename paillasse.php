<?php 
    $name = "paillasse";
    require ('include/header.php');
?>

<body id="wrapper">
    <div class="top">
        <div class="placard">
        <div class="drag" class="ui-widget-content">
            <img src="img/L.png" alt="">
        </div>
        </div>
        <div class="placard"></div>
        <div class="placard"></div>
    </div>

    <div class="vide">
        <div class="prise"></div>
        <div class="prise">
       <?php 
       if (false) {
           echo '<img src="img/flammeOFF.png" alt="">';
       } else {
        echo '<img src="img/flammeON.png" alt="">';
       }
       ?>
       </div>
        <div class="prise"></div>
        <div></div>
    </div class="">

    <div class="centre">
        <div class="planTravail">
        
        </div>
        <div class="lavabo"></div>
    </div>

    <div class="bas">
        <div class="placard-1"></div>
        <div class="poubelle"></div>
        <div class="poubelle"></div>
        <div class="poubelle"></div>
        <div class="placard-1"></div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>