<?php 
namespace LocalbrandingDe\ExtendedProductDetailBundle\EventListener;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Widget;

/**
 * @Hook("addCustomRegexp")
 */
class LBAddCustomRegexpListener
{
    public function __invoke(string $regexp, $input, Widget $widget): bool
    {
        if ('lb_phone' === $regexp) {
            $exp = '^[+]{1}[0-9]{2,3}[\.]{1}[0-9 ]*$';
 
            if (!preg_match('/' . $exp . '/', $input)) {
                $widget->addError('Ungültige Telefonnummer. Bitte nach dem Muster +49.224286060');
            }

            return true;
        }
        if ('lb_fax' === $regexp) {
            $exp = '^[+]{1}[0-9]{2,3}[\.]{1}[0-9 ]*$';
            
            if (!preg_match('/' . $exp . '/', $input)) {
                $widget->addError('Ungültige Faxnummer. Bitte nach dem Muster +49.224286061');
            }
            
            return true;
        }
        if ('lb_mobile' === $regexp) {
            $exp = '^[+]{1}[0-9]{2,3}[\.]{1}[0-9 ]*$';
            
            if (!preg_match('/' . $exp . '/', $input)) {
                $widget->addError('Ungültige Mobilnummer. Bitte nach dem Muster +49.179686060');
            }
            
            return true;
        }

        return false;
    }
}

?>
