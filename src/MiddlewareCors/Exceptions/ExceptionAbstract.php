<?php
/**
 * CORS Exception.
 *
 * (c) Richard Bairwell <richard@bairwell.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Bairwell\MiddlewareCors\Exceptions;

/**
 * Class CorsException.
 */
abstract class ExceptionAbstract extends \Exception
{
    /**
     * The item string that was sent.
     *
     * @var string
     */
    protected $sent = '';
    /**
     * The items which are allowed.
     *
     * @var array
     */
    protected $allowed = [];

    /**
     * Store the item that was sent.
     *
     * @param string $sent The item that was sent that we have rejected.
     *
     * @return $this
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
        return $this;
    }//end setSent()


    /**
     * Get the item that was sent.
     *
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }//end getSent()

    /**
     * Store the items that were allowed.
     *
     * @param array $allowed The items that were allowed.
     *
     * @return $this
     */
    public function setAllowed(array $allowed)
    {
        $this->allowed = $allowed;
        return $this;
    }//end setAllowed()


    /**
     * Get the items that were allowed.
     *
     * @return array
     */
    public function getAllowed()
    {
        return $this->allowed;
    }//end getAllowed()
}//end class
