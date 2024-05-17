<?php
    function sanitization($str){ // try to handle xss attack , but we have many more symbols ( it call sanitization of symbols )
        $str=str_replace(">","&gt;",$str);//html entity names
        $str=str_replace("<","&lt;",$str);
        $str=str_replace("'","&prime;",$str);
        $str=str_replace('"',"&Prime;",$str);
        $str=str_replace("/","&frasl;",$str);
        // $str=str_replace("&","&amp;",$str);
        $str=str_replace("@","&commat;",$str);
        $str=str_replace(".","&sdot;",$str);
        $str=str_replace("`","&grave;",$str);
        $str=str_replace("~","&sim;",$str);
        $str=str_replace("!","&excl;",$str);
        $str=str_replace("$","&dollar;",$str);
        $str=str_replace("₹","&#8377;",$str);
        $str=str_replace("%","&percnt;",$str);
        $str=str_replace("#","&num;",$str);
        $str=str_replace("?","&quest;",$str);
        $str=str_replace(",","&comma;",$str);
        $str=str_replace(":","&colon;",$str);
        // $str=str_replace(";","&semi;",$str); // comment it because semicolon present in all symbol
        $str=str_replace("(","&lpar;",$str);
        $str=str_replace(")","&rpar;",$str);
        $str=str_replace("[","&lbrack;",$str);
        $str=str_replace("]","&rbrack;",$str);
        $str=str_replace("{","&lbrace;",$str);
        $str=str_replace("}","&rbrace;",$str);
        $str=str_replace("|","&vert;",$str);
        $str=str_replace("+","&plus;",$str);
        $str=str_replace("-","&minus;",$str);
        $str=str_replace("=","&equals;",$str);
        $str=str_replace("*","&lowast;",$str);
        return $str;
    }

    function str_desanitization($str){ // try to handle xss attack , but we have many more symbols ( it call sanitization of symbols )
        $str=str_replace("&gt;",">",$str);//html entity names
        $str=str_replace("&lt;","<",$str);
        $str=str_replace("&prime;","'",$str);
        $str=str_replace("&Prime;",'"',$str);
        $str=str_replace("&frasl;","/",$str);
        // $str=str_replace("&amp;","&",$str);
        $str=str_replace("&commat;","@",$str);
        $str=str_replace("&sdot;",".",$str);
        $str=str_replace("&grave;","`",$str);
        $str=str_replace("&sim;","~",$str);
        $str=str_replace("&excl;","!",$str);
        $str=str_replace("&dollar;","$",$str);
        $str=str_replace("&#8377;","₹",$str);
        $str=str_replace("&percnt;","%",$str);
        $str=str_replace("&num;","#",$str);
        $str=str_replace("&quest;","?",$str);
        $str=str_replace("&comma;",",",$str);
        $str=str_replace("&colon;",":",$str);
        $str=str_replace("&semi;",";",$str);
        $str=str_replace("&lpar;","(",$str);
        $str=str_replace("&rpar;",")",$str);
        $str=str_replace("&lbrack;","[",$str);
        $str=str_replace("&rbrack;","]",$str);
        $str=str_replace("&lbrace;","{",$str);
        $str=str_replace("&rbrace;","}",$str);
        $str=str_replace("&vert;","|",$str);
        $str=str_replace("&plus;","+",$str);
        $str=str_replace("&minus;","-",$str);
        $str=str_replace("&equals;","=",$str);
        $str=str_replace("&lowast;","*",$str);
        return $str;
    }
?>