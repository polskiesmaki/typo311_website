<?php
class BuilderModule_action_index_fb3d4ed061c0c06182e5dfe82f7b9aa15b39a4f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
	<h1>Extension Builder</h1>
	<p class="bodytext">This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a class="text-primary" href="https://www.infoq.com/presentations/model-to-work-evans/" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots.</li>
	</ul>
	Have a look at the Documentation <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Index.html" target="_blank" >Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return 'Go to the Domain Modeller';
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'text-primary',
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
'action' => 'domainmodelling',
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

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use later on. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager.<br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	<h3>Please have a look at the <a class="text-primary" href="https://docs.typo3.org/p/friendsoftypo3/extension-builder/main/en-us/Security/Index.html" target="_blank" >Security section</a> to avoid unsecure extensions!</h3>
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output3 = '';

$output3 .= '

';

$output3 .= '';

$output3 .= '

';

$output3 .= '';

$output3 .= '

';

    return $output3;
}

}

#