<?php

namespace App\Handlers;

class LfmConfigHandler extends \Unisharp\Laravelfilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
    	return Auth()->guard('web_institution')->user()->id;
        // return parent::userField();
    }
}
