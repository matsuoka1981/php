<?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $a => $b) {
  print $a . "は" . $b . "です" . '<br />';
}

echo $b;