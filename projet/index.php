<?php
include 'bdd.php';
include 'functions.php';

    // Init session.
session_start();


?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.png">
    <title>Market Graph</title>

</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="index.js"></script>
<script src="jquery.js"></script>
    <div class="img">
        <img src="assets/images/logo.png"></img>
    </div>
    <div id="wrap">
        <header class="header">
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                
                <ul id="menu">
                    <h1><a href="#">Some Graphs</a></h1>
                    <a href="#manageMoney"><li>How I Manage Money</li></a>
                    <a href="#stonksofBitCoin"><li>Stonks</li></a>
                    <a href="#continents"><li>Continents Area</li></a>
                    <a href="#salmonProduction"><li>Salmon Production</li></a>

                    <h1><a href="#LoremIpsum">Lorem Ipsum</a></h1>
                    <a href="#Lorem ipsum"><li>Lorem ipsum...</li></a>
                    <a href="#Integer consectetur"><li>Integer consectetur...</li></a>
                    <a href="#Vivamus interdum"><li>Vivamus interdum...</li></a>
                    <a href="#Nulla maximus"><li>Nulla maximus...</li></a>
                    <a href="#Duis vel"><li>Duis vel...</li></a>
                    
                    <h1><a href="https://marketpay.eu/" target="_blank"><li>Market Pay</li></a></h1>
                </ul>
            </div>
        </nav>
        </header>
        <section>
            <main class="main">

                <div class="formulaire">
                    <form name="inscription" method="POST">
                        Nom : <input type="text" name="pseudo"/>
                        <input type="submit" name="submit" value=<?php  ?>/>
                    </form>
                </div>

                <div class="Graphs">
                    <h2>There are some graphs</h2>
                    </br>
                    </br>
                    <p id="test">
                        <iframe id="manageMoney" src="graphs/graph1.php" height="400" width="600"></iframe>
                        <iframe id="stonksofBitCoin" src="graphs/graph2.php" height="400" width="600"></iframe>
                    </p>
                    <p>
                        <iframe id="continents" src="graphs/graph3.php" height="400" width="600"></iframe>
                        <iframe id="salmonProduction" src="graphs/graph4.php" height="400" width="600"></iframe>
                    </p>
                    </br>
                    </br>
                </div>

                <div class="lorem">
                    <h2 id="LoremIpsum">Lorem Ipsum<h2>
                    </br>
                    <p id="Lorem ipsum">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut enim vel sapien porta posuere. Duis dapibus ipsum ante. In aliquam sem ut odio elementum placerat. Fusce at nibh iaculis, auctor mauris ac, aliquet lacus. Nulla ex dolor, tristique at iaculis id, commodo a dui. Praesent nec feugiat diam. Morbi mollis dignissim nisi, ut rutrum dolor hendrerit vel. Curabitur luctus odio est, sit amet malesuada velit vulputate a. Quisque congue et nulla a placerat. Sed tempor convallis facilisis. Curabitur egestas euismod posuere. Curabitur semper lacus placerat odio dignissim suscipit. Maecenas consectetur, est sit amet interdum rutrum, ipsum ex molestie nibh, in semper orci lacus a risus. Nullam sodales ipsum laoreet consequat porttitor. Vivamus ut magna ut nunc vulputate scelerisque vel at mauris.
                    </p>
                    <p id="Integer consectetur">
                        Integer consectetur nisi id iaculis dictum. Quisque non nisi in turpis venenatis maximus. Pellentesque varius purus enim, eget dapibus ipsum dignissim in. Quisque dignissim neque metus, nec euismod lorem accumsan ac. Vivamus fermentum feugiat nulla venenatis pulvinar. Donec ut fringilla urna. Nulla facilisi. Maecenas ac tincidunt eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent tincidunt est ac efficitur semper. Quisque at mauris suscipit, dignissim lacus ac, tempus metus. Donec odio lectus, pharetra eget nulla nec, sollicitudin rutrum dolor. Cras fringilla sapien eros, eget molestie sem laoreet vitae. Nulla vestibulum auctor velit ac vestibulum. Suspendisse in eleifend erat.
                    </p>
                    <p id="Vivamus interdum">
                        Vivamus interdum nisl finibus, bibendum ligula non, condimentum sem. Vestibulum ut elit eros. Fusce lobortis lorem euismod tristique commodo. Cras volutpat leo justo, in malesuada ex fermentum nec. Sed hendrerit turpis diam, posuere viverra sapien dignissim quis. Aliquam placerat ac massa at ullamcorper. Aliquam laoreet tincidunt fringilla. Nunc maximus urna a erat consequat, ut lobortis lorem iaculis. Ut vehicula et enim rutrum pellentesque. Nulla sit amet mi enim. In hac habitasse platea dictumst. Curabitur placerat gravida tempus. Cras in pharetra elit.
                    </p>
                    <p id="Nulla maximus">
                        Nulla maximus velit eros, vitae venenatis mi volutpat ut. Maecenas vel felis eget nisl porta luctus non et erat. In ullamcorper nulla ac rhoncus iaculis. Morbi eget laoreet sem. Sed ac convallis mauris, vel interdum eros. Praesent ac turpis feugiat, dignissim nunc vel, mollis nibh. Nulla vulputate gravida accumsan. Quisque dui mi, lacinia ac blandit a, varius eget elit. Aliquam erat orci, efficitur sit amet justo sit amet, dignissim mattis arcu. Vivamus pretium eros non lacus interdum condimentum. Ut quis rhoncus ex.
                    </p>
                    <p id="Duis vel">
                        Duis vel neque ac libero laoreet tempus in in dui. Pellentesque sed vehicula quam. Nunc lobortis turpis lacus, molestie feugiat velit ultrices nec. Nunc vel interdum turpis. Fusce quis eleifend risus. Curabitur sit amet purus vel lectus congue pretium sed vehicula augue. Curabitur a congue orci. Cras egestas, ex eu consectetur eleifend, tortor mauris tincidunt risus, ac ultrices purus sem at massa.
                    </p>  
                </div>

            </main>
        </section>
    </div>
<!-- 
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
  -->
</body>
<footer>
    © 2021 Market Pay, all rights reserved
</footer>