<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Constraint; class Country extends \MailPoetVendor\Symfony\Component\Validator\Constraint { const NO_SUCH_COUNTRY_ERROR = '8f900c12-61bd-455d-9398-996cd040f7f0'; protected static $errorNames = [self::NO_SUCH_COUNTRY_ERROR => 'NO_SUCH_COUNTRY_ERROR']; public $message = 'This value is not a valid country.'; } 