<?php
/**
 * Nanoslugs plugin for Craft CMS 3.x
 *
 * Hashes the Id of an entry when it is saved and replaces the slug.
 */

namespace WeLove9am\nanoslugs\variables;

use WeLove9am\nanoslugs\Nanoslugs;

use Craft;

/**
 * Nanoslugs Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.nanoslugs }}).
 *
 * https://craftcms.com/docs/plugins/variables
 */
class NanoslugsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.nanoslugs.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.nanoslugs.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function generate($hash)
    {
		  return Nanoslugs::$plugin->NanoslugsService->generate($length, $alphabet);
    }
}