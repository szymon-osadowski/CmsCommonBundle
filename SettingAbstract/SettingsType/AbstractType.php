<?php
/**
 * Created by PhpStorm.
 * User: Szymon
 * Date: 10.02.2019
 * Time: 01:09
 */

namespace Stallfish\CmsCommonBundle\Settings\SettingType;

use Stallfish\CmsCommonBundle\Entity\Settings;

/**
 * Class AbstractType
 * @package Stallfish\CmsCommonBundle\Settings\SettingType
 */
abstract class AbstractType implements TypeInterface
{
    const TEXT_TYPE   = 'text';
    const BOOL_TYPE   = 'bool';
    const CHOICE_TYPE = 'choice';
    const LIST_TYPE   = 'list';

    /**
     * @var string
     */
    protected $label;

    /**
     * @var
     */
    protected $value;

    /**
     * @var string
     */
    protected $tab;

    /**
     * @var array
     */
    protected $parametersArray;

    /**
     * AbstractType constructor.
     * @param string $label
     * @param $value
     * @param string|null $tab
     */
    public function __construct(string $label, $value, array $parametersArray, string $tab = null)
    {
        $this->label = $label;
        $this->tab = $tab;
        $this->value = $value;
        $this->parametersArray = $parametersArray;
    }

    /**
     * @return string
     */
    public function getLabel():string
    {
        return (string)$this->label;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getTab():string
    {
        if(is_null($this->tab))
        {
            return 'general';
        }else{
            return $this->tab;
        }
    }

    /**
     * @return array
     */
    public function getParametersArray():array
    {
        if(is_array($this->parametersArray)){
            return $this->parametersArray;
        }else{
            return [];
        }
    }
}