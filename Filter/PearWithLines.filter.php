<?php

require_once 'PHP/Beautifier/Filter/Pear.filter.php';
class PHP_Beautifier_Filter_PearWithLines extends PHP_Beautifier_Filter_Pear
{
    public function t_whitespace($sTag)
    {
        // remove the first series of spaces/tabs,
        // along with any \n that comes before it.
        $sTag = preg_replace("#\\n?[ \\t]*#m", '', $sTag, 1);
        $this->oBeaut->add($sTag);
    }
}