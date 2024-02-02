<?php
class partial_TCA_ZeroToManyRelation_phpt_356ac8d3efa26a9a6d8bd4dc6e00e2b1513aa18b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
    1 => 'TYPO3\\CMS\\FrontendEditing\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.type'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
$output7 = '';

$output7 .= 'TCA/';

$output7 .= $renderingContext->getVariableProvider()->getByPath('property.type');

$output7 .= 'Property.phpt';

$array8 = [
'property' => $renderingContext->getVariableProvider()->getByPath('property'),
'extension' => $renderingContext->getVariableProvider()->getByPath('domainObject.extension'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments5 = [
'section' => NULL,
'partial' => $output7,
'delegate' => NULL,
'arguments' => $array8,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
    ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output9 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output20 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType')]);

$output23 .= '\',
    \'foreign_table\' => \'';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName')]);

$output23 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output23;
};

$arguments21 = [
'value' => 'selectMultipleSideBySide',
];

$output20 .= '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
$output26 = '';

$output26 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName')]);

$output26 .= '\',
    \'foreign_field\' => \'';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName')]);

$output26 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
    \'foreign_sortby\' => \'sorting\',';
},
];

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
;

$output26 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
        \'useSortable\' => 1,';
},
];

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output26 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output26;
};

$arguments24 = [
];

$output20 .= '';
return $output20;
};

$arguments10 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('property.renderType'),
];

$output9 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'selectMultipleSideBySide';
}): return call_user_func(function() use ($renderingContext) {
$output12 = '';

$output12 .= '[
    \'type\' => \'select\',
    \'renderType\' => \'';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.renderType')]);

$output12 .= '\',
    \'foreign_table\' => \'';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName')]);

$output12 .= '\',
    \'default\' => 0,
    \'size\' => 10,
    \'autoSizeMax\' => 30,
    \'maxitems\' => 9999,
    \'multiple\' => 0,
    \'fieldControl\' => [
        \'editPopup\' => [
            \'disabled\' => false,
        ],
        \'addRecord\' => [
            \'disabled\' => false,
        ],
        \'listModule\' => [
            \'disabled\' => true,
        ],
    ],
],';
return $output12;
});
default: return call_user_func(function() use ($renderingContext) {
$output13 = '';

$output13 .= '[
    \'type\' => \'inline\',
    \'foreign_table\' => \'';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignDatabaseTableName')]);

$output13 .= '\',
    \'foreign_field\' => \'';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignKeyName')]);

$output13 .= '\',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
    \'foreign_sortby\' => \'sorting\',';
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output13 .= '
    \'maxitems\' => 9999,
    \'appearance\' => [
        \'collapseAll\' => 0,
        \'levelLinksPosition\' => \'top\',
        \'showSynchronizationLink\' => 1,
        \'showPossibleLocalizationRecords\' => 1,';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel.sorting'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments17 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
        \'useSortable\' => 1,';
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output13 .= '
        \'showAllLocalizationLink\' => 1
    ],
],';
return $output13;
});
}
}, array($arguments10));

$output9 .= '
    ';
return $output9;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#