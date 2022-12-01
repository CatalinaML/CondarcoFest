<?php require_once(VIEWS_PATH . 'header.php'); ?>

<main>
    <div>
        <form action="<?php echo FRONT_ROOT . 'Home/showNewEvent'?>" method="get">
            <button class="button-27" role="button">Crear evento</button>   
        </form>
        
    </div>
    
    <!--if existe algo!-->
    <div>
        <h1><!--Nombre evento!--></h1>

        <form action="" method="post">
            <button class="button-28" role="button">Invitados</button>
            <button class="button-28" role="button">Check In</button>
        </form>
    </div>

</main>

<?php require_once(VIEWS_PATH . 'footer.php'); ?>