<?php if ($_GET['page']=='career' AND $_GET['item_id']==NULL){require $_GET['lang'].'/career_list.php';}?>
<?php if ($_GET['page']=='career' AND $_GET['item_id']!==NULL){require $_GET['lang'].'/career_detail.php';}?>