<?php
namespace Js\CRUD\Block;
 
use Magento\Framework\App\Filesystem\DirectoryList;
 
class Index extends \Magento\Framework\View\Element\Template
{
	protected $_filesystem;
 
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Js\CRUD\Model\PostFactory $postFactory
		)
	{				
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}		
	public function getResult()
	{	
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();
		return $collection;
	}
}
?>