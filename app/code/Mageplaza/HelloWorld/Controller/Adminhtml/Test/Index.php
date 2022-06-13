<?php

namespace Mageplaza\HelloWorld\Controller\Adminhtml\Test;

class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{
		echo "test admin";
	}
	protected function _isAllowed()
    {
        return true;
    }

}