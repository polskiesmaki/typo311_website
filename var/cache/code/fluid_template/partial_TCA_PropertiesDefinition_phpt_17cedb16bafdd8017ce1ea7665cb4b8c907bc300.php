<?php
class partial_TCA_PropertiesDefinition_phpt_17cedb16bafdd8017ce1ea7665cb4b8c907bc300 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    \'';

$output3 .= $renderingContext->getVariableProvider()->getByPath('property.fieldName');

$output3 .= '\' => [
        \'exclude\' => ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.excludeField'),
];

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression6(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return 'true';
},
'__else' => function() use ($renderingContext) {
return 'false';
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, static fn() => '', $renderingContext)
;

$output3 .= ',';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.l10nModeExclude'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
        \'l10n_mode\' => \'exclude\',';
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output3 .= '
        \'label\' => \'LLL:EXT:';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.extension.extensionKey');

$output3 .= '/Resources/Private/Language/locallang_db.xlf:';

$output3 .= $renderingContext->getVariableProvider()->getByPath('property.labelNamespace');

$output3 .= '\',
        \'description\' => \'LLL:EXT:';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.extension.extensionKey');

$output3 .= '/Resources/Private/Language/locallang_db.xlf:';

$output3 .= $renderingContext->getVariableProvider()->getByPath('property.descriptionNamespace');

$output3 .= '\',
        \'config\' => ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$output14 = '';

$output14 .= 'TCA/';

$output14 .= $renderingContext->getVariableProvider()->getByPath('property.dataType');

$output14 .= '.phpt';

$array15 = [
'property' => $renderingContext->getVariableProvider()->getByPath('property'),
'domainObject' => $renderingContext->getVariableProvider()->getByPath('domainObject'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments12 = [
'section' => NULL,
'partial' => $output14,
'delegate' => NULL,
'arguments' => $array15,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
};

$arguments10 = [
'indentation' => 2,
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\IndentViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
    ],';
return $output3;
};

$arguments1 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#