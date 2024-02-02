<?php
class Standard_action_index_5d4f43d36872a81cc78469b1eba5a6b92eae843b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    // Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1 = function() use ($renderingContext) {
$output2 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return 'html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers" data-namespace-typo3-fluid="true"';
};

$arguments3 = [
];

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output2 .= '
<table class="';

$output2 .= $renderingContext->getVariableProvider()->getByPath('extension.cssClassName');

$output2 .= '" >
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array12 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.isDisplayable'),
];

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments11 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression13(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output14 = '';

$output14 .= '
	<tr>
		<td>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= 'f:translate key="';

$output17 .= $renderingContext->getVariableProvider()->getByPath('property.labelNamespace');

$output17 .= '" /';
return $output17;
};

$arguments15 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '</td>
		<td>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments21 = [
];

$output20 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '.';

$output20 .= $renderingContext->getVariableProvider()->getByPath('property.nameToBeDisplayedInFluidTemplate');
return $output20;
};

$arguments18 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output14 .= '</td>
	</tr>
		';
return $output14;
},
];

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, static fn() => '', $renderingContext)
;

$output10 .= '
	';
return $output10;
};

$arguments8 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
	';
return $output7;
};

$arguments5 = [
];

$output2 .= EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output2 .= '
</table>
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return '/html';
};

$arguments23 = [
];

$output2 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
return $output2;
};

$arguments0 = [
'value' => NULL,
];

    return isset($arguments0['value']) ? $arguments0['value'] : $renderChildrenClosure1();
}

}

#