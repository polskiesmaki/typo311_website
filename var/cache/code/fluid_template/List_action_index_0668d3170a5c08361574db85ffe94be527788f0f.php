<?php
class List_action_index_0668d3170a5c08361574db85ffe94be527788f0f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
    }
    /**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'installedExtensions',
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'section' => NULL,
'partial' => 'List/UploadForm',
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    <form>
        <div class="row row-cols-auto align-items-end justify-content-between g-3">
            <div class="col">
                <div class="input-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'key' => 'extensionList.search',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments5 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'Tx_Extensionmanager_extensionkey',
'value' => $renderingContext->getVariableProvider()->getByPath('search'),
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext),
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control extension-list-search',
'dir' => NULL,
'id' => 'Tx_Extensionmanager_extensionkey',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                    <button type="submit" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'identifier' => 'actions-search',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '</button>
                </div>
            </div>
            <div class="col">
                <div class="btn-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'extensionList.filter.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
                    ';
return $output20;
};
$output13 = '';

$output13 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == All',
];

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "All");};

$arguments14 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'key' => 'extensionList.filter.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array19 = [
'filter' => '',
];

$arguments11 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output13,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
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
'arguments' => $array19,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'key' => 'extensionList.filter.showSystemExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
                    ';
return $output32;
};
$output25 = '';

$output25 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == System',
];

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "System");};

$arguments26 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'key' => 'extensionList.filter.showSystemExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array31 = [
'filter' => 'System',
];

$arguments23 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output25,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
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
'arguments' => $array31,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'key' => 'extensionList.filter.showLocalExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '
                    ';
return $output44;
};
$output37 = '';

$output37 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == Local',
];

$expression40 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "Local");};

$arguments38 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
];

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'extensionList.filter.showLocalExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array43 = [
'filter' => 'Local',
];

$arguments35 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output37,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
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

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="table-fit">
        <table id="typo3-extension-list" class="table table-striped table-hover extension-list">
            <thead>
                <tr>
                    <th ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sortByUpdate'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments47 = [
'then' => 'data-sort-default',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;

$output0 .= ' title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'extensionList.header.title.update',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'key' => 'extensionList.header.update',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output0 .= '</th>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'key' => 'extensionList.header.title.activate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'key' => 'extensionList.header.activate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output0 .= '</th>
                    <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'key' => 'extensionList.header.extensionName',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output0 .= '</th>
                    <th ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array61 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('sortByUpdate'),
];

$expression62 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments60 = [
'then' => 'data-sort-default',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression62(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, static fn() => '', $renderingContext)
;

$output0 .= ' data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'key' => 'extensionList.header.extensionKey',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="dotsep">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'key' => 'extensionList.header.extensionVersion',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'key' => 'extensionList.header.extensionState',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output0 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'key' => 'extensionList.header.extensionType',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'key' => 'extensionList.header.extensionActions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output0 .= '</th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array77 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject'),
];

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments76 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression78(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output79 = '';

$output79 .= '
                            <tr role="row" id="';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output79 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array81 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState'),
'1' => ' == -1',
];

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};

$arguments80 = [
'then' => 'insecure',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression82(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)),
    $renderingContext
),
];

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array84 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState'),
'1' => ' == -2',
];

$expression85 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};

$arguments83 = [
'then' => 'outdated',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression85(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
];

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, static fn() => '', $renderingContext)
;

$output79 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array87 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments86 = [
'then' => '',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression88(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)),
    $renderingContext
),
];

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, static fn() => '', $renderingContext)
;

$output79 .= '">
                        ';
return $output79;
},
'__else' => function() use ($renderingContext) {
$output89 = '';

$output89 .= '
                            <tr role="row" id="';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output89 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array91 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments90 = [
'then' => '',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
];

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, static fn() => '', $renderingContext)
;

$output89 .= '">
                        ';
return $output89;
},
];

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, static fn() => '', $renderingContext)
;

$output75 .= '
                    <td data-sort="';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.sortUpdate')]);

$output75 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array94 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable'),
];

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments93 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression95(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output96 = '';

$output96 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array98 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateIsBlocked'),
];

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments97 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression99(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output100 = '';

$output100 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'key' => 'extensionList.updateDisabled',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'identifier' => 'actions-system-extension-update',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output100 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output100 .= '
                                    </span>
                                ';
return $output100;
},
'__else' => function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};

$arguments114 = [
'identifier' => 'actions-system-extension-update',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                    ';
return $output113;
};

$array108 = [
'data-action' => 'update-extension',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$array111 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version'),
];

$arguments109 = [
'key' => 'extensionList.updateToVersion',
'id' => NULL,
'default' => NULL,
'arguments' => $array111,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array112 = [
'extension' => $renderingContext->getVariableProvider()->getByPath('extension.key'),
'integerVersionStart' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion'),
'integerVersionStop' => $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion'),
];

$arguments106 = [
'additionalAttributes' => $array108,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'updateCommentForUpdatableVersions',
'controller' => 'Download',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => 'json',
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
'arguments' => $array112,
];

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                ';
return $output105;
},
];

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, static fn() => '', $renderingContext)
;

$output96 .= '
                        ';
return $output96;
},
];

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, static fn() => '', $renderingContext)
;

$output75 .= '
                    </td>
                    <td data-sort="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array117 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments116 = [
'then' => 'active',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression118(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)),
    $renderingContext
),
];

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, static fn() => '', $renderingContext)
;

$output75 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};

$arguments119 = [
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
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output75 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output75 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array122 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.icon'),
];

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments121 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression123(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output124 = '';

$output124 .= '
                                <img class="extension-icon" src="';

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon')]);

$output124 .= '" alt="" />
                            ';
return $output124;
},
'__else' => function() use ($renderingContext) {
$output125 = '';

$output125 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
                            ';
return $output125;
},
];

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, static fn() => '', $renderingContext)
;

$output75 .= '
                        <span title="';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description')]);

$output75 .= '">';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title')]);

$output75 .= '</span>
                    </td>
                    <td>';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output75 .= '</td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array129 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject'),
];

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments128 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression130(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output131 = '';

$output131 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
$output137 = '';

$output137 .= '
                                    ';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version')]);

$output137 .= '
                                ';
return $output137;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
return NULL;
};

$arguments134 = [
'key' => 'showAllVersions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array136 = [
'extensionKey' => $renderingContext->getVariableProvider()->getByPath('extensionKey'),
'returnTo' => 'index',
];

$arguments132 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'showAllVersions',
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
'arguments' => $array136,
];

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                            ';
return $output131;
},
'__else' => function() use ($renderingContext) {
$output138 = '';

$output138 .= '
                                ';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version')]);

$output138 .= '
                            ';
return $output138;
},
];

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, static fn() => '', $renderingContext)
;

$output75 .= '
                    </td>
                    <td><span class="label label-';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state')]);

$output75 .= '">';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state')]);

$output75 .= '</span></td>
                    <td>';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type')]);

$output75 .= '</td>
                    <td>
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
$output141 = '';

$output141 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array143 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('isComposerMode'),
];

$expression144 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments142 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression144(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output145 = '';

$output145 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
return NULL;
};

$arguments146 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'removeExtension btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output145 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
$output153 = '';

$output153 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};

$arguments154 = [
'identifier' => 'actions-system-extension-download',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                                    ';
return $output153;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};

$arguments150 = [
'key' => 'extensionList.downloadzip',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array152 = [
'extension' => $renderingContext->getVariableProvider()->getByPath('extension.key'),
];

$arguments148 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'downloadExtensionZip',
'controller' => 'Action',
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
'arguments' => $array152,
];

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output145 .= '
                                ';
return $output145;
},
];

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, static fn() => '', $renderingContext)
;

$output141 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure157 = function() use ($renderingContext) {
return NULL;
};

$arguments156 = [
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
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output141 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output141 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array159 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink'),
];

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments158 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression160(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output161 = '';

$output161 .= '
                                        <a href="';

$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink')]);

$output161 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure163 = function() use ($renderingContext) {
return NULL;
};

$arguments162 = [
'identifier' => 'actions-system-extension-documentation',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output161 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
                                        </a>
                                    ';
return $output161;
},
'__else' => function() use ($renderingContext) {
$output164 = '';

$output164 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure166 = function() use ($renderingContext) {
return NULL;
};

$arguments165 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output164 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '</span>
                                    ';
return $output164;
},
];

$output141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, static fn() => '', $renderingContext)
;

$output141 .= '
                            ';
return $output141;
};

$arguments139 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output75 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output75 .= '
                        </div>
                    </td>
                    </tr>
                ';
return $output75;
};

$arguments73 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extensions'),
'as' => 'extension',
'key' => 'extensionKey',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '
            </tbody>
        </table>
    </div>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output167 = '';

$output167 .= '
';

$output167 .= '';

$output167 .= '
';

$output167 .= '';

$output167 .= '
';

    return $output167;
}

}

#