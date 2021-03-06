<?php

/*
 * This file is part of Mailable.
 *
 * (c) Oliver Green <oliver@mailable.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BoxedCode\Eloquent\Meta\Types;

use BoxedCode\Eloquent\Meta\Contracts\Type as TypeContract;

class IntegerType extends Type implements TypeContract
{
    /**
     * Parse & return the meta item value.
     *
     * @return int
     */
    public function get()
    {
        return intval(parent::get());
    }

    /**
     * Parse & set the meta item value.
     *
     * @param int $value
     */
    public function set($value)
    {
        parent::set(intval($value));
    }

    /**
     * Assertain whether we can handle the
     * type of variable passed.
     *
     * @param  mixed  $value
     * @return bool
     */
    public function isType($value)
    {
        return is_int($value);
    }

    /**
     * Output value to string.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->get();
    }
}
