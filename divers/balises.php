<?php


/////////////////////////////////////////////////////////////////////////////////////////////////////////LIEN <a></a>
/** function lien($link, $texte, $attributes=array())
 *
 * Créer un lien <a></a>
 * @param  string $link                 Lien url/relatif/absolue
 * @param  string $texte                titre du lien (ce qui sera affiché)
 * @param  array  [$attributes=[]] Les eventuelles attribues
 * @return string une balise <a></a>
 *                    
 ----Exemple d'utilisation :
 echo lien("http://www.google.fr",
           "google",
           array("class"=>"red",
                 "target"=>"_blank"
                )
          );
 *
 ----Affiche :
 <a href="http://www.google.fr" class="red" target="_blank">google</a>
 *
 */
function lien($link, $texte, $attributes=[]) {
    $o = "";
    foreach ($attributes as $k=>$v)
        $o = $o . "$k='$v'";
    return "<a href='$link' $o>$texte</a>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////ITEM <li></li>
/**function item($c, $attributes=array())
 *
 * Crée un <li></li> (SANS LE <UL>)
 * @param  string $c                    Texte dans le li
 * @param  array  [$attributes=[]] Les eventuelles attribues
 * @return string return <li><li>
 *                    
 ----Exemple d'utilisation :
 echo item("fez",
            array("class"=>"red",
                  "id"=>"1"
                 )
          );
 *
 ----Affiche :
 <li class="red" id="1">fez</li>
 *
 */
function item($c, $attributes=[]) {
    $o = "";
    foreach ($attributes as $k=>$v)
        $o = $o . "$k='$v'";
    return "<li $o>$c</li>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////TABLE <tbody><tr><td></td></tr></tbody>
/** function table($tableau)
 * Créer  <tbody><tr><td></td></tr></tbody>
 * @param  array  $tableau tableau DOUBLE ENTREE ($data)
 * @return string return un tabeau
 *               
 ----Exemple d'utilisation :
     $data=array("Nom"=>array("battez","carquillat","leth"),
                 "Prénom"=>array("Vincent","Benoit","Odic"),
                 "Notes"=>array("18","17","11"),
                );
    echo table($data);
 *
 ----Affiche :
 <tbody>
     <tr>
         <td>battez</td>
         <td>carquillat</td>
         <td>leth</td>
     </tr>
     <tr>
         <td>Vincent</td>
         <td>Benoit</td>
         <td>Odic</td>
     </tr>
     <tr>
         <td>18</td>
         <td>17</td>
         <td>11</td>
     </tr>
 </tbody>
 *
 */
function table($tableau) {
    $tmp="";
    foreach($tableau as $ligne) {
        $tmp = $tmp . "<tr>";
        foreach($ligne as $cell) {
            $tmp = $tmp . "<td>$cell</td>";
        }
        $tmp = $tmp . "<tr>";
    }
    return $tmp;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////INPUT <input/>
/** function input($type,$name,$attributes=array())
 *
 * Créer une balise <input/>
 * @param  string $type                   type (text,password...)
 * @param  string $name                   Nom que tu utilisera en php (name)
 * @param  array  [$attributes = []] Les attribues eventuelles comme class, id etc...
 * @return string retourne la balise html input
 *                                   
 ----Exemple d'utilisation :
 echo input("text",
            "nom",
            array("class"=>"red",
                  "id"=>"nom"
                 )
           );
 *
 ----Affiche :
 <input type="text" name="pays" class="red" id="nom">
 *
**/
function input($type,$name,$attributes=[]) {
    $o = "";
    foreach ($attributes as $k=>$v)
        $o = $o . "$k='$v'";
    return "<input type='$type' name='$name' $o/>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////SELECT <select><option></option></select>
/**
 * Créer une liste déroulante
 * @param  string $name             Nom que tu utilisera en php (name)
 * @param  array  [$attributes=[]]  Les attribues eventuelles comme class, id etc...
 * @param  array  [$select=array()] les options dans la liste <option>
 * @return string retourne une liste déroulante
 *                                   
 ----Exemple d'utilisation :
 echo select("pays",
             array("class"=>"red"),
             array("japon","france")
             );
 *
 ----Affiche :
 <select name="pays" class="red">
    <option value="0">japon</option>
    <option value="1">france</option>
 </select>
 *
**/
function select($name,$attributes=[],$select=array()) {
    $html = "";
    $o = "";
    foreach ($attributes as $k=>$v)
        $o = $o . "$k='$v'";
    $html .= "<select name=$name $o>";
    foreach($select as $key => $value){
        $html .= "<option value=$key>$value</option>";
    }
    $html .= "</select>";
    
    return $html;
}
?>