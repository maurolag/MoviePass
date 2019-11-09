<<<<<<< HEAD

<?php require_once("navbar.php");?>
=======
<?php require_once("navbar.php"); ?>

>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
<body>
    <div class="container">
        <div class="form-group has-search">
            <div class="SearchField">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
        </div>
        <div class="overflow-auto">
<<<<<<< HEAD
            <div class="card mb-3">
                <div class="card-header">
                    Pedido
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="card-text">Cliente: </p><br>
                            <p class="card-text">Complejo: </p><br>
                            <p class="card-text">Dirección: </p><br>
                            <p class="card-text">Sala: </p><br>
                            <p class="card-text">Fecha: </p><br>
                            <p class="card-text">Horario: </p><br>
                        </div>
                        <div class="col-sm-6">
                            <p class="card-text">Pelicula: </p><br>
                            <p class="card-text">Butacas: </p><br>
                            <p class="card-text">Entradas: </p><br>
                            <p class="card-text">Descuento: </p><br>
                            <p class="card-text">SubTotal: </p><br>
                            <p class="card-text">Total: </p><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    Pedido
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="card-text">Cliente: </p><br>
                            <p class="card-text">Complejo: </p><br>
                            <p class="card-text">Dirección: </p><br>
                            <p class="card-text">Sala: </p><br>
                            <p class="card-text">Fecha: </p><br>
                            <p class="card-text">Horario: </p><br>
                        </div>
                        <div class="col-sm-6">
                            <p class="card-text">Pelicula: </p><br>
                            <p class="card-text">Butacas: </p><br>
                            <p class="card-text">Entradas: </p><br>
                            <p class="card-text">Descuento: </p><br>
                            <p class="card-text">SubTotal: </p><br>
                            <p class="card-text">Total: </p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

=======
            <?php foreach ($Orders as $order) { ?>
                <div class="card mb-3">
                    <div class="card-header">
                        Pedido
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-text">Cliente: <?php $order['UserName'] ?> </p><br>
                                <p class="card-text">Complejo: <?php $order['cinemaname'] ?> </p><br>
                                <p class="card-text">Dirección: <?php $order['CinemaAddress'] ?> </p><br>
                                <p class="card-text">Sala: <?php $order['roomnumber'] ?> </p><br>
                                <p class="card-text">Fecha: <?php $order['startdate'] ?> </p><br>
                                <p class="card-text">Horario: <?php $order[''] ?> </p><br>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text">Pelicula: <?php $order['moviename'] ?> </p><br>
                                <p class="card-text">Butacas: <?php $order['MovieSeats'] ?> </p><br>
                                <p class="card-text">Entradas: <?php $order[''] ?> </p><br>
                                <p class="card-text">Descuento: <?php $order['Discount'] ?> </p><br>
                                <p class="card-text">SubTotal: <?php $order['Subtotal'] ?> </p><br>
                                <p class="card-text">Total: <?php $order['Total'] ?> </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
<style>
    .SearchField {
        width: 20%;
    }

    .container {
        padding: 3%;
        height: 85%;
        background-color: white;
        opacity: .9;
        background-size: cover;
        margin-top: 1%;
        width: 70%;
        border-radius: 1%;
    }

    .overflow-auto {
        height: 85%;
    }

    .card-text {
        margin: -2%;
    }

    .card {
        background-color: black;
        color: white;
        opacity: 1;
        margin: 5%;
        padding: 1%;
        width: 75%;
    }
</style>