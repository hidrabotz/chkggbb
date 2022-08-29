<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <title>Checker de gerada</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/dropzone.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <style type="text/css">
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes chartjs-render-animation {
            <?php
            include("./css/template.php");
?>
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        /* Chart.js */
        
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        /* Chart.js */
        
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
</head>

<body class="full-screen menu-position-side menu-side-left color-scheme-dark">
    <div class="all-wrapper solid-bg-all">
        <br>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower" rel="stylesheet">
        <style>
            ::-webkit-scrollbar {
                /* 1 */
            }
            
            ::-webkit-scrollbar-button {
                /* 2 */
            }
            
            ::-webkit-scrollbar-track {
                /* 3 */
            }
            
            ::-webkit-scrollbar-track-piece {
                /* 4 */
            }
            
            ::-webkit-scrollbar-thumb {
                /* 5 */
            }
            
            ::-webkit-scrollbar-corner {
                /* 6 */
            }
            
            ::-webkit-resizer {
                /* 7 */
            }
            
            ::-webkit-scrollbar-track {
                background-color: #323c58;
            }
            
            ::-webkit-scrollbar {
                width: 6px;
                background: #323c58;
            }
            
            ::-webkit-scrollbar-thumb {
                background: #343a40;
            }
        </style>

        <center>
            <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

        </center>
        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <div class="element-actions">
                            <form class="form-inline justify-content-sm-end"></form>
                        </div>
                        <div class="element-content">
                            <div class="tablo-with-chart">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="element-box">
                                            <h5 style="text-align: center; font-family: 'Poiret One', cursive;">Checker de gerada</h5>
                                            <textarea placeholder="lista de cartões
" id="list" style="height: 208px; width:100%; text-align: center; resize:none;outline:none;" class="form-control" rows="8"></textarea>
                                            <br>
                                            <br>
                                            <div class="fancy-progress-with-label">
                                                <div class="fpl-progress-w">
                                                    <div class="fpl-progress-i" id="progreso" style="width: 0%;"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <div class="os-tabs-w">
                                                    <div class="os-tabs-controls">
                                                        <ul class="nav nav-tabs smaller">
                                                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#tab_ap">#Aprovadas</a></li>
                                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_rep">#Reprovadas</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active show" id="tab_ap">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <table class="table table-padded">
                                                                        <thead>
                                                                            <tr>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="lives">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab_rep">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <table class="table table-padded">
                                                                        <thead>
                                                                            <tr>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="employe">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="tab-pane" id="tab_err">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <table class="table table-padded">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Status</th>
                                                                                <th>Cartão</th>
                                                                                <th class="text-center">Informação</th>
                                                                                <th class="text-center">Retorno</th>
                                                                                <th class="text-right">Copyright</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="erro">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="user-profile compact">
                                            <div class="up-head-w" style="background-image:url('https://www.impericon.com/780x240x90/media/impericon/header/entertainment/venom/20190612_venom_header_mobile.jpg')">
                                                <div class="up-main-info">
                                                    <h2 class="up-header" style="text-align: center; font-family: 'Poiret One', cursive;">VENOM TOOLS<br>
   </h2>
                                                    <!-- <h6 class="up-sub-header">Creditos Restantes: 100000 <br />
</h6> --></div>
                                                <svg class="decor" width="842px" height="219px" viewbox="0 0 842 219" preserveaspectratio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                                                        <path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="up-controls">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="value-pair">
                                                            <div class="label">Status: &nbsp;</div>
                                                            <div class="value badge badge-pill badge-primary" id="status">Aguardando...</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="up-contents">
                                                <div class="m-b">
                                                    <div class="row m-b">
                                                        <div class="col-sm-6 b-r b-b">
                                                            <div class="el-tablo centered padded-v">
                                                                <div class="value" id="carregadas">0</div>
                                                                <div class="label">Carregadas</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 b-b">
                                                            <div class="el-tablo centered padded-v">
                                                                <div class="value" id="total">0</div>
                                                                <div class="label">Testadas</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-b">
                                                    <div class="col-sm-6 b-r b-b">
                                                        <div class="el-tablo centered padded-v">
                                                            <div class="value" id="cLive">0</div>
                                                            <div class="label">Aprovadas</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 b-b">
                                                        <div class="el-tablo centered padded-v">
                                                            <div class="value" id="cDie">0</div>
                                                            <div class="label">Reprovadas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                    <button style="width: 40%" id="start" class="btn btn-primary" type="submit">Iniciar</button>
                                                    <button style="width: 40%" class="btn btn-danger" id="stop" disabled="" type="submit">Parar</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <script>
                        var audio = new Audio('blop.mp3');
                        $(document).ready(function() {
                            $('#start').attr('disabled', null);
                            $('#start').click(function() {
                                audio.play();
                                const start = async function(name){
                const time = seconds * 1000;
                console.log(seconds);
                _continue = true;
                var values = $("#list").val()

                var filter = duplicateRemove(values)

                if(!filter.length)
                    return stop();
                
                resetChecker()
                totalCarregamento(filter.length);
                $("#start")[0].disabled = true;

                for(var i=0; i<filter.length ;i++){
                    if(!_continue){
                        break;
                    }
                    var value = filter[i];
                    checkar(value);
                    await sleep(time);
                }
            }
            const duplicateRemove = function(text){
                var linhas = text.split('\n');

                var newArr = linhas.filter(function(element, i) {
                    return (linhas.indexOf(element) === i && element.length) ;
                })

                return newArr.length ? newArr : false;
            }
            					var line = $('#list').val().split('\n');
				       		    var total = line.length;
                				if(total > 100) return alert("Coloque no maximo 50 ccs viado, quantidade colocada: ".concat(total));
               				    console.log(' b bb')
                                var total = line.length;
                                var ap = 0;
                                var rp = 0;
                                var st = 'Aguardando...';
                                $('#carregadas').html(total);

                                $('#status').html(st);
                                line.forEach(function(value) {
                                    var ajaxCall = $.ajax({
                                        url: 'api.php',
                                        type: 'GET',
                                        data: 'lista=' + value,
                                        beforeSend: function() {
                                            $('#stop').attr('disabled', null);
                                            $('#start').attr('disabled', 'disabled');
                                            var st = 'Testando...';
                                            $('#status').html(st);

                                        },

                                        success: function(data) {
                                            if (data.match(/Aprovada/)) {
                                                $("#lives").val(data + "\n" + $("#lives").val());
                                                ap = ap + 1;
                                                document.getElementById("lives").innerHTML += data + "<br>";

                                                audio.play();
                                                removelinha();
                                            } else if (data.match(/Reprovada/)) {
                                                $("#dies").val(data + "\n" + $("#dies").val());

                                                rp = rp + 1;
                                                document.getElementById("employe").innerHTML += data + "<br>";
                                                removelinha();

                                            } else if (data.match(/Erro/)) {
                                                $("#dies").val(data + "\n" + $("#dies").val());

                                                rp = rp + 1;
                                                document.getElementById("erro").innerHTML += data + "<br>";
                                                removelinha();
                                            }
                                            var fila = parseInt(ap) + parseInt(rp);

                                            $('#cLive').html(ap);

                                            $('#cDie').html(rp);
                                            $('#total').html(fila);
                                            $('#status').html(st);
                                            var result = (fila / total) * 100;
                                            $('#pct').html(result);
                                            document.getElementById("progreso").style.width = result + "%";
                                            if (fila == total) {
                                                $('#start').attr('disabled', null);
                                                $('#stop').attr('disabled', 'disabled');
                                                audio.play();
                                                var st = 'Finalizado';

                                                $('#status').html(st);

                                            }

                                        }

                                    });
                                    $('#stop').click(function() {
                                        ajaxCall.abort();
                                        $('#start').attr('disabled', null);
                                        $('#stop').attr('disabled', 'disabled');
                                        var st = 'Pausado...';
                                        $('#status').html(st);
                                    });
                                });
                            });
                        });

                        function stopado() {
                            var lines = $("#list").val().split('\n');
                            lines.splice(0, 1);
                            $("#list").val(lines.join("\n"));
                        }

                        function removelinha() {
                            var lines = $("#list").val().split('\n');
                            lines.splice(0, 1);
                            $("#list").val(lines.join("\n"));
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
    
    <script src="js/popper.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/button.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
</body>

</html>
