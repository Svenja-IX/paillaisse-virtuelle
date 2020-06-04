$(function() {
    // création d'un élément drag / drop
    $("#drag1").draggable({
        cursor: "move", // pour modifier le curseur de déplacement
        //cursorAt: {top: +20, left: +20},  // pour modifier la position du curseur
        containment: 'parent' // limite le déplacement à une zone
            //helper: "clone" // duplique l'élément à déplacer
            //revert: true, // fait revenir l'élément déplacer à sa position de départ
            //revertDuration: 300 // en ms
            //axis: "y" // limite le déplacement sur un axe (x ou y)
            //helper: seeHelp // ajoute une aide pendant le déplacement
    });
});
/**
 * Création d'une aide visuelle pendant le déplacement d'un élément
 * @return {[type]} [description]
 */
function seeHelp() {
    return $("<div>", {
        css: {
            border: "4px dashed #DF0101",
            opacity: 0.8,
            height: 110,
            width: 110
        }
    });
}