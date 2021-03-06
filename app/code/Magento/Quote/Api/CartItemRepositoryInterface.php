<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Quote\Api;

/**
 * Interface CartItemRepositoryInterface
 * @api
 */
interface CartItemRepositoryInterface
{
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @return \Magento\Quote\Api\Data\CartItemInterface[] Array of items.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     */
    public function getList($cartId);

    /**
     * Adds the specified item to the specified cart.
     *
     * @param \Magento\Quote\Api\Data\CartItemInterface $cartItem The item.
     * @return \Magento\Quote\Api\Data\CartItemInterface Item.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     * @throws \Magento\Framework\Exception\CouldNotSaveException The specified item could not be saved to the cart.
     * @throws \Magento\Framework\Exception\InputException The specified item or cart is not valid.
     */
    public function save(\Magento\Quote\Api\Data\CartItemInterface $cartItem);

    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified item or cart does not exist.
     * @throws \Magento\Framework\Exception\CouldNotSaveException The item could not be removed.
     */
    public function deleteById($cartId, $itemId);

    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $customerId Customer ID.
     * @return \Magento\Quote\Api\Data\CartItemInterface[] Array of items.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     */
    public function getListForCustomer($customerId);

    /**
     * Adds the specified item to the specified cart.
     *
     * @param int $customerId Customer ID.
     * @param \Magento\Quote\Api\Data\CartItemInterface $cartItem The item.
     * @return \Magento\Quote\Api\Data\CartItemInterface Item.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     * @throws \Magento\Framework\Exception\CouldNotSaveException The specified item could not be saved to the cart.
     * @throws \Magento\Framework\Exception\InputException The specified item or cart is not valid.
     */
    public function saveForCustomer($customerId, \Magento\Quote\Api\Data\CartItemInterface $cartItem);

    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $customerId Customer ID.
     * @param int $itemId The item ID of the item to be removed.
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified item or cart does not exist.
     * @throws \Magento\Framework\Exception\CouldNotSaveException The item could not be removed.
     */
    public function deleteByIdForCustomer($customerId, $itemId);
}
