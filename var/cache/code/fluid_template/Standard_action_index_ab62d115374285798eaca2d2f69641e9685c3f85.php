<?php
class Standard_action_index_ab62d115374285798eaca2d2f69641e9685c3f85 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '\\Tests\\Unit\\Domain\\Model;

use PHPUnit\\Framework\\MockObject\\MockObject;
use TYPO3\\TestingFramework\\Core\\AccessibleObjectInterface;
use TYPO3\\TestingFramework\\Core\\Unit\\UnitTestCase;

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

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.name')]);

$output0 .= 'Test extends UnitTestCase
{
    /**
     * @var ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output0 .= '|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('domainObject.fullQualifiedClassName')]);

$output0 .= '::class,
            [\'dummy\']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
];
$renderChildrenClosure15 = ($arguments14['subject'] !== null) ? function() use ($arguments14) { return $arguments14['subject']; } : $renderChildrenClosure15;
$array13 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext),
'1' => ' > 0',
];

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '

    /**
     * @test
     */
    public function get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments21 = [
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= 'ReturnsInitialValueFor';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'match' => 'FileReference',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array24 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments23 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return 'FileReference';
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType');
};

$arguments29 = [
];
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array31 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName')]),
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output20 .= '(): void
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array36 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'int\'',
];

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'int');};

$arguments35 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression37(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output38 = '';

$output38 .= '
        self::assertSame(
            0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments39 = [
];

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '()
        );';
return $output38;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'float\'',
];

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'float');};

$arguments41 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output44 = '';

$output44 .= '
        self::assertSame(
            0.0,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments45 = [
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '()
        );';
return $output44;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'string\'',
];

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'string');};

$arguments47 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
        self::assertSame(
            \'\',
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments51 = [
];

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '()
        );';
return $output50;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'bool\'',
];

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'bool');};

$arguments53 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
        self::assertFalse($this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments57 = [
];

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '());';
return $output56;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array60 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext),
];

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression63(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output64 = '';

$output64 .= '
        $newObjectStorage = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments65 = [
];

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= '()
        );';
return $output64;
},
'__else' => function() use ($renderingContext) {
$output67 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array69 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel'),
];

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression70(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output71 = '';

$output71 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments72 = [
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output71 .= '()
        );';
return $output71;
},
];

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'match' => 'DateTime',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array75 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext),
];

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments74 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression78(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output79 = '';

$output79 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments80 = [
];

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '()
        );';
return $output79;
},
];

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'match' => 'FileReference',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array83 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext),
];

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments82 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression86(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output87 = '';

$output87 .= '
        self::assertEquals(
            null,
            $this->subject->get';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments88 = [
];

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '()
        );';
return $output87;
},
];

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, static fn() => '', $renderingContext)
;
return $output67;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, static fn() => '', $renderingContext)
;

$output20 .= '
    }

    /**
     * @test
     */
    public function set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments90 = [
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output20 .= 'For';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return NULL;
};

$arguments94 = [
'match' => 'FileReference',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array93 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext),
];

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments92 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression96(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return 'FileReference';
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output98 = '';

$output98 .= 'ObjectStorageContaining';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModelName')]);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType');
};

$arguments99 = [
];
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
return NULL;
};

$arguments102 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array101 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext),
];

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments97 = [
'then' => $output98,
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression104(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, static fn() => '', $renderingContext)
;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, static fn() => '', $renderingContext)
;

$output20 .= 'Sets';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments105 = [
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output20 .= '(): void
    {';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array108 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'string\'',
];

$expression109 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'string');};

$arguments107 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression109(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output110 = '';

$output110 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments111 = [
];

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '(\'Conceived at T3CON10\');

        self::assertEquals(\'Conceived at T3CON10\', $this->subject->_get(\'';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output110 .= '\'));';
return $output110;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array114 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => '  == \'int\'',
];

$expression115 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'int');};

$arguments113 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression115(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output116 = '';

$output116 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments117 = [
];

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '(12);

        self::assertEquals(12, $this->subject->_get(\'';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output116 .= '\'));';
return $output116;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array120 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'float\'',
];

$expression121 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'float');};

$arguments119 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression121(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output122 = '';

$output122 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments123 = [
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get(\'';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output122 .= '\'));';
return $output122;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array126 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'1' => ' == \'bool\'',
];

$expression127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'bool');};

$arguments125 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression127(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output128 = '';

$output128 .= '
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments129 = [
];

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '(true);

        self::assertEquals(true, $this->subject->_get(\'';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output128 .= '\'));';
return $output128;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array132 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext),
];

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments131 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression135(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output136 = '';

$output136 .= '
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments137 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= ' = new ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};

$arguments139 = [
'match' => '/^.*<(.*)>$/',
'replace' => '\\1',
'subject' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
];
$renderChildrenClosure140 = ($arguments139['subject'] !== null) ? function() use ($arguments139) { return $arguments139['subject']; } : $renderChildrenClosure140;
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\PregReplaceViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output136 .= '();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments141 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output136 .= ' = new \\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage();
        $objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments143 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output136 .= '->attach($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments145 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output136 .= ');
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure148 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments147 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output136 .= '($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments149 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output136 .= ');

        self::assertEquals($objectStorageHoldingExactlyOne';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments151 = [
];

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output136 .= ', $this->subject->_get(\'';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output136 .= '\'));';
return $output136;
},
'__else' => function() use ($renderingContext) {
$output153 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array155 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.foreignModel'),
];

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments154 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression156(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output157 = '';

$output157 .= '
        $';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output157 .= 'Fixture = new ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output159 = '';

$output159 .= 'ObjectStorageContaining';

$output159 .= '{property.foreignModelName)}';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
return NULL;
};

$arguments161 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array160 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext),
];

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments158 = [
'then' => $output159,
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignModel.fullQualifiedClassName')]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression163(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)),
    $renderingContext
),
];

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, static fn() => '', $renderingContext)
;

$output157 .= '();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments164 = [
];

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output157 .= '($';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output157 .= 'Fixture);

        self::assertEquals($';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output157 .= 'Fixture, $this->subject->_get(\'';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output157 .= '\'));';
return $output157;
},
];

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};

$arguments168 = [
'match' => 'DateTime',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array167 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext),
];

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments166 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression170(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output171 = '';

$output171 .= '
        $dateTimeFixture = new \\DateTime();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments172 = [
];

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output171 .= '($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get(\'';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output171 .= '\'));';
return $output171;
},
];

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};

$arguments176 = [
'match' => 'FileReference',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array175 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext),
];

$expression178 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments174 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression178(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output179 = '';

$output179 .= '
        $fileReferenceFixture = new \\TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference();
        $this->subject->set';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure181 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments180 = [
];

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output179 .= '($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get(\'';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output179 .= '\'));';
return $output179;
},
];

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, static fn() => '', $renderingContext)
;
return $output153;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, static fn() => '', $renderingContext)
;

$output20 .= '
    }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper
$renderChildrenClosure185 = function() use ($renderingContext) {
return NULL;
};

$arguments184 = [
'match' => 'ObjectStorage',
'in' => $renderingContext->getVariableProvider()->getByPath('property.unqualifiedType'),
'caseSensitive' => NULL,
];

$array183 = [
'0' => EBT\ExtensionBuilder\ViewHelpers\MatchStringViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext),
];

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments182 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression186(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output187 = '';

$output187 .= '

    /**
     * @test
     */
    public function add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure189 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments190 = [
];
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
};

$arguments188 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output187 .= 'ToObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure193 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments192 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output187 .= '(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure195 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments194 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output187 .= ' = new ';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName')]);

$output187 .= '();
        $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->onlyMethods([\'attach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock->expects(self::once())->method(\'attach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure197 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments196 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output187 .= '));
        $this->subject->_set(\'';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= '\', $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock);

        $this->subject->add';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure199 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure201 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments200 = [
];
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);
};

$arguments198 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output187 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure203 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments202 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output187 .= ');
    }

    /**
     * @test
     */
    public function remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure205 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments206 = [
];
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
};

$arguments204 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output187 .= 'FromObjectStorageHolding';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure209 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments208 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output187 .= '(): void
    {
        $';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure211 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments210 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output187 .= ' = new ';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.foreignClassName')]);

$output187 .= '();
        $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock = $this->getMockBuilder(\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage::class)
            ->onlyMethods([\'detach\'])
            ->disableOriginalConstructor()
            ->getMock();

        $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock->expects(self::once())->method(\'detach\')->with(self::equalTo($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure213 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments212 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output187 .= '));
        $this->subject->_set(\'';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= '\', $';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('property.name')]);

$output187 .= 'ObjectStorageMock);

        $this->subject->remove';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure215 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure217 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments216 = [
];
return EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);
};

$arguments214 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output187 .= '($';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper
$renderChildrenClosure219 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('property.name');
};

$arguments218 = [
];

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\SingularizeViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output187 .= ');
    }';
return $output187;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, static fn() => '', $renderingContext)
;
return $output20;
};

$arguments18 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
return $output17;
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

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output0 .= '
}
';

    return $output0;
}

}

#