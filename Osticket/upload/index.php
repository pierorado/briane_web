<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>

<div id="landing_page">
    <?php
    if($cfg && ($page = $cfg->getLandingPage()))
        echo $page->getBodyWithImages();
    else
        echo  '<h1>'.__('Bienvenidos al Administrador de Tickets de TICS').'</h1>';
    ?>
    <div id="new_ticket" class="pull-left">
        <h3><?php echo __('Open a New Ticket');?></h3>
        <br>
        <div><?php echo __('Por favor, proporcione tantos detalles como sea posible para que podamos ayudarle mejor. Para actualizar un ticket previamente enviado, por favor inicie sesion.');?></div>
    </div>

    <div id="check_status" class="pull-right">
        <h3><?php echo __('Check Ticket Status');?></h3>
        <br>
        <div><?php echo __('Proporcionamos archivos e historial de todas sus solicitudes de soporte actuales y pasadas completas con respuestas.');?></div>
    </div>

    <div class="clear"></div>
    <div class="front-page-button pull-left">
        <p>
            <a href="open.php" class="green button"><?php echo __('Open a New Ticket');?></a>
        </p>
    </div>
    <div class="front-page-button pull-right">
        <p>
            <a href="<?php if(is_object($thisclient)){ echo 'tickets.php';} else {echo 'view.php';}?>" class="blue button"><?php echo __('Check Ticket Status');?></a>
        </p>
    </div>
</div>
<div class="clear"></div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p><?php echo sprintf(
    __('Tenga en cuenta de leer %s antes de abrir un ticket'),
    sprintf('<a href="kb/index.php">%s</a>',
        __('Preguntas Frecuentes (FAQs)')
    )); ?></p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
