<?php
class Standard_action_index_96946e533fa1f66834ea7e62139e4b17a18d1bec extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.properties');
};

$arguments9 = [
'subject' => NULL,
];
$renderChildrenClosure10 = ($arguments9['subject'] !== null) ? function() use ($arguments9) { return $arguments9['subject']; } : $renderChildrenClosure10;// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\DomainObjectChecksViewHelper

$arguments11 = [
'then' => NULL,
'else' => NULL,
'domainObject' => $renderingContext->getVariableProvider()->getByPath('domainObject'),
'renderCondition' => 'needsTypeField',
'__then' => function() use ($renderingContext) {
return NULL;
},
];

$array8 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext),
'1' => ' > 0 || ',
'2' => EBT\ExtensionBuilder\ViewHelpers\DomainObjectChecksViewHelper::renderStatic($arguments11, static fn() => '', $renderingContext)
,
];

$expression12 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
CREATE TABLE ';

$output13 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName');

$output13 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
	';

$output18 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName');

$output18 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,';
return $output18;
};
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'domainObject' => $renderingContext->getVariableProvider()->getByPath('domainObject'),
];

$arguments14 = [
'each' => EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext),
'as' => 'relation',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.isPersistable'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
	';

$output24 .= $renderingContext->getVariableProvider()->getByPath('property.sqlDefinition');
return $output24;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;
};

$arguments19 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper

$arguments25 = [
'then' => NULL,
'else' => NULL,
'domainObject' => $renderingContext->getVariableProvider()->getByPath('domainObject'),
'renderCondition' => 'needsTypeField',
'__then' => function() use ($renderingContext) {
return '
	tx_extbase_type varchar(255) DEFAULT \'\' NOT NULL,';
},
];

$output13 .= EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output13 .= '
);
';
return $output13;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '
';
return $output6;
};

$arguments4 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.domainObjects'),
'as' => 'domainObject',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$arguments1 = [
];

$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('tableName'),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output35 = '';

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('relation.renderType'),
'1' => ' == \'inline\'',
];

$expression38 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'inline');};

$arguments36 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array40 = [
'0' => $renderingContext->getVariableProvider()->getByPath('tableName'),
'1' => ' == \'sys_file_reference\'',
];

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_file_reference');};

$arguments39 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
'__else' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '

CREATE TABLE ';

$output42 .= $renderingContext->getVariableProvider()->getByPath('tableName');

$output42 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
	';

$output45 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName');

$output45 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
';
return $output45;
};

$arguments43 = [
'each' => $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable'),
'as' => 'relation',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
);
        ';
return $output42;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, static fn() => '', $renderingContext)
;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;

$output35 .= '
      ';
return $output35;
},
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output31 .= '
   ';
return $output31;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.zeroToManyRelationProperties'),
'as' => 'relationsWithSameForeignTable',
'groupBy' => 'foreignDatabaseTableName',
'groupKey' => 'tableName',
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('domainObject.categorizable'),
];

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '

CREATE TABLE ';

$output49 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName');

$output49 .= ' (
	categories int(11) unsigned DEFAULT \'0\' NOT NULL,
);
   ';
return $output49;
},
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, static fn() => '', $renderingContext)
;

$output28 .= '
';
return $output28;
};

$arguments26 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extension.domainObjects'),
'as' => 'domainObject',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#