{"filter":false,"title":"conn.php","tooltip":"/utils/conn.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["<?php","// connect to bdd","","$conn = new PDO('mysql:host=localhost;dbname=RessourceManager;charset=utf8', 'YooN', 'pass');","$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échouéconn","function chargerclass($classname, $dossier){","    require $dossier.$classname.\".php\";","}",""],"id":1}],[{"start":{"row":3,"column":45},"end":{"row":3,"column":61},"action":"remove","lines":["RessourceManager"],"id":2},{"start":{"row":3,"column":45},"end":{"row":3,"column":46},"action":"insert","lines":["s"]},{"start":{"row":3,"column":46},"end":{"row":3,"column":47},"action":"insert","lines":["4"]}],[{"start":{"row":3,"column":64},"end":{"row":3,"column":68},"action":"remove","lines":["YooN"],"id":3},{"start":{"row":3,"column":64},"end":{"row":3,"column":65},"action":"insert","lines":["a"]},{"start":{"row":3,"column":65},"end":{"row":3,"column":66},"action":"insert","lines":["d"]},{"start":{"row":3,"column":66},"end":{"row":3,"column":67},"action":"insert","lines":["m"]},{"start":{"row":3,"column":67},"end":{"row":3,"column":68},"action":"insert","lines":["i"]},{"start":{"row":3,"column":68},"end":{"row":3,"column":69},"action":"insert","lines":["n"]}],[{"start":{"row":4,"column":124},"end":{"row":4,"column":125},"action":"remove","lines":["n"],"id":4},{"start":{"row":4,"column":123},"end":{"row":4,"column":124},"action":"remove","lines":["n"]},{"start":{"row":4,"column":122},"end":{"row":4,"column":123},"action":"remove","lines":["o"]},{"start":{"row":4,"column":121},"end":{"row":4,"column":122},"action":"remove","lines":["c"]}],[{"start":{"row":4,"column":121},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":32},"action":"remove","lines":["$classname"],"id":6}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":[" "],"id":7},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":[","]}],[{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":[","],"id":8}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":[" "],"id":9}],[{"start":{"row":6,"column":32},"end":{"row":6,"column":42},"action":"insert","lines":["$classname"],"id":10}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":0},"end":{"row":9,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1583425805048,"hash":"597682412a3cc90883a957097ce428717ac6a25c"}