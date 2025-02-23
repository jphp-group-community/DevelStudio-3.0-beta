<?
$result = [];

$result[] = array('CAPTION'=>t('Text'),'TYPE'=>'text','PROP'=>'caption');
_addfont($result);
$result[] = array('CAPTION'=>t('Color'),'TYPE'=>'color','PROP'=>'color');
$result[] = array('CAPTION'=>t('Auto Size'),'TYPE'=>'check','PROP'=>'autoSize');
$result[] = array('CAPTION'=>t('Align'),'TYPE'=>'combo','PROP'=>'alignment','VALUES'=>array('taLeftJustify', 'taRightJustify', 'taCenter'));
$result[] = array('CAPTION'=>t('Valign'),'TYPE'=>'combo','PROP'=>'layout','VALUES'=>array('tlTop', 'tlCenter', 'tlBottom'));
$result[] = array('CAPTION'=>t('Transparent'),'TYPE'=>'check','PROP'=>'transparent');
$result[] = array('CAPTION'=>t('Word Wrap'),'TYPE'=>'check','PROP'=>'wordWrap');
$result[] = array('CAPTION'=>t('Hint'),'TYPE'=>'text','PROP'=>'hint');

$result[] = array('CAPTION'=>t('Align'),'TYPE'=>'combo','PROP'=>'align','VALUES'=>array('alNone', 'alTop', 'alBottom', 'alLeft', 'alRight', 'alClient', 'alCustom'),'ADD_GROUP'=>true);

$result[] = array('CAPTION'=>t('Cursor'),'TYPE'=>'combo','PROP'=>'cursor','VALUES'=>$GLOBALS['cursors_meta'],'ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Sizes and position'),'TYPE'=>'sizes','PROP'=>'','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Enabled'),'TYPE'=>'check','PROP'=>'aenabled','REAL_PROP'=>'enabled','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('visible'),'TYPE'=>'check','PROP'=>'avisible','REAL_PROP'=>'visible','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('p_Left'), 'PROP'=>'x','TYPE'=>'number','ADD_GROUP'=>1);
$result[] = array('CAPTION'=>t('p_Top'), 'PROP'=>'y','TYPE'=>'number','ADD_GROUP'=>1);
$result[] = array('CAPTION'=>t('Width'), 'PROP'=>'w','TYPE'=>'number','ADD_GROUP'=>1);
$result[] = array('CAPTION'=>t('Height'), 'PROP'=>'h','TYPE'=>'number','ADD_GROUP'=>1);

$result[] = array('CAPTION'=>t('running _ line'),'TYPE'=>'check','PROP'=>'running_line','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Left_running _ line'),'TYPE'=>'check','PROP'=>'Left_running_line','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Interval (ms)'), 'PROP'=>'IntervalTimer', 'TYPE'=>'number','ADD_GROUP'=>1);

return $result;