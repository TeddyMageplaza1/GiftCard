<?php
namespace Magento\HelloWorld\Controller\Model;

use Magento\Framework\App\Action\Context;

class Curd extends \Magento\Framework\App\Action\Action
{
    protected $_postFactory;
    protected $itemFactory;
    protected $_resource;

    public function __construct(
        Context $context,
        \Magento\HelloWorld\Model\PostFactory $postFactory,
        \Magento\Sales\Model\Order\ItemFactory $itemFactory,
        \Magento\Framework\App\ResourceConnection $resource
    )
    {
        $this->itemFactory = $itemFactory;
        $this->_postFactory = $postFactory;
        $this->_resource = $resource;
        parent::__construct($context);
    }

    public function execute()
    {
        $connection = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $tablename = $connection->getTableName('mp_sales_order_item');
        $query = "select sku, is_virtual from ".$tablename." where order_id = '52'";
        $a = $connection->fetchAll($query);
//        echo "<pre>";
//        print_r($a);
//        echo "</pre>";
        echo 444;
        $data = [
            'name' => "Test1234131",
            'post_content' => "In this article, we will find out how to install and upgrade sql script for module in Magento 2. When you install or upgrade a module, you may need to change the database structure or add some new data for current table. To do this, Magento 2 provide you some classes which you can do all of them.",
            'url_key' => '/magento-2-module-development/magento-2-how-to-create-sql-setup-script.html',
            'tags' => 'magento 2,mageplaza helloworld',
            'status' => 1
        ];


        //try{
//        $a = $post->getCollection()->getData();
//        echo "<pre>";
//        print_r($a);
//        echo "</pre>";
        //$post->addData($data)->save();
        //$data =  $post->load(3);
        //echo $data->getAbcd();
        //echo get_class($data);
        //echo "<pre>";
        //print_r(get_class_methods($data));
        //echo "</pre>";
        //if($post->getData('post_id')){
        // $post->delete();
        //  $post->setData('name','Acd')->save();
//                $post->setName('Ac1111d')->save();
//                echo $post->getName();
//                echo $post->getData('name');
        //echo "Success";
        //}else{
        //echo "Post id does not exist";
        //}

//        }catch (\Exception $e){
//            echo "Error!";
//        }


        //}
    }
}
