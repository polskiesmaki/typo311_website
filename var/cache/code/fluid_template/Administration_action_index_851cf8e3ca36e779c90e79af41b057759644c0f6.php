<?php
class Administration_action_index_851cf8e3ca36e779c90e79af41b057759644c0f6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Backend/Default';
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
    }
    /**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    </h1>
    <p class="lead">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'key' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.lead_intro',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counts._both'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counts.tx_news_domain_model_news'),
'1' => $renderingContext->getVariableProvider()->getByPath('counts.category_relations'),
];

$arguments9 = [
'key' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.lead_full',
'id' => NULL,
'default' => NULL,
'arguments' => $array11,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
            ';
return $output8;
},
'__else' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array14 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counts.tx_news_domain_model_news'),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('counts.tx_news_domain_model_news'),
];

$arguments17 = [
'key' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.lead_news_only',
'id' => NULL,
'default' => NULL,
'arguments' => $array19,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                    ';
return $output16;
},
'__else' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.lead_none',
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
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, static fn() => '', $renderingContext)
;

$output12 .= '
            ';
return $output12;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output0 .= '
    </p>
    <p>
        Since version <strong>10.0</strong>, the administration module is a
        separate extension called <strong><i>news_administration</i></strong> and not part of <i>news</i> anymore.
    </p>
    <h5>Reasons</h5>
    <ul class="list-unstyled">
        <li><i class="fa fa-check"></i> Less code to maintain within EXT:news</li>
        <li><i class="fa fa-check"></i> Only required for those sites which need the features</li>
        <li><i class="fa fa-check"></i> Separate releases for <i>news_administration</i></li>
        <li><i class="fa fa-check"></i> Ensure further and faster maintenance of EXT:news</li>
    </ul>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
        <dl>
            <dt>Pricing</dt>
            <dd>
                <ul class="list-unstyled">
                    <li>€ 150.00 (ex. VAT) for 1 site</li>
                    <li>€ 450.00 (ex. VAT) for unlimited sites related to an agency or customer</li>
                </ul>
            </dd>
            <dt>Included</dt>
            <dd>Bugfix & feature releases, composer support</dd>
            <dt>Excluded</dt>
            <dd>Major versions</dd>
        </dl>
        <a href="mailto:mail@ringer.it?subject=EXT:news_administration" class="btn btn-default">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'identifier' => 'actions-envelope',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
            Contact
        </a>
    ';
return $output25;
};

$arguments23 = [
'message' => NULL,
'title' => 'Paid version',
'state' => -1,
'iconName' => 'check',
'disableIcon' => false,
];
$renderChildrenClosure24 = ($arguments23['message'] !== null) ? function() use ($arguments23) { return $arguments23['message']; } : $renderChildrenClosure24;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '

    <h2>Features</h2>

    <div class="row form-group">
        <div class="col-4">
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'path' => 'Images/Backend/records.png',
'extensionName' => 'news',
'absolute' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '" alt="Record listing"
                 style="max-width: 100%">
        </div>
        <div class="col-8">
            <h3>Record rendering</h3>
            <p>The rendering of the articles can be configured with various options</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check"></i> Disable the page tree for the whole module and define a default page.
                    This is the fasted way for editors to work with news records.
                </li>
                <li><i class="fa fa-check"></i> Define the fields which are shown
            </ul>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-4">
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'path' => 'Images/Backend/filter.png',
'extensionName' => 'news',
'absolute' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output0 .= '"
                 style="max-width: 100%">
        </div>
        <div class="col-8">
            <h3>Powerful filters</h3>
            <p>Working with lots of records is getting easy when using filter to find the records fast.</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check"></i> Full textsearch</li>
                <li><i class="fa fa-check"></i> Filter by time range of, categories and all other most used attributes
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'path' => 'Images/Backend/pid-listing.png',
'extensionName' => 'news',
'absolute' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '"
                 style="max-width: 100%">
        </div>
        <div class="col-8">
            <h3>Page listing</h3>
            <p>Sometimes got a hard time to find the page on which news, categories or tags are saved? <br>
                This module will help you find those fast and easy.</p>
        </div>
    </div>
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output34 = '';

$output34 .= '

';

$output34 .= '';

$output34 .= '

';

$output34 .= '';

$output34 .= '

';

    return $output34;
}

}

#