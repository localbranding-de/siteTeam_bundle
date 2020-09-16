
<?php
/**
 * Table tl_member
 */

$GLOBALS['TL_DCA']['tl_member']['fields']['fax'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_member']['fax'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('placeholder'=>'Nach dem Muster: +49.224286061','maxlength'=>64, 'rgxp'=>'lb_fax', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_member']['fields']['mobile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_member']['mobile'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('placeholder'=>'Nach dem Muster: +49.176986060','maxlength'=>64, 'rgxp'=>'lb_mobile', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['phone'] = array
(
    
        'label'                   => &$GLOBALS['TL_LANG']['tl_member']['phone'],
        'exclude'                 => true,
        'search'                  => true,
        'inputType'               => 'text',
        'eval'                    => array('placeholder'=>'Nach dem Muster: +49.224286060','maxlength'=>64, 'rgxp'=>'lb_phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
        'sql'                     => "varchar(64) NOT NULL default ''"
);
