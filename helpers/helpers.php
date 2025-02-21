<?php

// datetime function
function dateTime($timeString)
{
  return DateTime::createFromFormat('Y-m-d H:i:s', $timeString);
}
