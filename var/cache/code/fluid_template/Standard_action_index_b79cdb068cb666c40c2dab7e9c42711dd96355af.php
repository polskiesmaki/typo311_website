<?php
class Standard_action_index_b79cdb068cb666c40c2dab7e9c42711dd96355af extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return 'html
    xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
    data-namespace-typo3-fluid="true"';
};

$arguments4 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return 'be:moduleLayout';
};

$arguments6 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return 'f:be.pageRenderer /';
};

$arguments8 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return 'be:moduleLayout.menu identifier="ModuleMenu"';
};

$arguments10 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= 'be:moduleLayout.menuItem label="Overview" uri="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= 'f:uri.action(controller: \'';

$output23 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output23 .= '\', action: \'list\')';
return $output23;
};

$arguments21 = [
];

$output20 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '" /';
return $output20;
};

$arguments18 = [
];

$output17 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array25 = [
'0' => $renderingContext->getVariableProvider()->getByPath('domainObject.aggregateRoot'),
];

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression26(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output27 = '';

$output27 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= 'be:moduleLayout.menuItem label="Create new ';

$output30 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output30 .= '" uri="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= 'f:uri.action(controller: \'';

$output33 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output33 .= '\', action: \'new\')';
return $output33;
};

$arguments31 = [
];

$output30 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '" /';
return $output30;
};

$arguments28 = [
];

$output27 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
';
return $output27;
},
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, static fn() => '', $renderingContext)
;

$output17 .= '
';
return $output17;
};

$arguments15 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.domainObjects'),
'as' => 'domainObject',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
        ';
return $output14;
};

$arguments12 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return '/be:moduleLayout.menu';
};

$arguments34 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return 'f:render section="Buttons" /';
};

$arguments36 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return 'be:moduleLayout.button.shortcutButton displayName="Shortcut" /';
};

$arguments38 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return 'f:render section="Content" /';
};

$arguments40 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return '/be:moduleLayout';
};

$arguments42 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return '/html';
};

$arguments44 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
return $output3;
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
';

    return $output0;
}

}

#