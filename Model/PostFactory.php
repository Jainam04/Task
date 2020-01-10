<?php
namespace Js\CRUD\Model;
 
class PostFactory extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
        protected function _construct()
        {
                $this->_init('Js\CRUD\Model\ResourceModel\PostFactory');
        }
 
        public function getIdentities()
        {       
                return [self::CACHE_TAG . '_' . $this->getId()];
        }
 
        public function getDefaultValues()
        {
                $values = [];
 
                return $values;
        }
}
?>