{"filter":false,"title":"AddBoardView.php","tooltip":"/view/AddBoardView.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":2,"column":45},"end":{"row":2,"column":46},"action":"insert","lines":["_"],"id":14}],[{"start":{"row":2,"column":46},"end":{"row":2,"column":47},"action":"insert","lines":["p"],"id":15}],[{"start":{"row":2,"column":47},"end":{"row":2,"column":48},"action":"insert","lines":["h"],"id":16}],[{"start":{"row":2,"column":48},"end":{"row":2,"column":49},"action":"insert","lines":["o"],"id":17}],[{"start":{"row":2,"column":49},"end":{"row":2,"column":50},"action":"insert","lines":["t"],"id":18}],[{"start":{"row":2,"column":50},"end":{"row":2,"column":51},"action":"insert","lines":["o"],"id":19}],[{"start":{"row":2,"column":51},"end":{"row":2,"column":52},"action":"insert","lines":["s"],"id":20}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":60},"action":"remove","lines":["<a href=#Pin><i class=\"material-icons\">add_to_photos</i></a>"],"id":21}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["    <form class=\"col s12\">",""],"id":22},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["    <form class=\"col s12\" action=\"index.php\" method=\"post\"  id=\"add_pin\">",""]}],[{"start":{"row":5,"column":64},"end":{"row":5,"column":71},"action":"remove","lines":["add_pin"],"id":23},{"start":{"row":5,"column":64},"end":{"row":5,"column":65},"action":"insert","lines":["a"]}],[{"start":{"row":5,"column":65},"end":{"row":5,"column":66},"action":"insert","lines":["d"],"id":24}],[{"start":{"row":5,"column":66},"end":{"row":5,"column":67},"action":"insert","lines":["d"],"id":25}],[{"start":{"row":5,"column":67},"end":{"row":5,"column":68},"action":"insert","lines":["_"],"id":26}],[{"start":{"row":5,"column":68},"end":{"row":5,"column":69},"action":"insert","lines":["b"],"id":27}],[{"start":{"row":5,"column":69},"end":{"row":5,"column":70},"action":"insert","lines":["o"],"id":28}],[{"start":{"row":5,"column":70},"end":{"row":5,"column":71},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":5,"column":71},"end":{"row":5,"column":72},"action":"insert","lines":["r"],"id":30}],[{"start":{"row":5,"column":72},"end":{"row":5,"column":73},"action":"insert","lines":["d"],"id":31}],[{"start":{"row":14,"column":20},"end":{"row":33,"column":26},"action":"remove","lines":["<div class=\"row\">","                        <div class=\"col m12\">","                            <div class=\"row\">","                                <div class=\"input-field col m12\">","                                    <input placeholder=\"Board Name\" id=\"boardName\" type=\"text\">","                                    <label for=\"boardName\">Board Name</label>","                                </div>","                            </div>","                        </div>","                    </div>","                    <div class=\"row\">","                        <div class=\"col m12\">","                            <div class=\"row\">","                                <div class=\"input-field col m12\">","                                    <input placeholder=\"Board Descprition\" id=\"boardDesc\" type=\"text\">","                                    <label for=\"boardDesc\">Board Descprition</label>","                                </div>","                            </div>","                        </div>","                    </div>"],"id":32},{"start":{"row":14,"column":20},"end":{"row":28,"column":64},"action":"insert","lines":["    <input type=\"hidden\" name=\"action\" value=\"add_pin\" />","\t\t\t\t        \t<input type=\"text\" name=\"username\" value=\"<?php echo $_COOKIE[\"username\"] ?>\"/>","                        \t<input type=\"text\" name=\"userID\" value=\"<?php echo $_COOKIE[\"userid\"] ?>\"/>","","                        \t<label>Pin Name:</label>","\t\t\t\t\t        <input type=\"text\" name=\"pinName\" class=\"textbox\"/><br>","","\t\t\t\t\t        <label>Upload an Image:</label>","                            <input name='filename' type='file' />","                            ","\t\t\t\t\t        <label>Description:</label>","\t\t\t\t\t        <textarea rows=\"200\" cols=\"10\" name=\"pinDesc\"  class=\"textarea\">","\t\t\t\t\t        </textarea>","\t\t\t\t\t        ","\t\t\t\t\t        <input type=\"submit\" name=\"Submit\" class=\"button\"/>"]}],[{"start":{"row":21,"column":12},"end":{"row":22,"column":65},"action":"remove","lines":[" <label>Upload an Image:</label>","                            <input name='filename' type='file' />"],"id":33}],[{"start":{"row":24,"column":50},"end":{"row":24,"column":57},"action":"remove","lines":["pinDesc"],"id":34},{"start":{"row":24,"column":50},"end":{"row":24,"column":51},"action":"insert","lines":["b"]}],[{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"insert","lines":["o"],"id":35}],[{"start":{"row":24,"column":52},"end":{"row":24,"column":53},"action":"insert","lines":["a"],"id":36}],[{"start":{"row":24,"column":53},"end":{"row":24,"column":54},"action":"insert","lines":["r"],"id":37}],[{"start":{"row":24,"column":54},"end":{"row":24,"column":55},"action":"insert","lines":["d"],"id":38}],[{"start":{"row":24,"column":55},"end":{"row":24,"column":56},"action":"insert","lines":["D"],"id":39}],[{"start":{"row":24,"column":56},"end":{"row":24,"column":57},"action":"insert","lines":["e"],"id":40}],[{"start":{"row":24,"column":57},"end":{"row":24,"column":58},"action":"insert","lines":["s"],"id":41}],[{"start":{"row":24,"column":58},"end":{"row":24,"column":59},"action":"insert","lines":["c"],"id":42}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":["n"],"id":43}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["i"],"id":44}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["p"],"id":45}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["b"],"id":46}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["o"],"id":47}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["a"],"id":48}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["r"],"id":49}],[{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["d"],"id":50}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":35},"action":"remove","lines":["Pin"],"id":51},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["B"]}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["o"],"id":52}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["a"],"id":53}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["r"],"id":54}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["d"],"id":55}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["\t\t\t\t\t        <input type=\"submit\" name=\"Submit\" class=\"button\"/>",""],"id":56}],[{"start":{"row":19,"column":70},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":57}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":12},"action":"remove","lines":["    "],"id":58}],[{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"remove","lines":[" "],"id":59}],[{"start":{"row":20,"column":6},"end":{"row":20,"column":7},"action":"remove","lines":[" "],"id":60}],[{"start":{"row":20,"column":5},"end":{"row":20,"column":6},"action":"remove","lines":[" "],"id":61}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":["\t"],"id":62}],[{"start":{"row":20,"column":3},"end":{"row":20,"column":4},"action":"remove","lines":["\t"],"id":63}],[{"start":{"row":20,"column":2},"end":{"row":20,"column":3},"action":"remove","lines":["\t"],"id":64}],[{"start":{"row":20,"column":1},"end":{"row":20,"column":2},"action":"remove","lines":["\t"],"id":65}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["\t"],"id":66}],[{"start":{"row":19,"column":70},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":14,"column":66},"end":{"row":14,"column":73},"action":"remove","lines":["add_pin"],"id":68},{"start":{"row":14,"column":66},"end":{"row":14,"column":67},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":67},"end":{"row":14,"column":68},"action":"insert","lines":["d"],"id":69}],[{"start":{"row":14,"column":68},"end":{"row":14,"column":69},"action":"insert","lines":["d"],"id":70}],[{"start":{"row":14,"column":69},"end":{"row":14,"column":70},"action":"insert","lines":["_"],"id":71}],[{"start":{"row":14,"column":70},"end":{"row":14,"column":71},"action":"insert","lines":["b"],"id":72}],[{"start":{"row":14,"column":71},"end":{"row":14,"column":72},"action":"insert","lines":["o"],"id":73}],[{"start":{"row":14,"column":72},"end":{"row":14,"column":73},"action":"insert","lines":["a"],"id":74}],[{"start":{"row":14,"column":73},"end":{"row":14,"column":74},"action":"insert","lines":["r"],"id":75}],[{"start":{"row":14,"column":74},"end":{"row":14,"column":75},"action":"insert","lines":["d"],"id":76}],[{"start":{"row":10,"column":23},"end":{"row":11,"column":26},"action":"remove","lines":[" <img class=\"materialboxed\" width=\"650\" src=\"http://static.tvtropes.org/pmwiki/pub/images/back_en.png\\","                        \">"],"id":77}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["                <i class=\"material-icons right\">send</i>",""],"id":78}],[{"start":{"row":15,"column":38},"end":{"row":15,"column":42},"action":"remove","lines":["text"],"id":79},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"insert","lines":["h"]}],[{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"insert","lines":["i"],"id":80}],[{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"insert","lines":["d"],"id":81}],[{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"insert","lines":["d"],"id":82}],[{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"insert","lines":["e"],"id":83}],[{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"insert","lines":["n"],"id":84}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["           <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit",""],"id":85}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["            </button>",""],"id":86}],[{"start":{"row":23,"column":12},"end":{"row":24,"column":0},"action":"insert","lines":["\t\t\t\t\t        <input type=\"submit\" name=\"Submit\" class=\"button\"/>",""],"id":87}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"remove","lines":[" "],"id":88}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":24},"action":"remove","lines":["    "],"id":89}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"remove","lines":[" "],"id":90}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"remove","lines":[" "],"id":91}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":[" "],"id":92}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"remove","lines":["\t"],"id":93}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"remove","lines":["\t"],"id":94}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"remove","lines":["\t"],"id":95}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"remove","lines":["\t"],"id":96}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["<"],"id":97}],[{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["!"],"id":98}],[{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"insert","lines":["-"],"id":99}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["-"],"id":100}],[{"start":{"row":14,"column":96},"end":{"row":14,"column":97},"action":"insert","lines":["-"],"id":101}],[{"start":{"row":14,"column":97},"end":{"row":14,"column":98},"action":"insert","lines":["-"],"id":102}],[{"start":{"row":14,"column":98},"end":{"row":14,"column":99},"action":"insert","lines":[">"],"id":103}],[{"start":{"row":14,"column":59},"end":{"row":14,"column":60},"action":"insert","lines":["/"],"id":104}],[{"start":{"row":14,"column":60},"end":{"row":14,"column":61},"action":"insert","lines":["/"],"id":105}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"remove","lines":["-"],"id":106}],[{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"remove","lines":["-"],"id":107}],[{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"remove","lines":["!"],"id":108}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["<"],"id":109}],[{"start":{"row":14,"column":96},"end":{"row":14,"column":97},"action":"remove","lines":[">"],"id":110}],[{"start":{"row":14,"column":95},"end":{"row":14,"column":96},"action":"remove","lines":["-"],"id":111}],[{"start":{"row":14,"column":94},"end":{"row":14,"column":95},"action":"remove","lines":["-"],"id":112}],[{"start":{"row":14,"column":56},"end":{"row":14,"column":57},"action":"remove","lines":["/"],"id":113}],[{"start":{"row":14,"column":55},"end":{"row":14,"column":56},"action":"remove","lines":["/"],"id":114}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":38},"end":{"row":9,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1513201789471,"hash":"734aa7ee1eb5a3b3634a3b5b81f841980fdb8f1e"}