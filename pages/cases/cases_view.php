<?php if ($_GET['page']=='cases' AND $_GET['item_id']==NULL){require $_GET['lang'].'/cases_list.php';}?>

<?php if ($_GET['page']=='cases' AND $_GET['item_id']!==NULL){require $_GET['lang'].'/cases_detail.php';}?>