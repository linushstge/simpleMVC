<?php

function smarty_function_file($params, &$smarty)
{
    return DIR . APP . DIRECTORY_SEPARATOR . TEMPLATE_PATH . DIRECTORY_SEPARATOR  .  TEMPLATE . DIRECTORY_SEPARATOR . $params['src'];
}