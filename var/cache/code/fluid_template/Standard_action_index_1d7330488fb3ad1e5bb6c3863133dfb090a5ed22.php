<?php
class Standard_action_index_1d7330488fb3ad1e5bb6c3863133dfb090a5ed22 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<?php


$EM_CONF[$_EXTKEY] = [
    \'title\' => \'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\QuoteStringViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('extension.name');
};

$arguments1 = [
'value' => NULL,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\QuoteStringViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '\',
    \'description\' => \'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\QuoteStringViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('extension.description');
};

$arguments3 = [
'value' => NULL,
];
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\QuoteStringViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '\',
    \'category\' => \'';

$output0 .= $renderingContext->getVariableProvider()->getByPath('extension.category');

$output0 .= '\',
    \'author\' => \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counter.index'),
'1' => ' > 0',
];

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ', ';
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= $renderingContext->getVariableProvider()->getByPath('person.name');
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.persons'),
'as' => 'person',
'key' => NULL,
'reverse' => false,
'iteration' => 'counter',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '\',
    \'author_email\' => \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array14 = [
'0' => $renderingContext->getVariableProvider()->getByPath('person.email'),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counter.index'),
'1' => ' > 0',
];

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments17 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ', ';
},
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output16 .= $renderingContext->getVariableProvider()->getByPath('person.email');
return $output16;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, static fn() => '', $renderingContext)
;
};

$arguments11 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.persons'),
'as' => 'person',
'key' => NULL,
'reverse' => false,
'iteration' => 'counter',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '\',
    \'state\' => \'';

$output0 .= $renderingContext->getVariableProvider()->getByPath('extension.readableState');

$output0 .= '\',
    \'clearCacheOnLoad\' => 0,
    \'version\' => \'';

$output0 .= $renderingContext->getVariableProvider()->getByPath('extension.version');

$output0 .= '\',
    \'constraints\' => [
        \'depends\' => [';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
            \'';

$output22 .= $renderingContext->getVariableProvider()->getByPath('extensionKey');

$output22 .= '\' => \'';

$output22 .= $renderingContext->getVariableProvider()->getByPath('version');

$output22 .= '\',';
return $output22;
};

$arguments20 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.dependencies'),
'as' => 'version',
'key' => 'extensionKey',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
        ],
        \'conflicts\' => [],
        \'suggests\' => [],
    ],
];
';

    return $output0;
}

}

#