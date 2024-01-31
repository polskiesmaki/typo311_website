<?php
class partial_Logo_d67b01c9709d81a0d985e3f2057544306f23abf7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'alt' => '',
'ismap' => NULL,
'longdesc' => NULL,
'usemap' => NULL,
'loading' => NULL,
'decoding' => NULL,
'src' => 'EXT:vt11/Resources/Images/logo-no-background.png',
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => 60,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'logo',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'to Homepage',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'target' => NULL,
'rel' => NULL,
'pageUid' => 4,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#