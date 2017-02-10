<!doctype html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script src="jquery-3.1.1.js"></script>


    <script>


        function ejercicio1() {
            var a=$("#A").val();
            var b=$("#B").val();
            var c=$("#C").val();

            $.ajax({

                method:"POST",
                url:"Operaciones.php",
                data:{A : a ,B : b, C : c}
            })

            .done(function (msg) {


                alert(msg);


            });



        }

        function ejercicio4() {

            var n=$("#num").val();


            $.ajax( {

                    method:"POST",
                    url:"Operaciones.php",
                    data:{num:n}
            })

                .done(function (msg) {


                    alert("El valor invertido es: "+msg);


                });



        }

        function ejercicio5() {

            var E1=$("#ed1").val();
            var E2=$("#ed2").val();
            var E3=$("#ed3").val();
            var E4=$("#ed4").val();
            var E5=$("#ed5").val();
            var AL1=$("#alt1").val();
            var AL2=$("#alt2").val();
            var AL3=$("#alt3").val();
            var AL4=$("#alt4").val();
            var AL5=$("#alt5").val();



            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{ed1:E1,ed2:E2,ed3:E3,ed4:E4,ed5:E5,alt1:AL1,alt2:AL2,alt3:AL3,alt4:AL4,alt5:AL5}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }

        function ejercicio6() {

            var N=$("#numcapicua").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{numcapicua:N}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }

        function ejercicio7() {

            var KM=$("#km").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{km:KM}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }

        function ejercicio8() {

            var M=$("#millas").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{millas:M}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }
        function ejercicio10() {

            var Mes=$("#mes").val();
            var Dia=$("#dia").val();
            var Ano=$("#ano").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{mes:Mes,dia:Dia,ano:Ano}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }
        function ejercicio11() {

            var CF=$("#cf").val();
            var ETICA=$("#etica").val();
            var EMPRENDIMIENTO=$("#emprendimiento").val();
            var TECNICA=$("#tecnica").val();
            var INGLES=$("#ingles").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{cf:CF,etica:ETICA,emprendimiento:EMPRENDIMIENTO,tecnica:TECNICA,ingles:INGLES}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }
        function ejercicio12() {

            var N=$("#num").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{num:N}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }
        function ejercicio13() {

            var l1=$("#litros1").val();
            var l2=$("#litros2").val();
            var l3=$("#litros3").val();
            var l4=$("#litros4").val();
            var l5=$("#litros5").val();
            var p1=$("#precio1").val();
            var p2=$("#precio2").val();
            var p3=$("#precio3").val();
            var p4=$("#precio4").val();
            var p5=$("#precio5").val();



            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{litros1:l1,litros2:l2,litros3:l3,litros4:l4,litros5:l5,precio1:p1,precio2:p2,precio3:p3,precio4:p4,precio5:p5}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }
        function ejercicio15() {

            var N=$("#num").val();


            $.ajax( {

                method:"POST",
                url:"Operaciones.php",
                data:{num:N}
            })

                .done(function (msg) {


                    alert(msg);


                });



        }



    </script>

    <title>Document</title>
</head>
<body>

    <h1>Ejercicio1</h1>
    <form action="" method="post">

            <label>Digite A</label>

            <input type="number" id="A"  >

            <label>Digite B</label>

            <input type="number" id="B">

            <label>Digite C</label>

            <input type="number" id="C">

            <input type="button" value="Calcular" onclick="ejercicio1">


    </form>



    <h1>Ejercicio4</h1>

            <form action="" method="post">
                <label>Digite un numero entre 0 y 9999</label>
                <input type="number" id="num">
                <input type="button" value="mostrar" onclick="ejercicio4()">
            </form>




    <h1>Ejercicio5</h1>
        <form action="" method="post">

            <label>Digite edad1</label>
            <input type="text" id="ed1">
            <br>
            <label>Digite edad2</label>
            <input type="text"  id="ed2">
            <br>
            <label>Digite edad3</label>
            <input type="text" id="ed3">
            <br>
            <label>Digite edad4</label>
            <input type="text" id="ed4">
            <br>
            <label >Digite edad5</label>
            <input type="text" id="ed5">
            <br>
            <label >Digite estatura1</label>
            <input type="text" id="alt1">
            <br>
            <label >Digite estatura2</label>
            <input type="text"  id="alt2">
            <br>
            <label >Digite estatura3</label>
            <input type="text"  id="alt3">
            <br>
            <label >Digite estatura4</label>
            <input type="text"  id="alt4">
            <br>
            <label >Digite estatura5</label>
            <input type="text"  id="alt5">
            <br>
            <input type="button" value="Enviar" onclick="ejercicio5()">
        </form>

    <h1>Ejercicio6</h1>
    <form action="" method="post">
        <label>Digite un numero entre 0 y 9999</label>
        <input type="num" id="numcapicua">
        <input type="button" value="Determinar" onclick="ejercicio6()">
    </form>


    <h1>Ejercicio7</h1>
    <form action="" method="post">
        <label>Digite los kilometros a convertir</label>
        <input type="num" id="km">
        <input type="button" value="Calcular" onclick="ejercicio7()">
    </form>

    <h1>Ejercicio8</h1>

    <form action="" method="post">
        <label>Numero de millas que desea convertir</label>
        <input type="number" id="millas">
        <input type="button" value="Convertir" onclick="ejercicio8()">
    </form>

    <h1>Ejercicio10</h1>
    <form action="" method="post">
        <label>Digite una fecha</label>
        <br>
        <label>Dia</label>
        <input type="number" id="dia">
        <label>Mes</label>
        <input type="number" id="mes">
        <label>Año</label>
        <input type="number" id="ano">
        <input type="button" onclick="ejercicio10()" value="Determinar">
    </form>

    <h1>Ejercicio11</h1>
    <form action="" method="post">
        <label>Cultura fisica</label>
        <input type="number" id="cf">
        <label>Etica</label>
        <input type="number" id="etica">
        <label >Emprendimiento</label>
        <input type="number" id="emprendimiento">
        <label >Tecnica</label>
        <input type="number" id="tecnica">
        <label >Ingles</label>
        <input type="number" id="ingles">
        <input type="button" onclick="ejercicio11()" value="Calcular">
    </form>

    <h1>Ejercicio12</h1>
    <form action="" method="post">
        <h2>Adivine su calificacion!</h2>
        <label>Ingrese un numero</label>
        <input type="number" id="num">
        <input type="button" value="Adivinar :)" onclick="ejercicio12()">
    </form>

    <h1>Ejercicio13</h1>
    <form action="Ejercicios.php" method="post">
        <h2>Factura 1</h2>
        <label>Litros</label>
        <input type="number" id="litros1">
        <label>Precio</label>
        <input type="number" id="precio1">

        <h2>Factura 2</h2>
        <label>Litros</label>
        <input type="number" id="litros2">
        <label>Precio</label>
        <input type="number" id="precio2">

        <h2>Factura 3</h2>
        <label>Litros</label>
        <input type="number" id="litros3">
        <label>Precio</label>
        <input type="number" id="precio3">

        <h2>Factura 4</h2>
        <label>Litros</label>
        <input type="number" id="litros4">
        <label>Precio</label>
        <input type="number" id="precio4">

        <h2>Factura 1</h2>
        <label>Litros</label>
        <input type="number" id="litros5">
        <label>Precio</label>
        <input type="number" id="precio5">
        <input type="button" value="Calcular" onclick="ejercicio13()">

    </form>

<h2>Ejercicio15</h2>
    <form action="">
        <label>Digite un numero</label>
        <br>
        <input type="number" id="num">
        <input type="button" onclick="ejercicio15()" value="Mostrar">
    </form>

</body>
</html>
