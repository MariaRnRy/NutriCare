<html>
<head>
      <script>
            function formulas1(num)
            {
                var leche2 = $("#leche2").val();
                var leche3 = $("#leche3").val();
                var leche4 = $("#leche4").val();
                var leche5 = $("#leche5").val();
                var leche6 = $("#leche6").val();

                var carne2 = $("#carne2").val();
                var carne3 = $("#carne3").val();
                var carne4 = $("#carne4").val();
                var carne5 = $("#carne5").val();
                var carne6 = $("#carne6").val();

                var fruta2 = $("#fruta2").val();
                var fruta3 = $("#fruta3").val();
                var fruta4 = $("#fruta4").val();
                var fruta5 = $("#fruta5").val();
                var fruta6 = $("#fruta6").val(); 

                var vegetales2 = $("#vegetales2").val(); 
                var vegetales3 = $("#vegetales3").val(); 
                var vegetales4 = $("#vegetales4").val(); 
                var vegetales5 = $("#vegetales5").val(); 
                var vegetales6 = $("#vegetales6").val(); 

                var cerytub2 = $("#cerytub2").val();  
                var cerytub3 = $("#cerytub3").val();  
                var cerytub4 = $("#cerytub4").val();  
                var cerytub5 = $("#cerytub5").val();  
                var cerytub6 = $("#cerytub6").val(); 

                var leguminosa2 = $("#leguminosa2").val();  
                var leguminosa3 = $("#leguminosa3").val(); 
                var leguminosa4 = $("#leguminosa4").val(); 
                var leguminosa5 = $("#leguminosa5").val(); 
                var leguminosa6 = $("#leguminosa6").val(); 

                var grasas2 = $("#grasas2").val(); 
                var grasas3 = $("#grasas3").val();
                var grasas4 = $("#grasas4").val();
                var grasas5 = $("#grasas5").val();
                var grasas6 = $("#grasas6").val();

                var azucar2 = $("#azucar2").val();
                var azucar3 = $("#azucar3").val();
                var azucar4 = $("#azucar4").val();
                var azucar5 = $("#azucar5").val();
                var azucar6 = $("#azucar6").val();

                var lech = $("#leche").val();
                var car = $("#carne").val();
                var frt = $("#fruta").val();
                var veg = $("#vegetales").val();
                var cyt = $("#cerytub").val();
                var leg = $("#leguminosa").val();
                var grs = $("#grasas").val();
                var azr = $("#azucar").val();

                function leche(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0) { 
                        document.getElementById("leche_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leche_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function carne(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("carne_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("carne_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function fruta(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0) { 
                        document.getElementById("fruta_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("fruta_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function vegetal(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("vegetales_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("vegetales_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function cerytub(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("cerytub_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cerytub_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function leguminosa(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("leguminosas_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leguminosas_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function grasa(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("grasas_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("grasas_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function azucar(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 ) { 
                        document.getElementById("azucar_1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azucar_1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_horizontal.php?p="+a+"&q="+b+"&n="+c+"&r="+d+"&s="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function desa(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("suma_des").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("suma_des").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/desayuno.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function col_ma(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("suma_col_mat").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("suma_col_mat").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_col_mat.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function comida(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("suma_comida").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("suma_comida").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_comida.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function col_ves(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("suma_col_ves").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("suma_col_ves").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/sum_col_ves.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function cena(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0  || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("suma_cena").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("suma_cena").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/desayuno.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }

                leche(leche2,leche3,leche4,leche5,leche6,lech);
                carne(carne2,carne3,carne4,carne5,carne6,car);
                fruta(fruta2,fruta3,fruta4,fruta5,fruta6,frt);
                vegetal(vegetales2,vegetales3,vegetales4,vegetales5,vegetales6,veg);
                cerytub(cerytub2,cerytub3,cerytub4,cerytub5,cerytub6,cyt);
                leguminosa(leguminosa2,leguminosa3,leguminosa4,leguminosa5,leguminosa6,leg);
                grasa(grasas2,grasas3,grasas4,grasas5,grasas6,grs);
                azucar(azucar2,azucar3,azucar4,azucar5,azucar6,azr);
                desa(leche2,carne2,fruta2,vegetales2,cerytub2,leguminosa2,grasas2,azucar2);
                col_ma(leche3,carne3,fruta3,vegetales3,cerytub3,leguminosa3,grasas3,azucar3);
                comida(leche4,carne4,fruta4,vegetales4,cerytub4,leguminosa4,grasas4,azucar4);
                col_ves(leche5,carne5,fruta5,vegetales5,cerytub5,leguminosa5,grasas5,azucar5);
                cena(leche6,carne6,fruta6,vegetales6,cerytub6,leguminosa6,grasas6,azucar6);
              }  

      </script>
</head>
</html>