<?php

use DAO\EventDAO;

 require_once(VIEWS_PATH . 'header.php'); ?>

<main>
    <div>
        <form action="<?php echo FRONT_ROOT . 'Home/showNewEvent'?>" method="get">
            <button class="button-27" role="button">Crear evento</button>   
        </form>
        
    </div>
    
    <!--if existe algo!-->
    <?php
    $eventsDAO = new EventDAO();
    $listEvents = $eventsDAO->getAll();
    if($listEvents != null){ 
        foreach($listEvents as $event){ ?>
        <div>
        <h1><?php echo $event->getName();?></h1>
        <h2>Fecha: <?php echo $event->getDate();?></h2>
        <h2>Valor entrada: <?php echo $event->getPrice();?></h2>

        <form action="<?php echo FRONT_ROOT . 'Home/showListGuest'?>" method="post">
            <button class="button-28" role="button">Invitados</button>
        </form>

        <form action="" method="post">
            <button class="button-28" role="button">Check In</button>
        </form>
    </div>
    <?php }
     } ?>
    

</main>

<?php require_once(VIEWS_PATH . 'footer.php'); ?>