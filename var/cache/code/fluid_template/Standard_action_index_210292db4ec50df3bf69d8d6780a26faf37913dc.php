<?php
class Standard_action_index_210292db4ec50df3bf69d8d6780a26faf37913dc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<?php

declare(strict_types=1);

namespace ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.namespaceName')]);

$output0 .= '\\Tests\\Unit\\Controller;

use PHPUnit\\Framework\\MockObject\\MockObject;
use TYPO3\\TestingFramework\\Core\\AccessibleObjectInterface;
use TYPO3\\TestingFramework\\Core\\Unit\\UnitTestCase;
use TYPO3Fluid\\Fluid\\View\\ViewInterface;

/**
 * Test case
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.persons'),
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
$output4 = '';

$output4 .= ' *
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= ' * @author ';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.name')]);

$output7 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('person.email'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '<';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('person.email')]);

$output11 .= '>';
return $output11;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '
';
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.persons'),
'as' => 'person',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= ' */
class ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('controllerName')]);

$output0 .= 'Test extends UnitTestCase
{
    /**
     * @var \\';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.controllerClassName')]);

$output0 .= '|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\\';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.controllerClassName')]);

$output0 .= '::class))
            ->onlyMethods([\'redirect\', \'forward\', \'addFlashMessage\'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'1' => ' == \'list\'',
];

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'list');};

$arguments15 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '

    /**
     * @test
     */
    public function listActionFetchesAll';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments19 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= 'FromRepositoryAndAssignsThemToView(): void
    {
        $all';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments21 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output18 .= ' = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments23 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output18 .= 'Repository = $this->getMockBuilder(\\';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedDomainRepositoryClassName')]);

$output18 .= '::class)
            ->onlyMethods([\'findAll\'])
            ->disableOriginalConstructor()
            ->getMock();
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments25 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output18 .= 'Repository->expects(self::once())->method(\'findAll\')->will(self::returnValue($all';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments27 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output18 .= '));
        $this->subject->_set(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments29 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output18 .= 'Repository\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments31 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output18 .= 'Repository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method(\'assign\')->with(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments35 = [
];
return EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
};

$arguments33 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output18 .= '\', $all';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments37 = [
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output18 .= ');
        $this->subject->_set(\'view\', $view);

        $this->subject->listAction();
    }';
return $output18;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'match' => 'show',
'in' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'caseSensitive' => NULL,
];

$array40 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext),
];

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments39 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output44 = '';

$output44 .= '

    /**
     * @test
     */
    public function showActionAssignsTheGiven';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output44 .= 'ToView(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments45 = [
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= ' = new ';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output44 .= '();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set(\'view\', $view);
        $view->expects(self::once())->method(\'assign\')->with(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments47 = [
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output44 .= '\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments49 = [
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output44 .= ');

        $this->subject->showAction($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments51 = [
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output44 .= ');
    }';
return $output44;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'match' => 'create',
'in' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'caseSensitive' => NULL,
];

$array54 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext),
];

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments53 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression57(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output58 = '';

$output58 .= '

    /**
     * @test
     */
    public function createActionAddsTheGiven';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output58 .= 'To';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output58 .= 'Repository(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments59 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= ' = new ';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output58 .= '();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments61 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output58 .= 'Repository = $this->getMockBuilder(\\';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedDomainRepositoryClassName')]);

$output58 .= '::class)
            ->onlyMethods([\'add\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments63 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output58 .= 'Repository->expects(self::once())->method(\'add\')->with($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments65 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output58 .= ');
        $this->subject->_set(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments67 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output58 .= 'Repository\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments69 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output58 .= 'Repository);

        $this->subject->createAction($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments71 = [
];

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output58 .= ');
    }';
return $output58;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'match' => 'edit',
'in' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'caseSensitive' => NULL,
];

$array74 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext),
];

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments73 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression77(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output78 = '';

$output78 .= '

    /**
     * @test
     */
    public function editActionAssignsTheGiven';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output78 .= 'ToView(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments79 = [
];

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= ' = new ';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output78 .= '();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set(\'view\', $view);
        $view->expects(self::once())->method(\'assign\')->with(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments81 = [
];

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output78 .= '\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments83 = [
];

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output78 .= ');

        $this->subject->editAction($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments85 = [
];

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output78 .= ');
    }
';
return $output78;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'match' => 'update',
'in' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'caseSensitive' => NULL,
];

$array88 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext),
];

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments87 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression91(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output92 = '';

$output92 .= '

    /**
     * @test
     */
    public function updateActionUpdatesTheGiven';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output92 .= 'In';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output92 .= 'Repository(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments93 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= ' = new ';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output92 .= '();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments95 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output92 .= 'Repository = $this->getMockBuilder(\\';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedDomainRepositoryClassName')]);

$output92 .= '::class)
            ->onlyMethods([\'update\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments97 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output92 .= 'Repository->expects(self::once())->method(\'update\')->with($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments99 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output92 .= ');
        $this->subject->_set(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments101 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output92 .= 'Repository\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments103 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output92 .= 'Repository);

        $this->subject->updateAction($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments105 = [
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output92 .= ');
    }';
return $output92;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'match' => 'delete',
'in' => $renderingContext->getVariableProvider()->getByPath('action.name'),
'caseSensitive' => NULL,
];

$array108 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext),
];

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments107 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '

    /**
     * @test
     */
    public function deleteActionRemovesTheGiven';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output112 .= 'From';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output112 .= 'Repository(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments113 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= ' = new ';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output112 .= '();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments115 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output112 .= 'Repository = $this->getMockBuilder(\\';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.qualifiedDomainRepositoryClassName')]);

$output112 .= '::class)
            ->onlyMethods([\'remove\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments117 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output112 .= 'Repository->expects(self::once())->method(\'remove\')->with($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments119 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output112 .= ');
        $this->subject->_set(\'';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments121 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output112 .= 'Repository\', $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments123 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output112 .= 'Repository);

        $this->subject->deleteAction($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments125 = [
];

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output112 .= ');
    }';
return $output112;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, static fn() => '', $renderingContext)
;
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.actions'),
'as' => 'action',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array128 = [
'0' => $renderingContext->getVariableProvider()->getByPath('domainObject.actions'),
];

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments127 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression129(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return NULL;
},
'__else' => function() use ($renderingContext) {
return '
    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty(): void
    {
        self::markTestIncomplete();
    }';
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, static fn() => '', $renderingContext)
;

$output0 .= '
}
';

    return $output0;
}

}

#