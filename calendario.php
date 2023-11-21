<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GELI-CALENDER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <!-- Favicon -->
    <link href="img/Logo.png" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">  
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />    
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">                        
                      <a class="text-white px-3" href="https://wa.me/9381236756?text=Buenas tardes ,disculpe tengo una duda" starget="_blank">Ayuda</a>
                      <span class="text-white">|</span>
                      <a class="text-white pl-3" href="https://wa.me/9381236756?text=Buenas tardes ,Ha habido un error en el sistema" starget="_blank">Soporte</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                      <a class="text-white px-3" href="https://www.facebook.com/Gelipopcarmen/">
                        <i class="fab fa-facebook-f"></i>
                      </a>                        
                      <a class="text-white px-3" href="https://www.instagram.com/geli_pop/">
                        <i class="fab fa-instagram"></i>
                      </a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">GELI</span>-CALENDER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Inicio</a>
                        <a href="nosotros.html" class="nav-item nav-link">Nosotros</a>
                        <a href="productos.html" class="nav-item nav-link">Productos</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">GELi</span>-CALENDER</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="calendario.php" class="nav-item nav-link">Calendario</a>                        
                        <a href="guia\indes.html" class="nav-item nav-link">Guia</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->    

    
  <?php
    include('complemento\config.php');
    $SqlEventos   = ("SELECT * FROM t_eventos");
    $resulEventos = mysqli_query($con, $SqlEventos);
  ?>
<div class="mt-5"></div>

<div class="container">
  <div class="row">
    <div class="col msjs">
      <?php
        include('complemento\msjs.php');
      ?>
    </div>
  </div>
</div>

<div id="calendar"></div>


<?php  
  include('complemento\modalNuevoEvento.php');
  include('complemento\modalUpdateEvento.php');
?>



<script src ="js/jquery-3.0.0.min.js"> </script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/moment.min.js"></script>	
<script type="text/javascript" src="js/fullcalendar.min.js"></script>
<script src='locales/es.js'></script>

<script type="text/javascript">
$(document).ready(function() {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay"
    },

    locale: 'es',

    defaultView: "month",
    navLinks: true, 
    editable: true,
    eventLimit: true, 
    selectable: true,
    selectHelper: false,

//Nuevo Evento
  select: function(start, end){
      $("#exampleModal").modal();
      $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));       
      var Hora = moment().format('HH:mm');
      $('input[name=Hora').val(Hora);

    },
      
    events: [
      <?php
       while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
          {
          _id:   '<?php echo $dataEvento['idEventos']; ?>',
          title: '<?php echo $dataEvento['Nombre']; ?>',
          start: '<?php echo $dataEvento['Fecha']; ?>',
          middle:'<?php echo $dataEvento['Time']; ?>',
          precio:'<?php echo $dataEvento['Precio']; ?>',
          end: '<?php echo $dataEvento['Color']; ?>'
          },
        <?php } ?>
    ],


//Eliminar Evento
eventRender: function(event, element) 
{
  element
    .find(".fc-content")
    .prepend("<span id='btnCerrar' class='closeon material-icons'>&#xe5cd;</span>")
    
  //Eliminar evento
  element.find(".closeon").on("click", function() 
  {
    var pregunta = confirm("Deseas Borrar este Evento?");   
    if (pregunta) 
    {
      $("#calendar").fullCalendar("removeEvents", event._id);
      $.ajax({
            type: "POST",
            url: './complemento/deleteEvento.php',
            data: {id:event._id},
            success: function(datos)
            {
              $(".alert-danger").show();

              setTimeout(function () {
                $(".alert-danger").slideUp(500);
              }, 3000); 
            }
        });      
    } else 
      {
       return false;
      }
  });
},


//Moviendo Evento Drag - Drop
eventDrop: function (event, delta) {
  var idEvento = event._id;
  var start = (event.start.format('DD-MM-YYYY'));
  var end = (event.end.format("DD-MM-YYYY"));

    $.ajax({
        url: 'drag_drop_evento.php',
        data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
        type: "POST",
        success: function (response) {
         // $("#respuesta").html(response);
        }
    });
},

//Modificar Evento del Calendario 
eventClick:function(event){
    var idEvento = event._id;
    $('input[name=idEvento').val(idEvento);
    $('input[name=evento').val(event.title);
    $('input[name=fecha_inicio').val(event.start.format('DD-MM-YYYY'));    
    $('input[name=Hora').val(event.middle);        
    var precio = event.precio;
    $('input[name=precio').val(precio);    
    $("#modalUpdateEvento").modal();
  },

  });


//Oculta mensajes de Notificacion
  setTimeout(function () {
    $(".alert").slideUp(300);
  }, 3000); 


});

</script>

</body>

</html>