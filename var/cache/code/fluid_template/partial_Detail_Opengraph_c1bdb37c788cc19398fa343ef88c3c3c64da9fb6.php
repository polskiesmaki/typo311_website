<?php
class partial_Detail_Opengraph_c1bdb37c788cc19398fa343ef88c3c3c64da9fb6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
  'rx' => 
  array (
    0 => 'Reelworx\\RxShariff\\ViewHelper',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'property' => 'og:title',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'property' => 'og:title',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.title'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'property' => 'og:type',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.type'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'0' => 1,
];

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'property' => 'og:url',
'name' => '',
'content' => '',
'useCurrentDomain' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression13(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'property' => 'og:site_name',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.site_name'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$array24 = [
'0' => 1,
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'src' => $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview.uid'),
'treatIdAsReference' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => 1200,
'maxHeight' => NULL,
'absolute' => false,
];

$arguments20 = [
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext),
'name' => 'ogImagePath',
];
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$array28 = [
'0' => 1,
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments26 = [
'property' => 'og:image',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'replace' => false,
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output19 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'property' => 'width',
'image' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
];

$arguments30 = [
'property' => 'og:image:width',
'name' => '',
'content' => GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output19 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'property' => 'height',
'image' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
];

$arguments34 = [
'property' => 'og:image:height',
'name' => '',
'content' => GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output19 .= '
';
return $output19;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
];

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments38 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output41 = '';

$output41 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'property' => '',
'name' => 'description',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'property' => 'og:description',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output41 .= '
	';
return $output41;
},
'__else' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};

$arguments49 = [
'value' => NULL,
'allowedTags' => NULL,
];
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$arguments47 = [
'property' => '',
'name' => 'description',
'content' => TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};

$arguments53 = [
'value' => NULL,
'allowedTags' => NULL,
];
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$arguments51 = [
'property' => 'og:description',
'name' => '',
'content' => TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output46 .= '
	';
return $output46;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, static fn() => '', $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'property' => '',
'name' => 'keywords',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.keywords'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'property' => 'fb:admins',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.admins'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'property' => 'og:locale',
'name' => '',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.locale'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array62 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site'),
];

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments61 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression63(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output64 = '';

$output64 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'property' => '',
'name' => 'twitter:card',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.card'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'property' => '',
'name' => 'twitter:site',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output64 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'property' => '',
'name' => 'twitter:creator',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.creator'),
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
];

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output64 .= '
';
return $output64;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#