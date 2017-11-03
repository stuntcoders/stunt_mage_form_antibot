<?php

class StuntCoders_FormAntiBot_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function checkCustomerRegistrationField($observer)
    {
        /** @var Mage_Core_Controller_Front_Action $action */
        $action = $observer->getEvent()->getData('controller_action');

        if (!empty($action->getRequest()->getPost('check_bot'))) {
            $action->getResponse()->setRedirect(Mage::app()->getStore()->getBaseUrl());
            $action->setFlag('', Mage_Core_Controller_Front_Action::FLAG_NO_DISPATCH, true);
        }
    }
}