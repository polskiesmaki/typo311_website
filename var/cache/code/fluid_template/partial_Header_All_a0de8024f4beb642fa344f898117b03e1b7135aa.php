<?php
class partial_Header_All_a0de8024f4beb642fa344f898117b03e1b7135aa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'1' => ' != 100',
];

$expression3 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 100);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('data.subheader'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('data.date'),
];

$expression7 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};

$arguments5 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        <header';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.frame_class'),
'1' => '==100',
];

$expression11 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 100);};

$arguments9 = [
'then' => ' class="major"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, static fn() => '', $renderingContext)
;

$output8 .= '>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output16 = '';

$output16 .= 'ce-headline-';

$output16 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments15 = [
'then' => $output16,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$array14 = [
'header' => $renderingContext->getVariableProvider()->getByPath('data.header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'positionClass' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
,
'link' => $renderingContext->getVariableProvider()->getByPath('data.header_link'),
'default' => $renderingContext->getVariableProvider()->getByPath('settings.defaultHeaderType'),
];

$arguments12 = [
'section' => NULL,
'partial' => 'Header/Header',
'delegate' => NULL,
'arguments' => $array14,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output8 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output23 = '';

$output23 .= 'ce-headline-';

$output23 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => $output23,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
];

$array21 = [
'subheader' => $renderingContext->getVariableProvider()->getByPath('data.subheader'),
'layout' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'positionClass' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, static fn() => '', $renderingContext)
,
'default' => $renderingContext->getVariableProvider()->getByPath('settings.defaultHeaderType'),
];

$arguments19 = [
'section' => NULL,
'partial' => 'Header/SubHeader',
'delegate' => NULL,
'arguments' => $array21,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output8 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output30 = '';

$output30 .= 'ce-headline-';

$output30 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'then' => $output30,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
];

$array28 = [
'date' => $renderingContext->getVariableProvider()->getByPath('data.date'),
'positionClass' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
,
];

$arguments26 = [
'section' => NULL,
'partial' => 'Header/Date',
'delegate' => NULL,
'arguments' => $array28,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output8 .= '
            </header>
    ';
return $output8;
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output4 .= '
';
return $output4;
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