


<?php



const SERVER = "localhost";

//const USUARIO = "id16140856_se";

//const CONTRASEÑA = "?0qh5yl^a<@FqO%|";

//const SQL = "id16140856_ma";
//const USUARIO = "id16140856_sql";
const USUARIO = "root";
//const CONTRASEÑA = "zBHFX>\q&~@\mOP1";

const CONTRASEÑA = "root";
//const SQL = "id16140856_ma";
const SQL = "super";
function conectar(){

   $link =  mysqli_connect(

        SERVER,
        USUARIO,
        CONTRASEÑA,
        SQL
   );

   return $link;
}