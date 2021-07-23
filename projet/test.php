<?php

include 'bdd.php';
include 'index.php';
include 'functions.php';

function getData(){
    jQuery("#index").click(getDAta(){
     
        $.ajax({
           url : 'index.php',
           type : 'GET',
           dataType : 'json',
           success : function(code_html, statut){
               $(code_html).appendTo("#commentaires");
            },
            error : function(resultat, statut, erreur){ 
            },
            complete : function(resultat, statut){
            }
        });

    });
}

