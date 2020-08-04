// // Permet de les bouger indépendamment les uns des autres
// $('.dragLeft').each(function() {
// 	$(this).draggable();
//   });

// // Changement de l'opacité sur click (pour faire comme si ils étaient derrière la vitre)
// $('.dragLeft').on( "click", function() {
// 	$(this).find('img').css({
// 		"opacity": "100"
// 	});
// });				
// // /**
// //  * Création d'une aide visuelle pendant le déplacement d'un élément
// //  * @return {[type]} [description]
// //  */
// // function seeHelp() {
// //     return $("<div>", {
// //         css: {
// //             border: "4px dashed #DF0101",
// //             opacity: 0.8,
// //             height: 110,
// //             width: 110
// //         }
// //     });
// // }

// // Empêche le zoom
// $(document).ready(function(){
// 	$(document).keydown(function(event) {
// 	    	    if (event.ctrlKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
//          alert('disabling zooming'); 
// 		event.preventDefault();
// 		// 107 Num Key  +
// 		//109 Num Key  -
// 		//173 Min Key  hyphen/underscor Hey
// 		// 61 Plus key  +/=
// 	     }
// 	});

// 	$(window).bind('mousewheel DOMMouseScroll', function (event) {
// 	       if (event.ctrlKey == true) {
//            alert('Zoom désactivé :-)'); 
// 		   event.preventDefault();
// 	       }
// 	});
// });




function dragstart_handler(ev) {
 // On ajoute l'identifiant de l'élément cible à l'objet de transfert
 ev.dataTransfer.setData("application/my-app", ev.target.id);
 ev.dataTransfer.dropEffect = "move";
}
function dragover_handler(ev) {
 ev.preventDefault();
 ev.dataTransfer.dropEffect = "move"
}
function drop_handler(ev) {
 ev.preventDefault();
 // On obtient l'identifiant de la cible et on ajoute l'élément déplacé
 // au DOM de la cible
 var data = ev.dataTransfer.getData("application/my-app");
 ev.target.appendChild(document.getElementById(data));
}




