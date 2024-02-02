<?php
class Standard_action_index_7daff61ee08658444e719827c21f678d38bb3227 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
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
));
    }
    /**
 * section Module
 */
public function section_b8ff02892916ff59f7fbd4e617fccd01f6bca576(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('iteration.index');
};

$arguments4 = [
'value' => NULL,
'name' => 'uid',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
};

$arguments6 = [
'value' => NULL,
'name' => 'icon',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.label');
};

$arguments10 = [
'value' => NULL,
'name' => 'label',
];
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};

$arguments12 = [
'value' => NULL,
'name' => 'information',
];
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'module' => $renderingContext->getVariableProvider()->getByPath('module'),
'uid' => $renderingContext->getVariableProvider()->getByPath('uid'),
'icon' => $renderingContext->getVariableProvider()->getByPath('icon'),
'label' => $renderingContext->getVariableProvider()->getByPath('label'),
'information' => $renderingContext->getVariableProvider()->getByPath('information'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array17 = [
'0' => 'false',
];

$expression18 = function($context) {return FALSE;};

$arguments14 = [
'section' => NULL,
'partial' => 'Modules/Item',
'delegate' => NULL,
'arguments' => $array16,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
    ';
return $output3;
};

$arguments1 = [
'each' => $renderingContext->getVariableProvider()->getByPath('parentModules'),
'as' => 'module',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent'),
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
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return 'hook';
};

$arguments23 = [
'value' => NULL,
'name' => 'uid',
];
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'identifier' => 'actions-window-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};

$arguments25 = [
'value' => NULL,
'name' => 'icon',
];
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:deprecatedModuleLabel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
};

$arguments29 = [
'value' => NULL,
'name' => 'label',
];
$renderChildrenClosure30 = ($arguments29['value'] !== null) ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent');
};

$arguments33 = [
'value' => NULL,
'name' => 'mainContent',
];
$renderChildrenClosure34 = ($arguments33['value'] !== null) ? function() use ($arguments33) { return $arguments33['value']; } : $renderChildrenClosure34;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output22 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};
$output37 = '';

$array38 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('uid'),
'icon' => $renderingContext->getVariableProvider()->getByPath('icon'),
'label' => $renderingContext->getVariableProvider()->getByPath('label'),
'mainContent' => $renderingContext->getVariableProvider()->getByPath('mainContent'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$output37 .= $array38;

$output37 .= '}';

$array39 = [
'0' => 'false',
];

$expression40 = function($context) {return FALSE;};

$arguments35 = [
'section' => NULL,
'partial' => 'Modules/Item',
'delegate' => NULL,
'arguments' => $output37,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
];

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output22 .= '
    ';
return $output22;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * section Settings
 */
public function section_c7f73bb54d928922c3838bb789ee9fb8a5b1eb37(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output41 = '';

$output41 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return 'settings';
};

$arguments42 = [
'value' => NULL,
'name' => 'uid',
];
$renderChildrenClosure43 = ($arguments42['value'] !== null) ? function() use ($arguments42) { return $arguments42['value']; } : $renderChildrenClosure43;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'identifier' => 'actions-system-extension-configure',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};

$arguments44 = [
'value' => NULL,
'name' => 'icon',
];
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
};

$arguments48 = [
'value' => NULL,
'name' => 'label',
];
$renderChildrenClosure49 = ($arguments48['value'] !== null) ? function() use ($arguments48) { return $arguments48['value']; } : $renderChildrenClosure49;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};

$arguments52 = [
'value' => NULL,
'name' => 'information',
];
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
        <h1 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '</h1>
        <div class="typo3-adminPanel-card-group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array63 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.pageSettings'),
];

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression64(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                    <div class="typo3-adminPanel-card">
                        <div class="typo3-adminPanel-card-header">
                            <h2 class="typo3-adminPanel-card-header-headline">
                                <span class="typo3-adminPanel-card-header-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};

$arguments66 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '</span>
                                <span class="typo3-adminPanel-card-header-text">';

$output65 .= $renderingContext->getVariableProvider()->getByPath('module.label');

$output65 .= '</span>
                            </h2>
                        </div>
                        <div class="typo3-adminPanel-card-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.pageSettings');
};

$arguments68 = [
'value' => NULL,
];

$output65 .= isset($arguments68['value']) ? $arguments68['value'] : $renderChildrenClosure69();

$output65 .= '</div>
                    </div>
                ';
return $output65;
},
];

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, static fn() => '', $renderingContext)
;

$output61 .= '
            ';
return $output61;
};

$arguments59 = [
'each' => $renderingContext->getVariableProvider()->getByPath('settingsModules'),
'as' => 'module',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output56 .= '
        </div>
        <div class="typo3-adminPanel-form-group">
            <button data-typo3-role="typo3-adminPanel-saveButton" class="typo3-adminPanel-btn typo3-adminPanel-btn-primary">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.updateButtonLabel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output56 .= '
            </button>
        </div>
    ';
return $output56;
};

$arguments54 = [
'value' => NULL,
'name' => 'mainContent',
];
$renderChildrenClosure55 = ($arguments54['value'] !== null) ? function() use ($arguments54) { return $arguments54['value']; } : $renderChildrenClosure55;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output41 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$array74 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('uid'),
'icon' => $renderingContext->getVariableProvider()->getByPath('icon'),
'label' => $renderingContext->getVariableProvider()->getByPath('label'),
'information' => $renderingContext->getVariableProvider()->getByPath('information'),
'mainContent' => $renderingContext->getVariableProvider()->getByPath('mainContent'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array75 = [
'0' => 'false',
];

$expression76 = function($context) {return FALSE;};

$arguments72 = [
'section' => NULL,
'partial' => 'Modules/Item',
'delegate' => NULL,
'arguments' => $array74,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression76(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)),
    $renderingContext
),
];

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output41 .= '
';

    return $output41;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output77 = '';

$output77 .= '
';

$output77 .= '';

$output77 .= '
';

$output77 .= '';

$output77 .= '
';

$output77 .= '';

$output77 .= '

';

    return $output77;
}

}

#