<?phpinclude_once 'bootstrap.php';include_once 'Lista.php';###############################$lists = Lista::all();?><h1><?=SELECT ." ". LIST?></h1><p>Prego selezionare la mailing list a cui si desidera inviare la newsletter.</p><ul><?php foreach ($lists as $list) { ?>  <li>    <a href="<?=$cfg['root'] . 'send.php?newsletter_id=' . $_GET['newsletter_id'] . '&list_id=' . $list->id?>"><?=$list->name?></a>  </li><?php } ?></ul><p><a href="javascript:history.back(1)"><?=BACK?></a></p><?php include_once 'foot.php';