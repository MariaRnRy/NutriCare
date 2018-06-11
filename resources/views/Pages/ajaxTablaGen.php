<html>
    <head>
        <script>
            function formulas2(num)
            {
                var leche = $("#leche").val();
                var carne = $("#carne").val();
                var fruta = $("#fruta").val();
                var vegetales = $("#vegetales").val();
                var crytb = $("#cerytub").val();
                var legu = $("#leguminosa").val();
                var grasas = $("#grasas").val();
                var azucar = $("#azucar").val();

                function lec_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("lec_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("lec_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/lec_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function lec_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("lec_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("lec_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/lec_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function lec_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("lec_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("lec_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/lec_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_leche(x) {
                    if (x.length == 0) { 
                        document.getElementById("lec_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("lec_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_leche.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function car_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("car_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("car_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/car_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function car_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("car_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("car_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/car_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function car_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("car_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("car_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/car_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_carne(x) {
                    if (x.length == 0) { 
                        document.getElementById("car_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("car_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_carne.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function frut_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("frut_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("frut_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/frut_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function frut_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("frut_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("frut_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/frut_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function frut_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("frut_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("frut_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/frut_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_fruta(x) {
                    if (x.length == 0) { 
                        document.getElementById("frut_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("frut_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_fruta.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function veg_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("veg_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("veg_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/veg_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function veg_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("veg_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("veg_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/veg_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function veg_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("veg_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("veg_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/veg_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_vegetal(x) {
                    if (x.length == 0) { 
                        document.getElementById("veg_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("veg_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_vegetal.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function cyt_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("cyt_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cyt_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/cyt_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function cyt_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("cyt_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cyt_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/cyt_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function cyt_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("cyt_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cyt_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/cyt_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_cyt(x) {
                    if (x.length == 0) { 
                        document.getElementById("cyt_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cyt_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_cyt.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function leg_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("leg_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leg_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/leg_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function leg_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("leg_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leg_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/leg_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function leg_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("leg_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leg_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/leg_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_leg(x) {
                    if (x.length == 0) { 
                        document.getElementById("leg_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leg_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_leg.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function gra_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("gra_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("gra_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/gra_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function gra_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("gra_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("gra_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/gra_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function gra_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("gra_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("gra_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/gra_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_grasas(x) {
                    if (x.length == 0) { 
                        document.getElementById("gra_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("gra_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_grasas.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function azuca_hc(x) {
                    if (x.length == 0) { 
                        document.getElementById("azuca_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azuca_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/azuca_hc.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function azuca_prot(x) {
                    if (x.length == 0) { 
                        document.getElementById("azuca_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azuca_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/azuca_prot.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function azuca_lip(x) {
                    if (x.length == 0) { 
                        document.getElementById("azuca_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azuca_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/azuca_lip.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function calorias_azucar(x) {
                    if (x.length == 0) { 
                        document.getElementById("azuca_kcals").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azuca_kcals").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/calorias_azucar.php?q=" + x, true);
                        xmlhttp.send();
                    }
                }
                function sum_hc(a,b,c,d,e,f) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0) { 
                        document.getElementById("sum_hc").innerHTML = "";
                        document.getElementById("grs_hc").innerHTML = "";
                        document.getElementById("kcal_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("sum_hc").innerHTML = xmlhttp.responseText;
                                document.getElementById("grs_hc").innerHTML = xmlhttp.responseText;
                                document.getElementById("kcal_hc").innerHTML = 4*xmlhttp.responseText;
                                document.getElementById("hc_graf").innerHTML = 4*xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/sum_hc.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f, true);
                        xmlhttp.send();
                    }
                }
                function sum_prot(a,b,c,d,e) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0) { 
                        document.getElementById("sum_prot").innerHTML = "";
                        document.getElementById("grs_prot").innerHTML = "";
                        document.getElementById("kcal_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("sum_prot").innerHTML = xmlhttp.responseText;
                                document.getElementById("grs_prot").innerHTML = xmlhttp.responseText;
                                document.getElementById("kcal_prot").innerHTML = 4*xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/sum_prot.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e, true);
                        xmlhttp.send();
                    }
                }
                function sum_lip(a,b,c,d) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0) { 
                        document.getElementById("sum_lip").innerHTML = "";
                        document.getElementById("grs_lip").innerHTML = "";
                        document.getElementById("kcal_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("sum_lip").innerHTML = xmlhttp.responseText;
                                document.getElementById("grs_lip").innerHTML = xmlhttp.responseText;
                                document.getElementById("kcal_lip").innerHTML = 9*xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/sum_lip.php?a="+a+"&b="+b+"&c="+c+"&d="+d, true);
                        xmlhttp.send();
                    }
                }
                function sum_cal(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("sum_cal").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("sum_cal").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/sum_cal.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function porc_hc(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("porc_hc").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("porc_hc").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/porc_hc.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function porc_prot(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("porc_prot").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("porc_prot").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/porc_prot.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function porc_lip(a,b,c,d,e,f,g,h) {
                    if (a.length == 0 || b.length == 0 || c.length == 0 || d.length == 0 || e.length == 0 || f.length == 0 || g.length == 0 || h.length == 0) { 
                        document.getElementById("porc_lip").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("porc_lip").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/porc_lip.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h, true);
                        xmlhttp.send();
                    }
                }
                function racionesLech(a) {
                    if (a.length == 0) { 
                        document.getElementById("leche1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leche1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesCar(a) {
                    if (a.length == 0) { 
                        document.getElementById("carne1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("carne1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesFrt(a) {
                    if (a.length == 0) { 
                        document.getElementById("fruta1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("fruta1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesVeg(a) {
                    if (a.length == 0) { 
                        document.getElementById("vegetales1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("vegetales1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesCYT(a) {
                    if (a.length == 0) { 
                        document.getElementById("cerytub1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("cerytub1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesLeg(a) {
                    if (a.length == 0) { 
                        document.getElementById("leguminosa1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("leguminosa1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesGrs(a) {
                    if (a.length == 0) { 
                        document.getElementById("grasas1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("grasas1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }
                function racionesAzr(a) {
                    if (a.length == 0) { 
                        document.getElementById("azucar1").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("azucar1").innerHTML = xmlhttp.responseText;
                            }
                        };
                       xmlhttp.open("GET", "/imss/resources/views/Pages/Formulas/TablaGeneral/raciones.php?p="+a, true);
                        xmlhttp.send();
                    }
                }

                lec_hc(leche);
                lec_prot(leche);
                lec_lip(leche);
                calorias_leche(leche);
                car_hc(carne);
                car_prot(carne);
                car_lip(carne);
                calorias_carne(carne);
                frut_hc(fruta);
                frut_prot(fruta);
                frut_lip(fruta);
                calorias_fruta(fruta);
                veg_hc(vegetales);
                veg_prot(vegetales);
                veg_lip(vegetales);
                calorias_vegetal(vegetales);
                cyt_hc(crytb);
                cyt_prot(crytb);
                cyt_lip(crytb);
                calorias_cyt(crytb);
                leg_hc(legu);
                leg_prot(legu);
                leg_lip(legu);
                calorias_leg(legu);
                gra_hc(grasas);
                gra_prot(grasas);
                gra_lip(grasas);
                calorias_grasas(grasas);
                azuca_hc(azucar);
                azuca_prot(azucar);
                azuca_lip(azucar);
                calorias_azucar(azucar);
                sum_hc(leche,fruta,vegetales,crytb,legu,azucar);
                sum_prot(leche,carne,vegetales,crytb,legu);
                sum_lip(leche,carne,legu,grasas);
                sum_cal(leche,carne,fruta,vegetales,crytb,legu,grasas,azucar);
                porc_hc(leche,carne,fruta,vegetales,crytb,legu,grasas,azucar);
                porc_prot(leche,carne,fruta,vegetales,crytb,legu,grasas,azucar);
                porc_lip(leche,carne,fruta,vegetales,crytb,legu,grasas,azucar);
                racionesLech(leche);
                racionesCar(carne);
                racionesFrt(fruta);
                racionesVeg(vegetales);
                racionesCYT(crytb);
                racionesLeg(legu);
                racionesGrs(grasas);
                racionesAzr(azucar);
            }

    </script>
    </head>
</html>
