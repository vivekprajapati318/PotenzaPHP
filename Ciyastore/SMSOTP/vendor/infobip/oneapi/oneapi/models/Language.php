<?php

namespace infobip\models;

use infobip\Conversions;
use infobip\Models;
use infobip\utils\Logs;
use infobip\models\SmsException;

class Language {
    public $languageCode;
    public $useSingleShift;
    public $useLockingShift;

    public function __construct($array=null, $success=true) {
        if( ! $success) {
            $this->exception = new SmsException($array);
        } else if($array) {
            Logs::warn('Constructor with JSON params in '.get_class($this).' is deprecated, use Conversions utility class!');
            Conversions::fillFromJSON($this, $array, !$success);
        }
    }

}
Models::register('infobip\models\Language');


?>