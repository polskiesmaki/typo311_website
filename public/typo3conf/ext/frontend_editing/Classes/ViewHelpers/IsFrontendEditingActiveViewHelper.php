<?php
declare(strict_types=1);

namespace TYPO3\CMS\FrontendEditing\ViewHelpers;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Closure;
use TYPO3\CMS\FrontendEditing\Service\AccessService;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * View helper useful to determine whether frontend editing is active
 *
 * Use in conditions to hide or show content for editors.
 *
 * Example:
 *
 * <f:if condition="{core:isFrontendEditingActive()}">
 *     You're using Frontend Editing. Congratulations!
 * </f:if>
 */
class IsFrontendEditingActiveViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * Returns true if the frontend editor is active
     *
     * @param array $arguments
     * @param Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return bool|string
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): bool|string {
        return AccessService::isEnabled();
    }
}
