<html>
    <head>
        <script>
            function formulas(num)
            {
                var fa = $("#F_A").val();
                var get_oms = $("#oms_geb").val();
                var get_hb = $("#hb_geb").val();
                var get_owen = $("#owen_geb").val();
                var get_val = $("#val_geb").val();
                var get_msj = $("#msj_geb").val();

                function FA(x) {
                    if (x.length == 0) { 
                        document.getElementById("FA_OMS").innerHTML = "";
                        document.getElementById("FA_HB").innerHTML = "";
                        document.getElementById("FA_OWEN").innerHTML = "";
                        document.getElementById("FA_VAL").innerHTML = "";
                        document.getElementById("FA_MSJ").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("FA_OMS").innerHTML = xmlhttp.responseText;
                                document.getElementById("FA_HB").innerHTML = xmlhttp.responseText;
                                document.getElementById("FA_OWEN").innerHTML = xmlhttp.responseText;
                                document.getElementById("FA_VAL").innerHTML = xmlhttp.responseText;
                                document.getElementById("FA_MSJ").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/FA.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function GET_OMS(x,y) {
                    if (x.length == 0) { 
                        document.getElementById("GET_OMS").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("GET_OMS").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/GET_OMS.php?q=" + x+"&p="+y, true);
                        xmlhttp.send();
                    }
                }
                function GET_HB(x,y) {
                    if (x.length == 0) { 
                        document.getElementById("GET_HB").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("GET_HB").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/GET_HB.php?q=" + x+"&p="+y, true);
                        xmlhttp.send();
                    }
                }
                function GET_OWEN(x,y) {
                    if (x.length == 0) { 
                        document.getElementById("GET_OWEN").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("GET_OWEN").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/GET_OWEN.php?q=" + x+"&p="+y, true);
                        xmlhttp.send();
                    }
                }
                function GET_VAL(x,y) {
                    if (x.length == 0) { 
                        document.getElementById("GET_VAL").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("GET_VAL").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/GET_VAL.php?q=" + x+"&p="+y, true);
                        xmlhttp.send();
                    }
                }
                function GET_MSJ(x,y) {
                    if (x.length == 0) { 
                        document.getElementById("GET_MSJ").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("GET_MSJ").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/res/GET_MSJ.php?q=" + x+"&p="+y, true);
                        xmlhttp.send();
                    }
                }

                FA(fa);
                GET_OMS(get_oms,fa);
                GET_HB(get_hb,fa);
                GET_OWEN(get_owen,fa);
                GET_VAL(get_val,fa);
                GET_MSJ(get_msj,fa);
            }

    </script>
    </head>
</html>
