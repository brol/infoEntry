<?php 
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of infoEntry, a plugin for Dotclear.
# 
# Copyright (c) 2009-2015 Tomtom and contributors
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
		/* Name */			'infoEntry',
		/* Description */		'Display all information on current entry',
		/* Author */			'Tomtom, Pierre Van Glabeke',
		/* Version */			'1.2.1',
	/* Properties */
	array(
		'permissions' => 'admin',
		'type' => 'plugin',
		'dc_min' => '2.6',
		'support' => 'http://forum.dotclear.org/viewtopic.php?pid=332949#p332949',
		'details' => 'http://plugins.dotaddict.org/dc2/details/infoEntry'
		)
);