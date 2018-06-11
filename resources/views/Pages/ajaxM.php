<html>
    <head>
        <script>
            function formulas1(num)
        {
            var altura = $("#estatura").val();
            var pAct = $("#pesoActual").val();
            var pph = $("#peso_hab").val();
            var cintura = $("#cintura").val();
            var cadera = $("#cadera").val();
            var periAbd = $("#peri_abd").val();
            var circunMu = $("#circun_mu").val();
            var MiemP = $("#miembrosAp").val();

            function pesoTeorico(x) {
                if (x.length == 0) { 
                    document.getElementById("pesoTeo").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("pesoTeo").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/pesoTeo.php?altura=" + x, true);
                    xmlhttp.send();
                }
            }
            
            function pesoInferior(x) {
                if (x.length == 0) { 
                    document.getElementById("pesoInfe").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("pesoInfe").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/pesoInfe.php?altura=" + x, true);
                    xmlhttp.send();
                }
            }
            
            function pesoSuperior(x) {
                if (x.length == 0) { 
                    document.getElementById("pesoSupe").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("pesoSupe").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/pesoSupe.php?altura=" + x, true);
                    xmlhttp.send();
                }
            }
            
            function imc(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("imc").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("imc").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/imc.php?pAct="+x+"&altura="+y, true);
                    xmlhttp.send();
                }
            }
            
            function porcenPH(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("pph").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("pph").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/PPH.php?pAct="+x+"&pph="+y, true);
                    xmlhttp.send();
                }
            }

            function porcenPT(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("ppt").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("ppt").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/PPT.php?pAct="+x+"&altura="+y, true);
                    xmlhttp.send();
                }
            }

            function PPCI(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("ppci").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("ppci").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/ppci.php?pAct="+x+"&altura="+y, true);
                    xmlhttp.send();
                }
            }

            function ICC(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("icc").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("icc").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/ICC.php?cintura="+x+"&cadera="+y, true);
                    xmlhttp.send();
                }
            }

            function clasificacion(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("clasif").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("clasif").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/clasif.php?pAct="+x+"&altura="+y, true);
                    xmlhttp.send();
                }
            }

            function PA(x) {
                if (x.length == 0) { 
                    document.getElementById("PA").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("PA").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/PA.php?periAbd="+x, true);
                    xmlhttp.send();
                }
            }

            function CM(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("CM").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("CM").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/circunMu.php?cirMu="+x+"&altura="+y, true);
                    xmlhttp.send();
                }
            }

            function MP(x,y) {
                if (x.length == 0 || y.length == 0) { 
                    document.getElementById("MP").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("MP").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "/nutricare/resources/views/Pages/FormulasM/MP.php?miemAp="+x+"&pAct="+y, true);
                    xmlhttp.send();
                }
            }

            pesoTeorico(altura);
            pesoInferior(altura);
            pesoSuperior(altura);
            imc(pAct,altura);
            porcenPH(pAct,pph);
            porcenPT(pAct,altura);
            PPCI(pAct,altura);
            ICC(cintura,cadera);
            clasificacion(pAct,altura);
            PA(periAbd);
            CM(circunMu,altura);
            MP(MiemP,pAct);
        }
    </script>
    </head>
</html>
