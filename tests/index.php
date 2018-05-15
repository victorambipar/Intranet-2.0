<!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <script src="vendor/jquery/jquery.min.js"></script>     
        <script type="text/javascript">
        function atualizarTarefas() {
           // aqui voce passa o id do usuario
           var url="get.js";
            jQuery("#title").load(url);
        }
        setInterval("atualizarTarefas()", 1000);
        </script>   
 </head>
 <body>
INFORMACAO EH EXIBIDA AQUI: <div id="title"></div> 
 </body>
 </html>