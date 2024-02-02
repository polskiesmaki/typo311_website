<?php
class Standard_action_index_16acc3b27fe82817618c8ef119acbf0121297edd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return 'html
    xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
    data-namespace-typo3-fluid="true"';
};

$arguments4 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return 'f:layout name="Default" /';
};

$arguments6 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '

This template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Backend:
        Templates:
          ';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output3 .= ':
            ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('action.name');
};

$arguments8 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\UppercaseFirstViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return 'f:section name="Buttons"';
};

$arguments10 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= 'be:moduleLayout.button.linkButton
        icon="actions-add"
        title="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return 'f:translate(id: \'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:newRecordGeneral\')';
};

$arguments15 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '"
        link="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= 'f:uri.action(controller: \'';

$output19 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output19 .= '\', action: \'new\')';
return $output19;
};

$arguments17 = [
];

$output14 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output14 .= '"
    /';
return $output14;
};

$arguments12 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return '/f:section';
};

$arguments20 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '

';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return 'f:section name="Content"';
};

$arguments22 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
    <h1>Listing for ';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');

$output3 .= '</h1>

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return 'f:flashMessages /';
};

$arguments24 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output3 .= '

    <table class="';

$output3 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey');

$output3 .= '">
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '<tr>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array32 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.isDisplayable'),
];

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments31 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression33(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
            <th>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output37 = '';

$output37 .= 'f:translate key="';

$output37 .= $renderingContext->getVariableProvider()->getByPath('property.labelNamespace');

$output37 .= '" /';
return $output37;
};

$arguments35 = [
];

$output34 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '</th>
            ';
return $output34;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, static fn() => '', $renderingContext)
;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
            <th></th>
            <th></th>
        </tr>
        ';
return $output28;
};

$arguments26 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
$output43 = '';

$output43 .= 'f:for each="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments48 = [
];
return EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
};

$arguments46 = [
];
return EBT\ExtensionBuilder\ViewHelpers\PluralizeViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};

$arguments44 = [
];

$output43 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '" as="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments50 = [
];

$output43 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output43 .= '"';
return $output43;
};

$arguments41 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
            <tr>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array55 = [
'0' => $renderingContext->getVariableProvider()->getByPath('property.isDisplayable'),
];

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output57 = '';

$output57 .= '
                <td>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= 'f:link.action action="show" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments64 = [
];

$output63 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= ': ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments66 = [
];

$output63 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);
return $output63;
};

$arguments61 = [
];

$output60 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '"';
return $output60;
};

$arguments58 = [
];

$output57 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
$output70 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments71 = [
];

$output70 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '.';

$output70 .= $renderingContext->getVariableProvider()->getByPath('property.nameToBeDisplayedInFluidTemplate');
return $output70;
};

$arguments68 = [
];

$output57 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return '/f:link.action';
};

$arguments73 = [
];

$output57 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output57 .= '</td>
            ';
return $output57;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, static fn() => '', $renderingContext)
;
};

$arguments52 = [
'each' => $renderingContext->getVariableProvider()->getByPath('domainObject.properties'),
'as' => 'property',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output40 .= '

                <td>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
$output77 = '';

$output77 .= 'f:link.action action="edit" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
$output80 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments81 = [
];

$output80 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= ': ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments83 = [
];

$output80 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
return $output80;
};

$arguments78 = [
];

$output77 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '" class="btn btn-default"';
return $output77;
};

$arguments75 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output40 .= 'Edit';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return '/f:link.action';
};

$arguments85 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output40 .= '</td>
                <td>';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
$output89 = '';

$output89 .= 'f:link.action action="delete" arguments="';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output92 = '';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments93 = [
];

$output92 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= ': ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('domainObject.name');
};

$arguments95 = [
];

$output92 .= EBT\ExtensionBuilder\ViewHelpers\Format\LowercaseFirstViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
return $output92;
};

$arguments90 = [
];

$output89 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '" class="btn btn-danger"';
return $output89;
};

$arguments87 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output40 .= 'Delete';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return '/f:link.action';
};

$arguments97 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output40 .= '</td>
            </tr>
        ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return '/f:for';
};

$arguments99 = [
];

$output40 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output40 .= '
        ';
return $output40;
};

$arguments38 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\Format\RemoveMultipleNewlinesViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output3 .= '
    </table>

    ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return 'f:link.action action="new" class="btn btn-default"';
};

$arguments101 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output3 .= 'New ';

$output3 .= $renderingContext->getVariableProvider()->getByPath('domainObject.name');
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return '/f:link.action';
};

$arguments103 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return '/f:section';
};

$arguments105 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return '/html';
};

$arguments107 = [
];

$output3 .= EBT\ExtensionBuilder\ViewHelpers\OpeningTagViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
return $output3;
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
';

    return $output0;
}

}

#