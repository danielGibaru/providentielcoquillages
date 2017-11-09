    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/assets/img/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>nacre</h1>
                </div>
            </div>
            <!-- <div class="item">
                <img src="/assets/img/2.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div> -->
            <div class="item">
                <img src="/assets/img/2.jpg" alt="...">
                <div class="carousel-caption"></div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div id="list" class="list-group">
                  <button type="button" class="list-group-item">Visage</button>
                  <button type="button" class="list-group-item">Corps</button>
                  <button type="button" class="list-group-item">Hygiene</button>
                  <button type="button" class="list-group-item">cappilaire</button>
                  <button type="button" class="list-group-item">tous nos produits</button>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <?php

                for ($i=0;$i<=count($Produit)-1;$i++){
                    $e=$i+1;
                    echo "<div><img id='picture' class='thumbnail col-md-1' src='/assets/img/a".$e.".jpg' alt=''><div id='black'>";
                    echo "</div></div>";
                } ?>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#picture").click(function(){
                $(this).children("#plus").show();
        });

    </script>
