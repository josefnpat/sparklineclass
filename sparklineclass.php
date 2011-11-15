<?php
class sparklineclass {
  private $ticks = array("▁","▂","▃","▄","▅","▆","▇");
  function render($vals){
    $nums = array();
    foreach($vals as $val){
      if(is_numeric($val) and $val>=0){
        $nums[] = $val;
      }
    }
    if(count($nums)){
      $max = max($nums);
      $count_ticks = count($this->ticks)-1;// One to stop seven, one since php starts at 0
      $spark = "";
      foreach($nums as $num){
        $spark .= $this->ticks[round($num/$max*$count_ticks)];
      }
      return $spark;
    }
  }
}
