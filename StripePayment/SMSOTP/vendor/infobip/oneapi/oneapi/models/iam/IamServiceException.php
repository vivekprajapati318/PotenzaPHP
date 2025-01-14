<?php

namespace infobip\models\iam;

use infobip\Models;
use infobip\models\AbstractObject;

class IamServiceException extends AbstractObject {

    public $messageId;
    public $text;
    public $stackTrace;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('infobip\models\iam\IamServiceException');

?>
