<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours jQuery</title>
<style>
/* .p1{
    border: 1px solid black;
}
.p2{
    border: 1px solid red;  
} */

html, body, h1, ul, li, span{
    color: black;
    border: 2px solid green;
    padding: 5px;
    margin: 5px;
    display: block;
}   

</style>

</head>
<body>
<h1>Se déplacer dans le DOM en jQuery</h1> <!-- Ciblage du DOM de la racine du DOM jusqu'au HTML -->
<!-- <p>Element li parent du <span>First span</span></p> -->



<ul>(elt ul n°1) <!-- élément arrière arrière grand-parent de notre span -->
    <li>Premier élément de liste (elt li n°1.1)</li> <!-- élément arrière grand-oncle de notre span -->
    <li>Elément li contenant (elt li n°1.2) <!-- élément arrière grand-parent de notre span -->
        <ul>(elt ul n°2)<!-- élément grand-parent de notre span -->
            <li>une autre liste (elt li n°2.1)</li> <!-- Frère de l'élément li 2.2 et Oncle du span; pas un parents au sens où il ne contient pas notre span-->
            <li>avec notre (elt li n°2.2) <span>span</span></li> <!-- élément parent de notre span -->
        </ul>
    </li>  
    <li>Troisième élément de liste (elt li n°1.3)</li><!-- élément arrière grand-oncle de notre span -->
</ul>



<!-- <h1>Manipulation du DOM HTML</h1>
<label for='c'>Cochez / décochez la case</label>
<input type='checkbox' id='c' checked='checked'><br>

 <h2 class='t'>Utilisation de attr()</h2>
<a>Un lien</a>

<span id='test'></span> -->

<!-- <h1>Manipulation du DOM HTML</h1>

<label for='prenom'>Entrez un prénom : </label>
<input type='text' id='prenom' name='prenom'>
<span id='sp1'></span><br>

<select multiple='multiple'>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
</select>
<span id='sp2'></span> -->
    <!-- <h1>Manipulation du <mark>DOM HTML</mark></h1>

    <span id='test'></span> -->

<!-- 
    <h1>Découverte jquery</h1>
    <p>Lorem, ipsum dolor.</p>
    <p>Lorem, ipsum dolor.</p> -->

    <!-- <form id='formulaire'>
        <select id='liste'>
            <option value='c1' selected='selected'>Choix 1</option>
            <option value='c2'>Choix 2</option>
        </select>
        <input type='submit' value='Envoyer'>
    </form>      -->


                <!-- <fieldset id='fld'>
                    <label for='prenom'> Entrez votre prénom : </label>
                    <input type='text' id='prenom' name='prenom'>



                    <label for='nom'> Entrez votre nom : </label>
                <input type='text' id='nom' name='nom'>
                </fieldset> -->


    <!-- <p class='p1'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, rem!</p>   
    <p class='p2'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cum.</p> -->



    <!-- <label for='prenom'> Entrez votre prénom : </label>
    <input type='text' id='prenom' name='prenom'> -->



    <!-- <p>Dernier caractère tapé : <span id='ascii'></span></p> -->
    <script src="jquery-3.6.0.js"></script>

    <script>
// ----------- syntaxe de base -------------

        // Télécharger jQuery, l'installer à la racine de son dossier ou dans son dossier JS ou inclure l'adresse grâce aux cdn puis l'inclure grace au script dans notre code     
        /*
            Librairie JS, sert à nous simplifier la vie, slogan: write less, do more. manipuler les éléments HTML, les décorer avec du CSS, mettre des effets, ajouter des animations, 
            
            Gestion des événements: ce qu'il se passe sur un clic, un hover, etc...
            
            Pb de Compatibilité de navigateur: caduc avec jQuery

        */


     //   $('.para').hide() ; // cacher le 1er paragraphe avec méthode hide
    // $('selecteur').methode1().methode2().methode3(); // Chaîner des méthodes= juxtaposés des méthodes afin de les appliquées par la suite à notre objet

        // --------------------Gestion d'évènement -------------------------
        // $(document).ready(function(){
        //     $('p').click(function(){
        //         $(this).hide();       // Cache les paragraphes lorsqu'on clique sur la page avec la méthode hide
        //     });   
        // });
  

        // -----------------------Gestion d'evenement liées aux clics--------------------------------------

    //      $(document).ready(function(){
    //     //     $('p2').dbclick(function(){
    //     //        $(this).hide();       // Cache les paragraphes lorsqu'on double clique sur la page avec la méthode hide
    //     //    });       
    //     $('.p2').hide(); // P2 cacher par défaut
        
    //     $('.p1').mouseenter(function(){ // afficher p2 lorsque la souris passe sur p1
    //         $('.p2').show();
    //     });
    //     $('.p1').mouseleave(function(){  // cacher p2 lorsque la souris sort de p1 
    //         $('.p2').hide();    
    //     }); 
    //  });




        // $(document).ready(function(){
        //     $('.p2').hide();



        //     // $('.p1').hover(  // mix mouseenter & mouseleave, on cible p1    
        //     //     function(){$('.p2').show();},  // dés que la souris entre sur p1, on veut que p2 soir afficher-> methode show, la virgule permet de séparer les fonctions
        //     //     function(){$('.p2').hide();}   // lorsque la souris sort de p1, on veut que p2 soit  cacher -> méthode hide
        //     //     );  



        //     $('.p1').mousedown(function(){ // lorsque le bouton de la souris reste enfoncer sur p1
        //         $('.p2').show();
        //     });
        //     // cacher p2 lorsque le clic de la souris est relacher de p1
        //     $('.p1').mouseup(function(){
        //         $('.p2').hide();
        //     }); 
        // });     

//------------------------------ Gestion des évènements liées au clavier ---------------------------------

// $(document).ready(function(){
    // $('#prenom').keydown(function(){
    //     $(this).css('background-color', '#69C'); // changer la couleur du fond de texte en bleu qd une touche est pressé
    // });

    // $('#prenom').keyup(function(){
    //     $(this).css('background-color', '#C72'); // changer la couleur du fond de texte en bleu qd la touche n'est plus pressé
    // }); 



//     $('#prenom').keypress(function(e){   // l'évènement keydown se déclencle tjrs avant keypress    
//         $('#prenom').keypress(function(e){
//             var touche= String.fromCharCode(e.which);
//             $('#ascii').text(touche);   
//         })
//     });
// });       

//------------------------------ Gestion des évènements liées aux Formulaires HTML ---------------------------------

// $(document).ready(function(){
//      $('#prenom').focus(function(){  // lorsqu'on clic sur le champ il devient jaune
//          $(this).css('background-color', 'yellow');  
//      })  
            // $('#fld').focusin(function(){  // qd on clic sur le champ texte le reste du fieldset se colore en jaune / in
            //     $(this).css('background-color', 'yellow');
            // });
    // $('#fld').focusout(function(){  // qd on clic en dehors du fieldset le reste du fieldset se colore en violet / out 
    //     $(this).css('background-color', 'purple');
    // });
//     $('#prenom').blur(function(){  // qd on clic en dehors du fieldset le reste du champ prenom se colore en violet / out idem avec('#fld')
//         $(this).css('background-color', 'purple');  
//     });
// }); 



// $(document).ready(function(){
//     // $('#liste').change(function(){    // changement de valeur, de choix
//     //     alert('Nouvelle option sélectionnée');  
//     // })
//     $('#formulaire').submit(function(){
//         alert('Formulaire envoyé'); 
//     }); 
// }); 
//-------------Gestion d'événements avancées Unfinished!!!!!----------------------------------------

// $(document).ready(function(){
//     $('p').on('click', function(){
//         $(this).hide();  // hide au clic
//     })
// });  


    

// $(document).ready(function(){
    // On récupère la taille de notre titre h1  --> getter 
//     var taille = $('h1').css('font-size', '50px'); // en ajoutant une 2ème valeur , '50px' on set la valeur à 50px --> setter

//     var taille = $('h1').css('font_size');  

//     // On affiche la valeur récupérée
//     $('#test').text(taille); // permet de lire le contenu textuel d'un élément



// var titre = $('h1').text(); // ici on récupère, get avec text sans argument
// $('h1').text('<mark>DOM</mark> manipulé !'); // On cible le mark et ignore , n'interprète pas le reste des balises html; 
// //si on remplace .text par .html tout est pris en compte y compris l'élément mark
// $('#test').text(titre);


    // $('#prenom').keyup(function(){ // On récupère les valeurs de l'input puis on la récupère pour l'afficher dans notre élément span
    //     var valeurInput = $(this).val();
    //     $('#sp1').text(valeurInput);
    // });

    // $('select').change(function(){ // change affiche les potions choisies et ne garde pas en mémoire les anciennes options déjà cliquer
    //     var valeurSelect = $('select').val() || [];
    //     $('#sp2').text(valeurSelect.join(', '));
    // });




    // On récupère la valeur de l'attribut class de h1 et on enferme cette variable dans atth1
    // var atth1 = $('h1').attr('class');
    // // On affiche cette valeur dans notre span
    // $('#test').text('Valeur de class de h1 : ' + atth1);

    // // On modifie la valeur associée à l'attribution class de h2, en donnant 2 arguments dont on souhaite définir la valeur
    // $('h2').attr('class', 'titre');

    // /* On définit 2 attributs href et target pour a et 
    // on leur attribue des valeurs */
    // $('a').attr({
    //     href: 'https://julien-viot.com',
    //     target: '_blank'
    // }); 





//         $('#c').change(function(){  //Permet de voir si la case a été cocher (valeur attr) et 
//             var v = $(this);
//             $('#test').html(
//                 'Valeur attribut : ' + v.attr('checked') + // attr: définit ou récupère la valeur des attributs
//                 '<br> Valeur propriété : ' + v.prop('checked')  // prop: récupère ou définit les valeurs des propriétés du DOM
//             );
//         });
//  });        

//--------------------------- Se déplacer dans DOM en jQuery ---------------------------------


$(document).ready(function(){
    // $('span').parent().css('color', 'red'); // parent: cible un élément et en change son style css
    $('span').parents().css({
        'color':'blue',
        'border': '2px solid orange'
    });
});

    </script>
</body>
</html>