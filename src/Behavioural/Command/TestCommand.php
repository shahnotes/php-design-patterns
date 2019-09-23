<?php

$command = new LightOnCommand(new Light());
$command->execute();
$command = new LightOffCommand(new Light());
$command->execute();