<?php

namespace projects;


use Bootgly\CLI;
use Bootgly\Web;


if (\PHP_SAPI) {
   $CLI = new CLI;
} else {
   $Web = new Web;
}
