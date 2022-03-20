<?php

//#####TEST PAGE####
namespace Team;
include 'BaseballTeam.php';
include 'TeamCache.php';
$t1 = BaseballTeam::create("Reds") ;
$t2 = BaseballTeam::create("Yankees") ;
$arr = array($t1);
$c = new TeamCache();
$c->setTeams($arr[0]);
$c->setTeams($t2);
$count = count($c->teams);
for ($i = 0; $i<$count;++$i){
    echo( "Teams are ".$c->getTeam($i)->getName()."<br>");
}





