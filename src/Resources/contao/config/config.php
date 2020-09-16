<? php 
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array(\LocalbrandingDe\SiteTeamBundle\EventListener\LBAddCustomRegexpListener::class,'__invoke');
