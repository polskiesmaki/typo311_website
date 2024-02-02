<?php
class Standard_action_index_e03a64cab10bc7e7b943900083f7023286a75081 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= 'plugin.';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey')]);

$output3 .= '_';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('plugin.key')]);

$output3 .= ' {
    view ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        templateRootPaths.0 = EXT:';

$output6 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output6 .= '/Resources/Private/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '$plugin.';

$output9 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output9 .= '_';

$output9 .= $renderingContext->getVariableProvider()->getByPath('plugin.key');

$output9 .= '.view.templateRootPath';
return $output9;
};

$arguments7 = [
];

$output6 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        partialRootPaths.0 = EXT:';

$output6 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output6 .= '/Resources/Private/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '$plugin.';

$output12 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output12 .= '_';

$output12 .= $renderingContext->getVariableProvider()->getByPath('plugin.key');

$output12 .= '.view.partialRootPath';
return $output12;
};

$arguments10 = [
];

$output6 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
        layoutRootPaths.0 = EXT:';

$output6 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output6 .= '/Resources/Private/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '$plugin.';

$output15 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output15 .= '_';

$output15 .= $renderingContext->getVariableProvider()->getByPath('plugin.key');

$output15 .= '.view.layoutRootPath';
return $output15;
};

$arguments13 = [
];

$output6 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
    ';
return $output6;
};

$arguments4 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '$plugin.';

$output18 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output18 .= '_';

$output18 .= $renderingContext->getVariableProvider()->getByPath('plugin.key');

$output18 .= '.persistence.storagePid';
return $output18;
};

$arguments16 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= '
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
';
return $output3;
};

$arguments1 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.plugins'),
'as' => 'plugin',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.plugins'),
];

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments19 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
# these classes are only used in auto-generated templates
plugin.';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey')]);

$output22 .= '._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color: #FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color: #FF9F9F;
        border: 1px #FF0000 solid;
    }

    .';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName')]);

$output22 .= ' table {
        border-collapse: separate;
        border-spacing: 10px;
    }

    .';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName')]);

$output22 .= ' table th {
        font-weight: bold;
    }

    .';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName')]);

$output22 .= ' table td {
        vertical-align: top;
    }

    .typo3-messages .message-error {
        color: red;
    }

    .typo3-messages .message-ok {
        color: green;
    }
)
';
return $output22;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
# Module configuration
module.';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey')]);

$output25 .= '_';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.mainModule')]);

$output25 .= '_';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.unprefixedShortExtensionKey')]);

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.key')]);

$output25 .= ' {
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '$module.';

$output28 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output28 .= '_';

$output28 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key');

$output28 .= '.persistence.storagePid';
return $output28;
};

$arguments26 = [
];

$output25 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
    }
    view ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
        templateRootPaths.0 = EXT:';

$output31 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output31 .= '/Resources/Private/Backend/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '$module.';

$output34 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output34 .= '_';

$output34 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key');

$output34 .= '.view.templateRootPath';
return $output34;
};

$arguments32 = [
];

$output31 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
        partialRootPaths.0 = EXT:';

$output31 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output31 .= '/Resources/Private/Backend/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output37 = '';

$output37 .= '$module.';

$output37 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output37 .= '_';

$output37 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key');

$output37 .= '.view.partialRootPath';
return $output37;
};

$arguments35 = [
];

$output31 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output31 .= '
        layoutRootPaths.0 = EXT:';

$output31 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey');

$output31 .= '/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '$module.';

$output40 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output40 .= '_';

$output40 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key');

$output40 .= '.view.layoutRootPath';
return $output40;
};

$arguments38 = [
];

$output31 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output31 .= '
    ';
return $output31;
};

$arguments29 = [
];

$output25 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output25 .= '
}
';
return $output25;
};

$arguments23 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.backendModules'),
'as' => 'backendModule',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#