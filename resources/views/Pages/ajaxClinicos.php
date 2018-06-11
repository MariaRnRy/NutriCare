<html>
    <head>
        <script>
            function formulas1(num)
            {
                var glob = $("#globina").val();
                var trocitos = $("#hematrocitos").val();
                var leuco = $("#leucocitos").val();
                var gluco = $("#Glucosa").val();
                var ure = $("#Urea").val();
                var urico = $("#acido_urico").val();
                var creati = $("#creatinina").val();
                var proteinas = $("#proteinas_totales").val();
                var albu = $("#albumina").val();
                var cole = $("#colesterol").val();
                var trigi = $("#Trigliceridos").val();
                var bun = $("#Bun").val();


                function hemoglobina(x) {
                    if (x.length == 0) { 
                        document.getElementById("hemo").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("hemo").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/Hem.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function hematrocitos(x) {
                    if (x.length == 0) { 
                        document.getElementById("hema").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("hema").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/hmtrocitos.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function leucocitos(x) {
                    if (x.length == 0) { 
                        document.getElementById("leu").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leu").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/Leuco.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function glucosa(x) {
                    if (x.length == 0) { 
                        document.getElementById("glu").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("glu").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/gluco.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function urea(x) {
                    if (x.length == 0) { 
                        document.getElementById("ure").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("ure").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/urea.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function acidoU(x) {
                    if (x.length == 0) { 
                        document.getElementById("au").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("au").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/acidoU.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function creatinina(x) {
                    if (x.length == 0) { 
                        document.getElementById("creati").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("creati").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/creati.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function proteinasTotales(x) {
                    if (x.length == 0) { 
                        document.getElementById("prote").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("prote").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/proteTot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function albumina(x) {
                    if (x.length == 0) { 
                        document.getElementById("albu").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("albu").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/albu.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function colesterol(x) {
                    if (x.length == 0) { 
                        document.getElementById("cole").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cole").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/cole.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function trigliceridos(x) {
                    if (x.length == 0) { 
                        document.getElementById("trigi").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("trigi").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/trigi.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                function Bun(x) {
                    if (x.length == 0) { 
                        document.getElementById("bun").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("bun").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/Paraclinicos/bun.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }

                hemoglobina(glob);
                hematrocitos(trocitos);
                leucocitos(leuco);
                glucosa(gluco);
                urea(ure);
                acidoU(urico);
                creatinina(creati);
                proteinasTotales(proteinas);
                albumina(albu);
                colesterol(cole);
                trigliceridos(trigi);
                Bun(bun);
            }
    </script>
    </head>
</html>
