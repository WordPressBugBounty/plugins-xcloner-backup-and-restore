<?php

namespace Sabre\VObject\TimezoneGuesser;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use DateTimeZone;
use Sabre\VObject\Component\VTimeZone;

interface TimezoneGuesser
{
    public function guess(VTimeZone $vtimezone, bool $failIfUncertain = false): ?DateTimeZone;
}
