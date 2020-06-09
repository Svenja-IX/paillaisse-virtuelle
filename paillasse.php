<?php 
    $name = "paillasse";
    require ('include/header.php');
?>

<body>
    <main id="wrapper">
    <div class="top">
        <div class="placard">

        <div class="dragLeft" class="ui-widget-content" id="pro">
        Pro-pipette
        </div>

        <div class="dragLeft" class="ui-widget-content" id="pipette">
        Pipette
        </div>

        <div class="dragLeft" class="ui-widget-content" id="becher">
        Becher
        </div>

        <div class="dragLeft" class="ui-widget-content" id="fiole-jauge">
        fiole jaugée
        </div>

        <div class="dragLeft" class="ui-widget-content" id="pisette">
        pisette (eau distillé)
        </div>

        <div class="dragLeft" class="ui-widget-content" id="solution-mere">
        solution mère
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
    </main>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="scripts/reac.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>



        <!-- <div class="dragLeft" class="ui-widget-content">
            <img src="img/O.png" alt="">
        </div>
        <div class="dragLeft" class="ui-widget-content">
            <img src="img/R.png" alt="">
        </div>
        <div class="dragLeft" class="ui-widget-content">
            <img src="img/B.png" alt="">
        </div>
        <div class="dragLeft" class="ui-widget-content">
            <img src="img/pissette.png" alt="">
        </div>
        <div class="dragLeft" class="ui-widget-content">
            <img src="img/becher_2.png" alt="">
        </div>

        <div class="dragLeft" class="ui-widget-content">
            <img src="img/pipette_jauge.png" alt="">
        </div>

        <div class="dragLeft" class="ui-widget-content">
            <img src="img/soude.png" alt="">
        </div>

        <div class="dragLeft" class="ui-widget-content">
            <img src="img/h2o.png" alt="">
        </div>

        <div class="dragLeft" class="ui-widget-content">
            <img src="img/bec_vide.png" alt="">
        </div> -->