<?php
/**
 * Iban
 *
 * @author      Jan Schaedlich <schaedlich.jan@gmail.com>
 * @copyright   2013 Jan Schaedlich
 * @link        https://github.com/jschaedl/Iban
 *
 * MIT LICENSE
 */
namespace IBAN\Rule\DE;

class Rule001100 extends \IBAN\Rule\DE\Rule000000
{
    protected $bankAccountSubstitutions = array(
        "1000" => "8010001"
        , "47800" => "47803"
    );
}
