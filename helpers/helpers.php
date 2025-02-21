<?php

// datetime function
function dateTime($timeString, $format = 'd-m-Y H:i:s')
{
  return DateTime::createFromFormat('Y-m-d H:i:s', $timeString)->format($format);
}
