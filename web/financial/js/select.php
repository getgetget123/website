<?php 
   $aid = (int)$_GET['id'];
   if($aid===1)
   {
      $arr = array(1=>array('10'=>'北京'));
   }else if($aid===2)
   {
   	  $arr = array(2=>array('20'=>'天津'));
   }else if($aid===3)
   {
      $arr = array(3=>array('30'=>'山西'));
   }else if($aid===10){
      $arr = array('10'=>array('100'=>'海淀','101'=>'朝阳','102'=>'丰台','103'=>'大兴','104'=>'亦庄','105'=>'通州','106'=>'昌平','107'=>'东城','108'=>'西城','109'=>'密云','1010'=>'石景山'));
   }else if($aid===20){
   	  $arr = array('20'=>array('200'=>'河西','201'=>'河东','202'=>'和平','203'=>'南开','204'=>'虹桥','205'=>'西青','206'=>'津南','207'=>'塘沽','208'=>'大港','209'=>'宝坻','2010'=>'静海'));
   }else{
   	  $arr = array();
   }
   echo json_encode($arr);
?>