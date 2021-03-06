<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="shorcut icon" type="image/x-icon"  href="<?php echo base_url('assets/img/logo.png');?>" whidth="100" height="100">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <metahttp-equiv="X-UA-Compatible"content="IE=edge">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>"/>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>"rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- Bootstrap CDN -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title><?php echo ($titulo); ?></title>
        <!--Script que pregunta si esta seguro de eliminar todo el carrito. Usado en partes/carritoparte_view -->

        <script type="text/javascript">
            function borra_carrito() {
                var result = confirm('Esta seguro de eliminar todo el carrito?');

                if (result) {
                    window.location = 'carrito_elimina/all';
                } else {
                    return false; // Boton Cancela
                }
            }
        </script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
