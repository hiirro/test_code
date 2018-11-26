<?php

// XSS対策の関数
function h ($str){
    return htmlspecialchars($str, ENT_QUOTES);
}


