<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\Model;

use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException;
use Pimcore\Logger;

/**
 * Abstract base class for order pimcore objects
 */
class AbstractOrder extends \Pimcore\Model\DataObject\Concrete
{
    const ORDER_STATE_COMMITTED = 'committed';
    const ORDER_STATE_CANCELLED = 'cancelled';
    const ORDER_STATE_PAYMENT_PENDING = 'paymentPending';
    const ORDER_STATE_PAYMENT_INIT = 'paymentInit';
    const ORDER_STATE_PAYMENT_AUTHORIZED = 'paymentAuthorized';
    const ORDER_STATE_ABORTED = 'aborted';
    const ORDER_PAYMENT_STATE_ABORTED_BUT_RESPONSE = 'abortedButResponseReceived';

    /**
     * @return string
     *
     * @throws UnsupportedException
     */
    public function getOrdernumber()
    {
        throw new UnsupportedException('getOrdernumber is not implemented for ' . get_class($this));
    }

    /**
     * @param string $ordernumber
     *
     * @throws UnsupportedException
     */
    public function setOrdernumber($ordernumber)
    {
        throw new UnsupportedException('setOrdernumber is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return float
     */
    public function getSubTotalPrice()
    {
        throw new UnsupportedException('getSubTotalPrice is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param float $subTotalPrice
     */
    public function setSubTotalPrice($subTotalPrice)
    {
        throw new UnsupportedException('setSubTotalPrice is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return float
     */
    public function getSubTotalNetPrice()
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('getSubTotalNetPrice not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param float $subTotalPrice
     */
    public function setSubTotalNetPrice($subTotalPrice)
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('setSubTotalNetPrice not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return float
     */
    public function getTotalPrice()
    {
        throw new UnsupportedException('getTotalPrice is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        throw new UnsupportedException('setTotalPrice is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return float
     */
    public function getTotalNetPrice()
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('getTotalNetPrice not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param float $totalPrice
     */
    public function setTotalNetPrice($totalPrice)
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('setTotalNetPrice not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return array
     */
    public function getTaxInfo()
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('getTaxInfo not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param array $taxInfo
     */
    public function setTaxInfo($taxInfo)
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('setTaxInfo not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return \DateTime
     */
    public function getOrderdate()
    {
        throw new UnsupportedException('getOrderdate is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param \DateTime $orderdate
     */
    public function setOrderdate($orderdate)
    {
        throw new UnsupportedException('setOrderdate is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrderItem[]
     */
    public function getItems()
    {
        throw new UnsupportedException('getItems is not implemented for ' . get_class($this));
    }

    /**
     * @param \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrderItem[] $items
     *
     * @throws UnsupportedException
     */
    public function setItems($items)
    {
        throw new UnsupportedException('setItems is not implemented for ' . get_class($this));
    }

    public function getGiftItems()
    {
        throw new UnsupportedException('getGiftItems is not implemented for ' . get_class($this));
    }

    public function setGiftItems($giftItems)
    {
        //prevent throwing an exception for backward compatibility
        Logger::err('setGiftItems not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     * committed
     *
     * @return mixed
     */
    public function getCustomer()
    {
        throw new UnsupportedException('getCustomer is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        throw new UnsupportedException('setCustomer is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return \Pimcore\Model\DataObject\Fieldcollection
     */
    public function getPriceModifications()
    {
        throw new UnsupportedException('getPriceModifications is not implemented for ' . get_class($this));
    }

    /**
     * @param \Pimcore\Model\DataObject\Fieldcollection $priceModifications
     *
     * @return void
     */
    public function setPriceModifications($priceModifications)
    {
        throw new UnsupportedException('setPriceModifications is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getOrderState()
    {
        throw new UnsupportedException('getOrderState is not implemented for ' . get_class($this));
    }

    /**
     * @param string $orderState
     *
     * @return $this
     */
    public function setOrderState($orderState)
    {
        throw new UnsupportedException('setOrderState is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getCartId()
    {
        throw new UnsupportedException('getCartId is not implemented for ' . get_class($this));
    }

    /**
     * @param string $cartId
     *
     * @return void
     */
    public function setCartId($cartId)
    {
        throw new UnsupportedException('setCartId is not implemented for ' . get_class($this));
    }

    /**
     * @throws UnsupportedException
     *
     * @return \Pimcore\Model\DataObject\Fieldcollection
     */
    public function getPaymentInfo()
    {
        throw new UnsupportedException('getPaymentInfo is not implemented for ' . get_class($this));
    }

    /**
     * @param \Pimcore\Model\DataObject\Fieldcollection $paymentInfo
     *
     * @return void
     */
    public function setPaymentInfo($paymentInfo)
    {
        throw new UnsupportedException('setPaymentInfo is not implemented for ' . get_class($this));
    }

    /**
     * returns latest payment info entry
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractPaymentInformation
     */
    public function getLastPaymentInfo()
    {
        if ($this->getPaymentInfo()) {
            $items = $this->getPaymentInfo()->getItems();

            return end($items);
        } else {
            return null;
        }
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerEMail()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerEMail
     *
     * @return $this
     */
    public function setCustomerEMail($customerEMail)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCountry()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerCountry
     *
     * @return $this
     */
    public function setCustomerCountry($customerCountry)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCity()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerCity
     *
     * @return $this
     */
    public function setCustomerCity($customerCity)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerZip()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerZip
     *
     * @return $this
     */
    public function setCustomerZip($customerZip)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerStreet()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerStreet
     *
     * @return $this
     */
    public function setCustomerStreet($customerStreet)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCompany()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerCompany
     *
     * @return $this
     */
    public function setCustomerCompany($customerCompany)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getCustomerFirstname()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerFirstame
     *
     * @return $this
     */
    public function setCustomerFirstname($customerFirstname)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getCustomerLastname()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $customerLastame
     *
     * @return $this
     */
    public function setCustomerLastname($customerLastname)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryEMail()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryEMail
     *
     * @return $this
     */
    public function setDeliveryEMail($deliveryEMail)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCountry()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryCountry
     *
     * @return $this
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCity()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryCity
     *
     * @return $this
     */
    public function setDeliveryCity($deliveryCity)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryZip()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryZip
     *
     * @return $this
     */
    public function setDeliveryZip($deliveryZip)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryStreet()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryStreet
     *
     * @return $this
     */
    public function setDeliveryStreet($deliveryStreet)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCompany()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryCompany
     *
     * @return $this
     */
    public function setDeliveryCompany($deliveryCompany)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getDeliveryFirstname()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryFirstname
     *
     * @return $this
     */
    public function setDeliveryFirstname($deliveryFirstname)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getDeliveryLastname()
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @param string $deliveryLastname
     *
     * @return $this
     */
    public function setDeliveryLastname($deliveryLastname)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return bool
     *
     * @throws UnsupportedException
     */
    public function hasDeliveryAddress()
    {
        return
            ($this->getDeliveryFirstname() != '' || $this->getDeliveryLastname())
            && $this->getDeliveryStreet()
            && $this->getDeliveryCity()
            && $this->getDeliveryZip()
        ;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        throw new UnsupportedException(__FUNCTION__ . ' is not implemented for ' . get_class($this));
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        throw new UnsupportedException('setPaymentInfo is not implemented for ' . get_class($this));
    }

    /**
     * Get voucherTokens - Voucher Tokens
     *
     * @return array
     */
    public function getVoucherTokens()
    {
        throw new UnsupportedException('getVoucherTokens is not implemented for ' . get_class($this));
    }

    /**
     * Set voucherTokens - Voucher Tokens
     *
     * @param array $voucherTokens
     *
     * @return \Pimcore\Model\DataObject\OnlineShopOrder
     */
    public function setVoucherTokens($voucherTokens)
    {
        throw new UnsupportedException('setVoucherTokens is not implemented for ' . get_class($this));
    }
}
