<?php

	exec("stty -f /dev/tty.usbmodemfd131 raw speed 9600");
	exec('echo "'.$_GET['status'].'" > /dev/tty.usbmodemfd131');
