<?php

defined('ISHOP') or die("Access denided");

/* =====Каталог - получение массива===== */
function catalog() {
  $query = "SELECT * FROM brands ORDER BY parent_id, brand_name";
  $res = mysql_query($query) or die(mysql_query());

  //массив категорий
  $cat = array();
  while($row = mysql_fetch_assoc($res)) {
    if( !$row['parent_id'] ) {
      $cat[$row['brand_id']][] = $row['brand_name']; //$cat[1][0] = alcatel
    }
    else {
      $cat[$row['parent_id']]['sub'][$row['brand_id']] = $row['brand_name']; //$cat[1]['sub'][6] = Раскладушки
    }
  }
  return $cat;
}
/* =====Каталог - получение массива===== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
/* ========== */
