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
            success : function(code_html, status){
                $(code_html).appendTo("#commentaires");
            },
            error : function(resulta, status, erreur){

            },
            complete : function(resultat, statut){

            }
        });

    });
}
