<?php
/**
 * Nanoslugs plugin for Craft CMS 3.x
 *
 * Hashes the Id of an entry when it is saved and replaces the slug.
 */

namespace WeLove9am\nanoslugs\models;

use WeLove9am\nanoslugs\Nanoslugs;

use Craft;
use craft\base\Model;

class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $length = 8;
    public $alphabet = '0123456789abcdefghijklmnopqrstuvwxyz-';
    public $sections = array();

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['length', 'number'],
            ['length', 'default', 'value' => 8],
            ['alphabet', 'string'],
            ['alphabet', 'default', 'value' => 'abcdefghijklmnopqrstuvwxyz123456789'],
        ];
    }
}
