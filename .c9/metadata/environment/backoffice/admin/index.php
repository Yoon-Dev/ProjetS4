{"filter":false,"title":"index.php","tooltip":"/backoffice/admin/index.php","undoManager":{"mark":36,"position":36,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":1},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["r"]},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["e"]},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["q"]},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["u"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["i"]},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["r"]},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":[" "],"id":3}],[{"start":{"row":1,"column":8},"end":{"row":1,"column":10},"action":"insert","lines":["\"\""],"id":4}],[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["."],"id":5},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["."]},{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["/"]},{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":["."]},{"start":{"row":1,"column":13},"end":{"row":1,"column":14},"action":"insert","lines":["."]},{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":["/"]},{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["u"]},{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"insert","lines":["i"],"id":6},{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["l"]},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["s"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["/"]}],[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["c"],"id":7},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["h"]},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["c"],"id":8},{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"insert","lines":["k"]},{"start":{"row":1,"column":26},"end":{"row":1,"column":27},"action":"insert","lines":["A"]},{"start":{"row":1,"column":27},"end":{"row":1,"column":28},"action":"insert","lines":["c"]},{"start":{"row":1,"column":28},"end":{"row":1,"column":29},"action":"insert","lines":["c"]},{"start":{"row":1,"column":29},"end":{"row":1,"column":30},"action":"insert","lines":["e"]},{"start":{"row":1,"column":30},"end":{"row":1,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":1,"column":31},"end":{"row":1,"column":32},"action":"insert","lines":["."],"id":9},{"start":{"row":1,"column":32},"end":{"row":1,"column":33},"action":"insert","lines":["p"]},{"start":{"row":1,"column":33},"end":{"row":1,"column":34},"action":"insert","lines":["h"]},{"start":{"row":1,"column":34},"end":{"row":1,"column":35},"action":"insert","lines":["p"]}],[{"start":{"row":1,"column":36},"end":{"row":1,"column":37},"action":"insert","lines":[";"],"id":10}],[{"start":{"row":1,"column":37},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":2,"column":0},"end":{"row":24,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<?php","session_start();","//mdp crée avec password_hash(\"pass\",PASSWORD_DEFAULT);","//require tout pour test le mdp","require '../src/AdminIdentification.php';","?>","<html lang=\"en\">","<head>","    <meta charset=\"UTF-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">","    <title>Identification</title>","</head>","<body>","        <input type=\"text\" name=\"username\" id=\"username-identification\"/>","        <input type=\"password\" name=\"password\" id=\"password-identification\"/>","        <input type=\"submit\" value=\"Submit\" id=\"admin-identification\"/>","","","<script type=\"text/javascript\" src=\"./js/getPass.js\"></script>","</body>","</html>"],"id":12}],[{"start":{"row":1,"column":37},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["?"]},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":4,"column":0},"end":{"row":9,"column":2},"action":"remove","lines":["<?php","session_start();","//mdp crée avec password_hash(\"pass\",PASSWORD_DEFAULT);","//require tout pour test le mdp","require '../src/AdminIdentification.php';","?>"],"id":14},{"start":{"row":3,"column":15},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":17,"column":62},"action":"remove","lines":["","","<script type=\"text/javascript\" src=\"./js/getPass.js\"></script>"],"id":15}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":71},"action":"remove","lines":["        <input type=\"text\" name=\"username\" id=\"username-identification\"/>","        <input type=\"password\" name=\"password\" id=\"password-identification\"/>","        <input type=\"submit\" value=\"Submit\" id=\"admin-identification\"/>"],"id":16},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["h"]},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["&"]}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"remove","lines":["&"],"id":17},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":["h"]}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":18}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":19}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["<"],"id":20},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"insert","lines":["h"]},{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"insert","lines":["1"]}],[{"start":{"row":13,"column":7},"end":{"row":13,"column":13},"action":"insert","lines":["></h1>"],"id":21}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"insert","lines":["C"],"id":22},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["o"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["n"]},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["t"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["e"]},{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["n"]},{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":35},"end":{"row":1,"column":36},"action":"insert","lines":["?"],"id":23},{"start":{"row":1,"column":36},"end":{"row":1,"column":37},"action":"insert","lines":["r"]}],[{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"insert","lines":["e"],"id":24},{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"insert","lines":["d"]},{"start":{"row":1,"column":39},"end":{"row":1,"column":40},"action":"insert","lines":["i"]},{"start":{"row":1,"column":40},"end":{"row":1,"column":41},"action":"insert","lines":["r"]},{"start":{"row":1,"column":41},"end":{"row":1,"column":42},"action":"insert","lines":["e"]},{"start":{"row":1,"column":42},"end":{"row":1,"column":43},"action":"insert","lines":["c"]},{"start":{"row":1,"column":43},"end":{"row":1,"column":44},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":44},"end":{"row":1,"column":45},"action":"insert","lines":["="],"id":25}],[{"start":{"row":1,"column":45},"end":{"row":1,"column":59},"action":"insert","lines":["../backoffice/"],"id":26}],[{"start":{"row":1,"column":61},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":27}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":29},"action":"insert","lines":["checkAcces(\"../backoffice/\");"],"id":28}],[{"start":{"row":1,"column":35},"end":{"row":1,"column":59},"action":"remove","lines":["?redirect=../backoffice/"],"id":29}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":26},"action":"remove","lines":["backoffice/"],"id":31}],[{"start":{"row":1,"column":37},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":32}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":33},"action":"insert","lines":["    var_dump($_SESSION['acces']);"],"id":33}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["s"]},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["e"]},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["s"]},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["s"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["i"]},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["o"]},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["n"]}],[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["_"],"id":35},{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["s"]},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["t"]},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["a"]},{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["r"]},{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":13},"end":{"row":1,"column":15},"action":"insert","lines":["()"],"id":36}],[{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":[";"],"id":37}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":33},"action":"remove","lines":["    var_dump($_SESSION['acces']);"],"id":38},{"start":{"row":2,"column":37},"end":{"row":3,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":37},"end":{"row":2,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1583513416913,"hash":"4a4f9bf2f65534725924f8ff5867246dc470eb18"}