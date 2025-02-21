<?php

use DateTime;

/**
 * Convert date time format
 *
 * @param string $timeString
 * @param string $format
 * @return string
 */
function dateTime(string $timeString, string $format = 'd-m-Y H:i:s'): string
{
  return DateTime::createFromFormat('Y-m-d H:i:s', $timeString)->format($format);
}
