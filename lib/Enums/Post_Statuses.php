<?php

namespace Underpin\WordPress\Custom_Post_Types;


enum Post_Statuses {

	case publish;
	case future;
	case draft;
	case pending;
	case private;

}