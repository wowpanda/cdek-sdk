<?php
/**
 * This code is licensed under the MIT License.
 *
 * Copyright (c) 2018 Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 * Copyright (c) 2018 Alexey Kopytko <alexey@kopytko.com> and contributors
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

declare(strict_types=1);

namespace CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

/**
 * История прозвонов получателя.
 */
final class Call
{
    use Fillable;

    /**
     * @JMS\SerializedName("CallGood")
     * @JMS\XmlList(entry="Good")
     * @JMS\Type("array<CdekSDK\Common\CallGood>")
     *
     * @var CallGood[]|array
     */
    protected $CallGood = [];

    /**
     * @JMS\SerializedName("CallFail")
     * @JMS\XmlList(entry="Fail")
     * @JMS\Type("array<CdekSDK\Common\CallFail>")
     *
     * @var CallFail[]|array
     */
    protected $CallFail = [];

    /**
     * @JMS\SerializedName("CallDelay")
     * @JMS\XmlList(entry="Delay")
     * @JMS\Type("array<CdekSDK\Common\CallDelay>")
     *
     * @var CallDelay[]|array
     */
    protected $CallDelay = [];

    /**
     * История удачных прозвонов.
     *
     * @phan-suppress PhanDeprecatedProperty
     *
     * @return CallGood[]|array
     */
    public function getCallGood()
    {
        return $this->CallGood;
    }

    /**
     * История неудачных прозвонов.
     *
     * @phan-suppress PhanDeprecatedProperty
     *
     * @return CallFail[]|array
     */
    public function getCallFail()
    {
        return $this->CallFail;
    }

    /**
     * История переносов прозвона.
     *
     * @phan-suppress PhanDeprecatedProperty
     *
     * @return CallDelay[]|array
     */
    public function getCallDelay()
    {
        return $this->CallDelay;
    }
}
