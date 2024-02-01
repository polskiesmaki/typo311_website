<?php
class BackendUser_action_index_3014de4f561842fcac01ca233b85b4196109914e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'backendUserListing',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
    ';

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('compareUserList'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'key' => 'section.compare',
'id' => NULL,
'default' => 'Compare',
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</h3>
        <div class="table-fit">
            <table id="typo3-backend-user-list-compare" class="table table-hover">
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                        <tr>
                            <td>
                                <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid')]);

$output11 .= '" title="id=';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid')]);

$output11 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$array14 = [
'0' => 'TRUE',
];

$expression15 = function($context) {return TRUE;};

$arguments12 = [
'backendUser' => $renderingContext->getVariableProvider()->getByPath('compareUser.uid'),
'size' => 32,
'showIcon' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
];

$output11 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                                </a>
                            </td>
                            <td class="col-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                                    <b>';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.username')]);

$output18 .= '</b>
                                ';
return $output18;
};

$arguments16 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'edit',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('compareUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output11 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output11 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{compareUser.uid}'),
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
                                    <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'key' => 'online',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '</span>
                                ';
return $output22;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output11 .= '
                                <br />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('compareUser.realName'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                        ';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.realName')]);

$output31 .= '
                                    ';
return $output31;
};

$arguments29 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'edit',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('compareUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output28 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                                ';
return $output28;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output11 .= '
                            </td>
                            <td class="col-control">
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                                    ';
return $output36;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'key' => 'edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments32 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('compareUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output11 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output11 .= '
                                </div>
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'identifier' => 'actions-remove',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output44 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                                    ';
return $output44;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'remove',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array43 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('compareUser.uid'),
];

$arguments39 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'removeFromCompareList',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
'arguments' => $array43,
];

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output11 .= '
                                </div>
                            </td>
                        </tr>
                    ';
return $output11;
};

$arguments9 = [
'each' => $renderingContext->getVariableProvider()->getByPath('compareUserList'),
'as' => 'compareUser',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'key' => 'compareUserList',
'id' => NULL,
'default' => 'Compare user list',
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'key' => 'compareUserList',
'id' => NULL,
'default' => 'Compare user list',
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments47 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'compare btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'compare',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
'arguments' => NULL,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
$output55 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'identifier' => 'actions-selection-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output55 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'key' => 'clearCompareList',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);
return $output55;
};

$arguments53 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'removeAllFromCompareList',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
'arguments' => NULL,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output6 .= '
        <hr>
    ';
return $output6;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$array62 = [
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
'backendUserGroups' => $renderingContext->getVariableProvider()->getByPath('backendUserGroups'),
];

$arguments60 = [
'section' => NULL,
'partial' => 'Filters/BackendUser/Index',
'delegate' => NULL,
'arguments' => $array62,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'section' => NULL,
'partial' => 'BackendUser/PaginatedList',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output65 = '';

$output65 .= '

';

$output65 .= '';

$output65 .= '

';

$output65 .= '';

$output65 .= '


';

    return $output65;
}

}

#