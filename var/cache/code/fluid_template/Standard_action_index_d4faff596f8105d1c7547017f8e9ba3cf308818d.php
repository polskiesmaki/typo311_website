<?php
class Standard_action_index_d4faff596f8105d1c7547017f8e9ba3cf308818d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
return 'f:layout name="Default" /';
};

$arguments6 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '

This template is responsible for displaying a single view for a domain object

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Backend:
        Templates:
          ';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output3 .= ':
            ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('action.name');
};

$arguments8 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return 'f:section name="Buttons"';
};

$arguments10 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= 'be:moduleLayout.button.linkButton
        icon="actions-view-go-back"
        title="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return 'f:translate(id: \'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.goBack\')';
};

$arguments15 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '"
        link="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= 'f:uri.action(controller: \'';

$output19 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output19 .= '\', action: \'list\')';
return $output19;
};

$arguments17 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output14 .= '"
    /';
return $output14;
};

$arguments12 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return '/f:section';
};

$arguments20 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return 'f:section name="Content"';
};

$arguments22 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
    <h1>Single View for ';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output3 .= '</h1>

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return 'f:flashMessages /';
};

$arguments24 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= 'f:render partial="';

$output28 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output28 .= '/Properties" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments32 = [
];

$output31 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= ': ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments34 = [
];

$output31 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
return $output31;
};

$arguments29 = [
];

$output28 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '" /';
return $output28;
};

$arguments26 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return 'f:link.action action="list" class="btn btn-default"';
};

$arguments36 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output3 .= 'Back to list';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return '/f:link.action';
};

$arguments38 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return '/f:section';
};

$arguments40 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return '/html';
};

$arguments42 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
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