<?php

class TM_GaPluginScrolldepth_Block_Adminhtml_Config_Options
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{

    public function _prepareToRender()
    {
        $helper = Mage::helper('tm_gapluginscrolldepth');
        $this->addColumn('name', array(
            'label' => $helper->__('Option Name'),
            'style' => 'width:100px',
        ));
        $this->addColumn('value', array(
            'label' => $helper->__('Value'),
            'style' => 'width:150px',
        ));

        $this->_addAfter = false;
        $this->_addButtonLabel = $helper->__('Add');
    }

}
